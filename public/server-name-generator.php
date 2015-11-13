<?php
function pageController()
{
	$nouns = [
		'Person', 
		'Seahorse', 
		'Monument', 
		'Devil', 
		'Jesus', 
		'Booty Call', 
		'Skeleton', 
		'Stinkbug', 
		'Face', 
		'Doll'
	];
	$adjectives = [
		'Beautiful', 
		'Hideous', 
		'Prejudice', 
		'Worrysome', 
		'Charming', 
		'Stinky', 
		'Sad', 
		'Busy', 
		'Vibrant', 
		'Awesome', 
		'Psychoneuroendocrinological'
	];
	$ranAdj = array_rand($adjectives);
	$ranNou = array_rand($nouns);
	$serverName = $adjectives[$ranAdj] . '-' . $nouns[$ranNou];
	return array(
		'serverName' => $serverName
	);
};
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Server Name Generator</title>
	<!-- BOOTSTRAP -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="css/server-name-generator.css">
</head>
<body>
	<h1> <?= $serverName; ?> </h1>
</body>
</html>