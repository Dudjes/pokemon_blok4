<?php

if (!isset($_POST['email'])) {
    echo "insert email";
    exit;
}
if (!isset($_POST['password'])) {
    echo "insert password";
    exit;
}
if (empty($_POST['email'])) {
    echo "insert email";
    exit;
}
if (empty($_POST['password'])) {
    echo "insert password";
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

require "database_connection.php";

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);


if (is_array($user)) {
    if ($password == $user['password']) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_firstname'] = $user['firstname'];
        $_SESSION['user_role'] = $user['role'];

        if($user['role'] == 'admin'){
            header('Location: admin-dashboard.php');
            exit;
        }
        if($user['role'] == 'user'){
            header('Location: user-dashboard.php');
            exit;
        }
        exit;
    }
}
header("Location: login.php");
exit;
