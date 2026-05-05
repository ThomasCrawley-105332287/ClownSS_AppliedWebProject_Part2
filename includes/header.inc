<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" >
        <!-- Gets the team members input from each page for the meta tags -->
        <meta name="description" content="<?php echo $metaDescription; ?>">
        <meta name="keywords"    content="<?php echo $metaKeywords; ?>">
        <meta name="author"      content="<?php echo $metaAuthor; ?>">
        <link href="<?php echo $mainCSS; ?>" rel="stylesheet">
        <?php if (isset($extraCSS)): ?>
        <link href="<?php echo $extraCSS; ?>" rel="stylesheet">
        <?php endif; ?>
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        <header>
            <h1 id="nav_heading">Smart City Infrastructure Consultancy</h1>
            <div class="nav_bar">
                <div class="nav_elements">
                    <nav> <!--The logo is generate with AI-->
                        <img src="../images/ClownSS_Logo_Simple.png" title="Company logo" alt="Smart City Logo" loading="eager">
                        <a href="../index.html">Home</a>
                        <a href="about.html">About Us</a>
                        <a id="jobs_link" href="jobs.html">Careers at ClownSS</a>
                        <a href="apply.html">Apply at ClownSS</a>
                    </nav>
                </div>
                <div>
                    <search id="search_bar_container">
                    <label id="search_bar_label" for="search_bar">Search Bar</label>
                    <input type="text" placeholder="Search.." id="search_bar">
                    <button type="submit">Search</button>
                    </search>
                </div>
            </div>
            <hr id="nav_line">
        </header>