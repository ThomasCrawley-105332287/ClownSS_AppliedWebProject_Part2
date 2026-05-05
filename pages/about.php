<!-- variables for the meta tags, so each page is unique and uses the 1 header.inc file -->
<?php
  $pageTitle = "About Page";
  $metaDescription = "About page for website, providing general information regarding the group, and member contributions.";
  $metaKeywords = "Smart City, ClownSS, Web Development, HTML, Hover effects, styled table, bordered figure";
  $metaAuthor = "Jack Goodsell";
  $mainCSS = "../styles/main_style_sheet.css";
  $extraCSS = "../styles/about-styles.css";
?>

<!-- variables for nav.inc -->
<?php 
$logoSrc = "../images/ClownSS_Logo_Simple.png";
$indexLink = "../index.php";
$aboutLink = "about.php";
$jobsLink = "jobs.php";
$applyLink = "apply.php";
?>

<!-- footer.inc variables -->
<?php 
$selfLink = "about.php";
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
                <dt>Thomas Crawley <span class="student-id">105332287</span></dt>
                <dd><strong>Contribution:</strong> Index page, jira management, GitHub management</dd>
                <dd><strong>Quote:</strong> "vivimusque moriemurque item fratres"</dd>
                <dd><strong>Translation:</strong> "we live and die as brothers"</dd>

                <dt>Callum Rochfort <span class="student-id">106463515</span></dt>
                <dd><strong>Contribution:</strong> Apply page, apply style sheet, main_style_sheet.css</dd>
                <dd><strong>Quote:</strong>این نیز بگذرد</dd>
                <dd><strong>Translation:</strong>This too shall pass</dd>

                <dt>Jack Goodsell <span class="student-id">106016142</span></dt>
                <dd><strong>Contribution:</strong> about.html, about-styles.css, main_style_sheet.css</dd>
                <dd><strong>Quote:</strong> "A szeretleken nagyjából azt értem, hogy hiányzol akkor is, ha itt vagy.”</dd>
                <dd><strong>Translation:</strong> "What I mean by love you, is that I miss you even if you’re here"</dd>

                <dt>Alex Hall <span class="student-id">105419083</span></dt>
                <dd><strong>Contribution:</strong> jobs.html, jobs-styles.css, main_style_sheet.css</dd>
                <dd><strong>Quote:</strong> "Pǎo zài chē qián de rén huì lèi, pǎo zài chē hòu de rén huì jīnpílìjìn."</dd>
                <dd><strong>Translation:</strong> "Man who runs in front of car gets tired. Man who runs behind car gets exhausted."</dd>
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
                    <tr>
                        <td>Thomas Crawley</td>
                        <td>Lead engineer for asteroid mining company</td>
                        <td>Pizza flavoured shapes</td>
                        <td>Park Orchards</td>
                    </tr>
                    <tr>
                        <td>Callum Rochfort</td>
                        <td>Machine Ethicist</td>
                        <td>Coffee</td>
                        <td>Resevoir</td>
                    </tr>
                    <tr>
                        <td>Jack Goodsell</td>
                        <td>Audio Engineer</td>
                        <td>Bounty</td>
                        <td>Woodend</td>
                    </tr>
                    <tr>
                        <td>Alex Hall</td>
                        <td>IT Job</td>
                        <td>Coffee</td>
                        <td>Pakenham</td>
                    </tr>
                </tbody>
            </table>
        </section>


    </main>
    <?php include '../includes/footer.inc'; ?>
