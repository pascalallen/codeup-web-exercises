<?php
require_once 'functions.php';
require_once "../Auth.php";
require_once "../Log.php";
var_dump($_REQUEST);
session_start();
function pageController()
{
	$sessionId = session_id();
	$name = inputHas('name') ? inputGet('name') : "";
	$password = inputHas('password') ? inputGet('password') : "";
	$javascript = '';
	if(Auth::attempt($name, $password)){
        header('Location: authorized.php');
        die();
    }else if ($name != "" || $password != ""){
		$javascript = 'alert("Incorrect input.")';
    }
	return array(
		'name' 	 => $name,
		'password' => $password,
		'sessionId' => $sessionId,
		'javascript' => $javascript
	);
};
extract(pageController());	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
	Session Id: <?= $sessionId; ?><br>
    <form method="POST">
        <label>Name</label>
        <input value ="<?= escape($name) ?>"type="text" name="name"><br>
        <label>Password</label>
        <input value ="<?= escape($password) ?>"type="password" name="password"><br>
        <input type="submit">
        <input type="hidden" name="reset" value="reset">
        <input type="submit" value="Reset Counter">
    </form>
    <script language="javascript">
    	<?= $javascript; ?>
	</script>
</body>
</html>