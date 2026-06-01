<!-- variables for the meta tags, so each page is unique and uses the 1 header.inc file -->
<?php
  $pageTitle = "About Page";
  $metaDescription = "About page for website, providing general information regarding the group, and member contributions.";
  $metaKeywords = "Smart City, ClownSS, Web Development, HTML, Hover effects, styled table, bordered figure";
  $metaAuthor = "Jack Goodsell";
  $mainCSS = "../styles/main_style_sheet.css";
  $extraCSS = "../styles/about_styles.css";
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
$selfLink = "about.php";
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
$sql = "SELECT * FROM about"; 
$result = mysqli_query($conn, $sql);
?>  
<!-- Makes an array of everything in the about database -->
<?php
$members = [];
while ($row = mysqli_fetch_assoc($result)) {
    $members[] = $row;
}
?>

<?php include '../includes/header.inc'; ?>
<?php include '../includes/nav.inc'; ?>



    <!-- Creates a space for the nav bar to sit in when the viewport is at the top of the page-->
    <div class="nav_space"></div>

    <main>
        <p></p>

        <!-- Group Information -->
        <section>
            <h2>Group Information</h2>
            <ul>
                <li><strong>Group Name: </strong>
                    <ul>
                        <li>ClownSS</li>
                    </ul>
                </li>
                <li><strong>Class Day: </strong>
                    <ul>
                        <li>Friday</li>
                    </ul>
                </li>
                <li><strong>Class Time: </strong>
                    <ul>
                        <li>14:30 - 16:30</li>
                    </ul>
                </li>
            </ul>
        </section>

        <!-- Member Contributions and Quotes -->
        <section>
            <h2>Members &amp; Contributions</h2>
            <dl>
                <!-- uses a foreach loop that will print the data till all data is printed -->
                <?php foreach ($members as $row): ?>
                <dt><?php echo htmlspecialchars($row['name']); ?>
                <span class="student-id"><?php echo htmlspecialchars($row['student_id']); ?></span></dt>
                <dd><strong>Contribution:</strong> <?php echo htmlspecialchars($row['contribution1']); ?></dd>
                <dd><strong>Contribution 2:</strong> <?php echo htmlspecialchars($row['contribution2']); ?></dd>
                <dd><strong>Quote:</strong> <?php echo htmlspecialchars($row['quote']); ?></dd>
                <dd><strong>Translation:</strong> <?php echo htmlspecialchars($row['translation']); ?></dd>
                <?php endforeach; ?>
            </dl>
        </section>

        <!-- Group Photo — separate section for independent styling -->
        <section class="group-photo-section">
            <h2>Group Photo</h2>
            <figure class="group-photo-figure">
                <img src="../images/group_image.jpg" alt="From left to right: Thomas Crawley, Callum Rochfort, Jack Goodsell, Alex Hall" title="Group photo of all team members">
                <figcaption>ClownSS — Friday 17th April 2026</figcaption>
            </figure>
        </section>

        <!-- Fun Facts Table -->
        <section>
            <h2>Fun Facts</h2>
            <table>
                <caption>Fun Facts About Our Team</caption>
                <thead>
                    <tr>
                        <th>Member Name</th>
                        <th>Dream Job</th>
                        <th>Coding Snack</th>
                        <th>Hometown</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($member['name']); ?></td>
                        <td><?php echo htmlspecialchars($member['dream_job']); ?></td>
                        <td><?php echo htmlspecialchars($member['coding_snack']); ?></td>
                        <td><?php echo htmlspecialchars($member['hometown']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>


    </main>
    <?php include '../includes/footer.inc'; ?>
