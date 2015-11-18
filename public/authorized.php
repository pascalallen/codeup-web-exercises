<?php
require_once "../Auth.php";
require_once "../Log.php";
session_start();
    if(!Auth::check()) {
        header('Location: login.php');
        die();
    }
    $name = Auth::user();
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