<?php
session_start();

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