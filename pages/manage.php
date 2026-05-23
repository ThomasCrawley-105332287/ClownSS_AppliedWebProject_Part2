<?php
session_start();

/*
    protect page
*/
if (!isset($_SESSION["username"])) {

    header("Location: login.php");

    exit();
}

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Manage EOIs</title>

    <link rel="stylesheet" href="../styles/main_style_sheet.css">
</head>

<body>

<?php include '../includes/header.inc'; ?>
<?php include '../includes/nav.inc'; ?>

<div class="nav_space"></div>

<main>

    <h1>Manage EOIs</h1>

    <p>Logged in as:
        <strong>
        <?php
            echo htmlspecialchars($_SESSION["username"]);
        ?>
        </strong>
    </p>

    <p>
        <a href="logout.php">
        Logout
        </a>
    </p>

</main>

<?php include '../includes/footer.inc'; ?>

</body>
</html>