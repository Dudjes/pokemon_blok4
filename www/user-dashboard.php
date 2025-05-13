<?php
//check login
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Welkom <?php echo $_SESSION['user_firstname']; ?></h1>
    <p>Je bent ingelogd als  <?php echo $_SESSION['user_email']; ?></p>
    <a href="logout.php" class="uitloggen">Uitloggen</a>
</body>

</html>