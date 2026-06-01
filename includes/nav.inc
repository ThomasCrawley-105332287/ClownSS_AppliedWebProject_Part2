    <body>
        <header>
            <h1 id="nav_heading">Smart City Infrastructure Consultancy</h1>
            <div class="nav_bar">
                <div class="nav_elements">
                    <nav> <!--The logo is generate with AI-->
                        <img src="<?php echo $logoSrc; ?>" title="Company logo" alt="Smart City Logo" loading="eager">
                        <a href="<?php echo $indexLink; ?>">Home</a>
                        <a href="<?php echo $aboutLink; ?>">About Us</a>
                        <a href="<?php echo $jobsLink; ?>">Careers at ClownSS</a>
                        <a href="<?php echo $applyLink; ?>">Apply at ClownSS</a>
<?php if (!empty($_SESSION['username'])): ?>

    <a href="<?php echo $manageLink; ?>">
       Logged in as <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?>
    </a>

    <a href="<?php echo $logoutLink; ?>">Logout</a>

<?php else: ?>

    <a href="<?php echo $loginLink; ?>">Login</a>

<?php endif; ?>
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