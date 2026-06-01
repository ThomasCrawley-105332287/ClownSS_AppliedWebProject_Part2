<?php
  // Page metadata variables (used by header include)
  $pageTitle = "Manage EOIs";
  $metaDescription = "Manage Expressions of Interest for the ClownSS project.";
  $metaKeywords = "Smart City, ClownSS, EOIs, manage EOIs, administration, web management";
  $metaAuthor = "Jack Goodsell, Callum Rochfort";
  $mainCSS = "../styles/main_style_sheet.css";
?>

<?php 
// Navigation/header variables
$logoSrc = "../images/clownSS_logo_simple.png";
$indexLink = "../index.php";
$aboutLink = "about.php";
$jobsLink = "jobs.php";
$applyLink = "apply.php";
?>

<!-- footer.inc variables -->
<?php 
$selfLink = "manage.php";
?>


<?php
session_start(); // Start or resume the session

// If user is not logged in, redirect to login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

require_once("../includes/settings.php"); // Load DB credentials

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* Deletes EOIs by job reference number. */
// If delete form submitted AND job reference field is not empty
if (isset($_POST['delete_submit']) && !empty($_POST['delete_jobref'])) {

    // Clean input
    $delete_jobref = trim($_POST['delete_jobref']); 

    // Prepared statement to delete all EOIs for a job reference
    $stmt = $conn->prepare("DELETE FROM eoi WHERE job_ref_num = ?");
    $stmt->bind_param("s", $delete_jobref);
    $stmt->execute();
    $stmt->close();
}

/* Updates Status value for a given EOI */
// If update status form submitted
if (isset($_POST['update_status'])) {

    $eoi_num = $_POST['eoi_num']; // EOI ID
    $status  = $_POST['status'];  // New status

    // Allowed status values
    $allowed_status = ['new', 'current', 'final', 'rejected'];

    // Only update if status is valid
    if (in_array($status, $allowed_status)) {

        // Prepared statement to update status
        $stmt = $conn->prepare(
            "UPDATE eoi SET status = ? WHERE eoi_num = ?"
        );

        $stmt->bind_param("si", $status, $eoi_num);
        $stmt->execute();
        $stmt->close();
    }
}


// Function to build the SQL query based on filters & sorting
//build and EOI table query using: connected database, current(it being current is a consequence of using 
// onchange later) sort value, job reference number if one is input. Name search using LIKE so that we can look
//for all eoi applicants with any shared name substring e.g Callum and Charles both have 'a'. Status filter, to
//allow user's to view only eoi's of a desired status.
function buildEOIQuery($conn, $sort, $jobref, $search, $status)
{
    // determine buildEOIQuery $sort value
    switch ($sort) {

        case 'oldest':
            $order = "eoi_num ASC";
            break;

        case 'first_name':
            $order = "first_name ASC";
            break;

        case 'last_name':
            $order = "last_name ASC";
            break;

        case 'jobref':
            $order = "job_ref_num ASC";
            break;

        default:
            $order = "eoi_num DESC"; // newest first
            break;
    }

    // Array for storing WHERE conditions, to be imploded later into a single SQL query
    $where = [];

    // Filter by job reference
    if (!empty($jobref)) {
        $jobref = mysqli_real_escape_string($conn, $jobref);
        $where[] = "job_ref_num = '$jobref'";
    }

    // Filter by name search
    if (!empty($search)) {
        $search = mysqli_real_escape_string($conn, $search);
        $where[] = "(first_name LIKE '%$search%' OR last_name LIKE '%$search%')";
    }

    // Filter by status
    if (!empty($status)) {
        $status = mysqli_real_escape_string($conn, $status);
        $where[] = "status = '$status'";
    }

    // Combine WHERE conditions if any exist
    $whereSQL = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";

    // Final SQL query
    return "
        SELECT
            eoi_num,
            first_name,
            last_name,
            gender,
            dob,
            aus_citizen,
            indigenous,
            work_visa,
            street_addr,
            suburb,
            state,
            postcode,
            phone_number,
            email,
            SC001_skill_1,
            SC001_skill_2,
            SC001_skill_3,
            SC001_skill_4,
            SC001_skill_5,
            SC002_skill_1,
            SC002_skill_2,
            SC002_skill_3,
            SC002_skill_4,
            SC002_skill_5,
            other_skills,
            job_ref_num,
            status
        FROM eoi
        $whereSQL
        ORDER BY $order
    ";
}

// Inputs
// Retrieve current filter and sort values from URL parameters
$sort = $_GET['sort'] ?? 'newest';
$jobref = $_GET['jobref'] ?? '';
$search = $_GET['search'] ?? '';
$status = $_GET['status'] ?? '';

// Build SQL query
$sql = buildEOIQuery($conn, $sort, $jobref, $search, $status);

// Run query and cancel attempt if it fails
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Manage EOIs</title>
    <link rel="stylesheet" href="../styles/main_style_sheet.css">
    <link rel="stylesheet" href="../styles/manage_styles.css">
</head>

<body>

<?php include '../includes/header.inc'; ?>
<?php include '../includes/nav.inc'; ?>

<div class="nav_space"></div>

<main>

<h1>Manage EOIs</h1>

<p>Logged in as:
    <strong><?= htmlspecialchars($_SESSION["username"]) ?></strong>
</p>

<p><a href="logout.php">Logout</a></p>

<!-- EOI Deleiton -->
<div class="delete-bar">

    <!-- Delete EOIs by job reference -->
    <form method="POST"
          onsubmit="return confirm('Delete ALL EOIs for this job reference? This cannot be undone.');">

        <label>Delete by Job Reference:</label>

        <input type="text" name="delete_jobref" minlength="5" maxlength="5" pattern="SC[0-9]{3}">

        <button type="submit" name="delete_submit">Delete</button>

    </form>

</div>

<!-- Filtering and Sorting -->
<form method="GET" class="table-controls">

    <!-- Filtering Selection -->
    <div class="left-controls">

        <label>Job Ref:</label>
        <input type="text" name="jobref" value="<?= htmlspecialchars($jobref) ?>" placeholder="SC001" pattern="SC[0-9]{3}">

        <label>Name:</label>
        <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="First or Last Name">
        
        <label>Status:</label>
        <select name="status">
            <option value="">Any</option>
            <option value="new" <?= ($status ?? '') === 'new' ? 'selected' : '' ?>>New</option>
            <option value="current" <?= ($status ?? '') === 'current' ? 'selected' : '' ?>>Current</option>
            <option value="final" <?= ($status ?? '') === 'final' ? 'selected' : '' ?>>Final</option>
            <option value="rejected" <?= ($status ?? '') === 'rejected' ? 'selected' : '' ?>>Rejected</option>
        </select>
        <button type="submit">Apply</button>

        <a href="manage.php">Reset</a>

    </div>

    <!-- Sorting Selection -->
    <div class="right-controls">

        <label for="sort">Sort:</label>

        <select name="sort" id="sort" onchange="this.form.submit()">

            <option value="newest" <?= ($sort == 'newest') ? 'selected' : '' ?>>Newest</option>
            <option value="oldest" <?= ($sort == 'oldest') ? 'selected' : '' ?>>Oldest</option>
            <option value="first_name" <?= ($sort == 'first_name') ? 'selected' : '' ?>>First Name</option>
            <option value="last_name" <?= ($sort == 'last_name') ? 'selected' : '' ?>>Last Name</option>
            <option value="jobref" <?= ($sort == 'jobref') ? 'selected' : '' ?>>Job Reference</option>

        </select>

    </div>

</form>

<!-- EOI Table Viewport -->
<div class="eoi-viewport">

<table class="eoi-table">

    <thead>
        <tr>
            <th>EOI #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Citizenship</th>
            <th>Contact Information</th>
            <th>Address</th>
            <th>Job Ref</th>
            <th>Skills</th>
            <th>Other Skills</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <!-- Display EOI data -->
            <?php
            //create an array to store the eoi's skills information
            $skills = [];
            
            //for each skill that has been checked (stored as true in the eoi table) 
            //add the relevant string to the array, to display later
            if ($row['SC001_skill_1']) $skills[] = 'Bachelor degree in related field';
            if ($row['SC001_skill_2']) $skills[] = 'Minimum 2 years experience';
            if ($row['SC001_skill_3']) $skills[] = 'Python or R proficiency';
            if ($row['SC001_skill_4']) $skills[] = 'Experience with SQL databases';
            if ($row['SC001_skill_5']) $skills[] = 'Strong written communication skills';

            if ($row['SC002_skill_1']) $skills[] = 'Bachelor degree in Engineering, Energy Systems or equivalent';
            if ($row['SC002_skill_2']) $skills[] = 'Minimum 4 years experience';
            if ($row['SC002_skill_3']) $skills[] = 'Energy monitoring platform knowledge';
            if ($row['SC002_skill_4']) $skills[] = 'Knowledge of Modbus, BACnet or MQTT';
            if ($row['SC002_skill_5']) $skills[] = 'Project and client management experience';
            //Format contact and address information for table display
            $contact =
                htmlspecialchars($row['phone_number']) .
                "<br>" .
                htmlspecialchars($row['email']);

            $address =
                htmlspecialchars($row['street_addr']) .
                "<br>" .
                htmlspecialchars($row['suburb']) .
                ", " .
                htmlspecialchars($row['state']) .
                " " .
                htmlspecialchars($row['postcode']);

            $citizenship = [];

            if ($row['aus_citizen']) {
                $citizenship[] = "Citizen";
            }

            if ($row['indigenous']) {
                $citizenship[] = "Indigenous";
            }
            // Build a readable/correct english citizenship/visa summary for display 
            if (!empty($row['work_visa'])) {
                //create a dictionary that uses the skills checklist inputs as keys for labels to display
                $visaLabels = [
                    "temporary_6_Months" => "Temporary: 6 Months",
                    "temporary_1_Year"   => "Temporary: 1 Year",
                    "table"              => "Temporary: 4 Years",
                    "permanent_visa"    => "Permanent Work Visa"
                ];

                $label = $visaLabels[$row['work_visa']] ?? $row['work_visa'];
                //add into the citizenship array to be imploded later the labels
                //matching the visa status checked by the user
                $citizenship[] = "Visa: " . $label;
            }
            ?>

            <td><?= $row['eoi_num'] ?></td>

            <td><?= htmlspecialchars($row['first_name']) ?></td>

            <td><?= htmlspecialchars($row['last_name']) ?></td>

                <?php
                //Create a dictionary for converting gender codes into display-friendly text

                $genderLabels = [
                    "male" => "Male",
                    "female" => "Female",
                    "other" => "Other",
                    "prefer_not" => "Prefer not to say"];

                $gender = $genderLabels[$row['gender']] ?? $row['gender'];
                ?>

            <td><?= htmlspecialchars($gender) ?></td>

            <td><?= !empty($row['dob']) ? date("d/m/Y", strtotime($row['dob'])): '' ?></td>

            <td><?= htmlspecialchars(implode(', ', $citizenship)) ?></td>

            <td><?= $contact ?></td>

            <td><?= $address ?></td>

            <td><?= htmlspecialchars($row['job_ref_num']) ?></td>

            <td><?= htmlspecialchars(implode(', ', $skills)) ?></td>

            <td><?= nl2br(htmlspecialchars($row['other_skills'])) ?></td>

            <td><?= htmlspecialchars($row['status']) ?></td>

            <td>

                <!-- Form to update status for this EOI -->
                <form method="POST">

                    <input type="hidden" name="eoi_num" value="<?= $row['eoi_num'] ?>">

                    <select name="status" required>
                        <option value="new" <?= $row['status'] == 'new' ? 'selected' : '' ?>>New</option>
                        <option value="current" <?= $row['status'] == 'current' ? 'selected' : '' ?>>Current</option>
                        <option value="final" <?= $row['status'] == 'final' ? 'selected' : '' ?>>Final</option>
                        <option value="rejected" <?= $row['status'] == 'rejected' ? 'selected' : '' ?>>Rejected</option>
                    </select>

                    <button type="submit" name="update_status">Update</button>

                </form>

            </td>

        </tr>

    <?php } ?>

    </tbody>

</table>

</div>

</main>

<?php include '../includes/footer.inc'; ?>

</body>
</html>
