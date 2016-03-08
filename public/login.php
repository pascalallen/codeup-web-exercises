<?php
require_once 'functions.php';
require_once "../Auth.php";
require_once "../Log.php";
var_dump($_REQUEST);
function pageController()
{
    session_start();
	$sessionId = session_id();
	$name = inputHas('name') ? inputGet('name') : "";
	$password = inputHas('password') ? inputGet('password') : "";
	$javascript = '';
    $viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;
    $viewCount++; 
    $_SESSION['view_count'] = $viewCount;

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
		'javascript' => $javascript,
        'viewCount' => $viewCount
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
    View Count: <?= $viewCount; ?>
    <form method="POST">
        <label>Name</label>
        <input value ="<?= escape($name) ?>"type="text" name="name"><br>
        <label>Password</label>
        <input value ="<?= escape($password) ?>"type="password" name="password"><br>
        <input type="submit">
        <input type="hidden" name="reset" value="reset">
    </form>
    <script language="javascript">
    	<?= $javascript; ?>
	</script>
</body>
</html>