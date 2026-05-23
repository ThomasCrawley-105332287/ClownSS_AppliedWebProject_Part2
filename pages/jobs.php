<!-- variables for the meta tags, so each page is unique and uses the 1 header.inc file -->
<?php
  $pageTitle = "Available Jobs";
  $metaDescription = "available jobs page";
  $metaKeywords = "Smart City, ClownSS, Web Development, Jobs";
  $metaAuthor = "Alex Hall";
  $mainCSS = "../styles/main_style_sheet.css";
  $extraCSS = "../styles/jobs-styles.css";
?>

<!-- variables for nav.inc -->
<?php 
$logoSrc = "../images/clownSS_logo_simple.png";
$indexLink = "../index.php";
$aboutLink = "about.php";
$jobsLink = "jobs.php";
$applyLink = "apply.php";
?>

<!-- footer.inc variables -->
<?php 
$selfLink = "jobs.php";
?>

<?php

require_once("../includes/settings.php");

$conn = mysqli_connect(
    $host,
    $username,
    $password,
    $database
);

if (!$conn) {

    die(
        "Connection failed: "
        . mysqli_connect_error()
    );
}
?>

<?php

$sql_query =
    "SELECT * FROM jobs";

if (
    isset($_GET["search"]) &&
    $_GET["search"] != ""
) {

    $search =
        mysqli_real_escape_string(
            $conn,
            $_GET["search"]
        );

    $sql_query .=
        " WHERE
            job_title LIKE '%$search%'
            OR
            reference_number LIKE '%$search%'";
}

$result =
    mysqli_query(
        $conn,
        $sql_query
    );
?>


<?php include '../includes/header.inc'; ?>
<?php include '../includes/nav.inc'; ?>

<!-- Creates a space for the nav bar to sit in when the viewport is at the top of the page-->
        <div class="nav_space"></div>

        <main>
            <!-- job page intro -->
            <aside>
                <h2>Start your career at Smart City Infrastructure Consultancy</h2>
                <p>At Smart City Infrastructure Consultancy, we work at the intersection of technology and urban life — helping councils and industry partners build smarter, 
                    more connected cities. From digital transport networks to energy monitoring platforms, our work shapes the infrastructure millions of people rely on every day, 
                    and we're always looking for curious, driven people to help us do it. Whether you're an experienced consultant or just starting out, 
                    you'll find a collaborative environment where your ideas matter and your work makes a real difference — 
                    explore our current openings below and take the first step toward a career that moves cities forward.</p>
            </aside>

            <h1>Available Jobs</h1>

<form method="get" action="jobs.php">

    <p>

        <label for="search">
            Search Jobs
        </label>

        <input
            type="text"
            name="search"
            id="search"
            placeholder="Search by title or reference"  
            value="<?php echo htmlspecialchars($search); ?>"
        >

        <input
            type="submit"
            value="Search"
        >

    </p>

</form>
            <!-- The job and its information -->

            <br>


            <!--Second job and its info-->
    
        </main>
        <?php include '../includes/footer.inc'; ?>