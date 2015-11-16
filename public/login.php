<?php
var_dump($_POST);
function pageController()
{
	$name = isset($_POST['name']) ? strip_tags(htmlspecialchars($_POST['name'])) : "";
	$password = isset($_POST['password']) ? strip_tags(htmlspecialchars($_POST['password'])) : "";

	echo $name . " " . $password;

	if($name == "guest" && $password == "password"){
        header('Location:authorized.php');
        die();
    };
	return array(
		'name' 	 => $name,
		'password' => $password
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
    <form method="POST">
        <label>Name</label>
        <input value ="<?= $name ?>"type="text" name="name"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>