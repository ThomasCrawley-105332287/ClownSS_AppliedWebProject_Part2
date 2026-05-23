<?php
session_start();

/*
    protect page
*/
if (!isset($_SESSION["username"])) {

    header("Location: login.php");

    exit();
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

</main>

<?php include '../includes/footer.inc'; ?>

</body>
</html>