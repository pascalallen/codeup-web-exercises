<?php
session_start();
function endSession()
{
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}
endSession();
header('Location: login.php');
die();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
</body>
</html>