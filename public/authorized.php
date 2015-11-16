<?php
session_start();
    if(!isset($_SESSION['LOGGED_IN_USER'])) {
        header('Location: login.php');
        die();
    }
    $name = $_SESSION['LOGGED_IN_USER'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
    <h1>Authorized</h1>
    <h2>Your logged in username is: <?= $name ?></h2>
    <a href="logout.php">LOGOUT</a>
</body>
</html>