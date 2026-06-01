<?php
    $pageTitle = "Manager Login";
    $metaDescription = "Manager login page for accessing the site management dashboard.";
    $metaKeywords = "manager login, ClownSS, admin, dashboard";
    $metaAuthor = "Jack Goodsell";
    $mainCSS = "../styles/main_style_sheet.css";
?>

<?php 
    $logoSrc = "../images/clownSS_logo_simple.png";
    $indexLink = "../index.php";
    $aboutLink = "about.php";
    $jobsLink = "jobs.php";
    $applyLink = "apply.php";
    $loginLink = "login.php";
    $manageLink = "manage.php";
    $logoutLink = "logout.php";
?>

<!-- footer.inc variables -->
<?php 
$selfLink = "login.php";
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once("../includes/settings.php");

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error_message = "";

/*
    sanitise input
*/
function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login_username =
        sanitise_input($_POST["username"]);

    $login_password =
        sanitise_input($_POST["password"]);

    /*
        empty validation
    */
    if (
        empty($login_username) ||
        empty($login_password)
    ) {

        $error_message =
            "Please enter username and password.";

    } else {

        /*
            prepared statement
        */
        $stmt = $conn->prepare(
            "SELECT * FROM users WHERE username = ?"
        );

        $stmt->bind_param(
            "s",
            $login_username
        );

        $stmt->execute();

        $result = $stmt->get_result();

        /*
            check if user exists
        */
        if ($result->num_rows > 0) {

            $user = mysqli_fetch_assoc($result);

            /*
                verify password hash
            */
            if (
                password_verify(
                    $login_password,
                    $user["password"]
                )
            ) {

                /*
                    security
                */
                session_regenerate_id(true);

                $_SESSION["username"] =
                    $user["username"];

                header("Location: manage.php");

                exit();

            } else {

                $error_message =
                    "Incorrect username or password.";
            }

        } else {

            $error_message =
                "Incorrect username or password.";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Manager Login</title>

    <link rel="stylesheet" href="../styles/main_style_sheet.css">
</head>

<body>

<?php include '../includes/header.inc'; ?>
<?php include '../includes/nav.inc'; ?>

<div class="nav_space"></div>

<main>

    <h1>Manager Login</h1>

   <?php

    if ($error_message != "") {
        echo "<p><strong>$error_message</strong></p>";
    }
    
    ?>


    <form method="post" action="login.php">

    <p>
        <label for="username">Username</label>

        <input
            type="text"
            name="username"
            id="username"
        >
    </p>

    <p>
        <label for="password">Password</label>

        <input
            type="password"
            name="password"
            id="password"
        >
    </p>

    <p>
        <input type="submit" value="Login">
    </p>

</form>

</main>

<?php include '../includes/footer.inc'; ?>

</body>
</html>