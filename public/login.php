<?php
session_start();
function pageController()
{
	$sessionId = session_id();
	$name = isset($_POST['name']) ? strip_tags(htmlspecialchars($_POST['name'])) : "";
	$password = isset($_POST['password']) ? strip_tags(htmlspecialchars($_POST['password'])) : "";
	$javascript = '';
	if($name == "guest" && $password == "password"){
        $_SESSION['LOGGED_IN_USER'] = $name;
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
        <input value ="<?= $name ?>"type="text" name="name"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <input type="submit">
        <input type="hidden" name="reset" value="reset">
        <input type="submit" value="Reset Counter">
    </form>
    <script language="javascript">
    	<?= $javascript; ?>
	</script>
</body>
</html>