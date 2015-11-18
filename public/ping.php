<?php
require_once 'functions.php';
require_once "../Input.php";
function pageController()
{
	$counter = Input::has('counter') ? Input::get('counter') : 0;
	$hit = $counter+1;
	$miss = 'You lose!';

	return array(
		'counter' => $counter,
		'hit'	  => $hit,
		'miss'	  => $miss
	);

}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ping</title>
	<!-- BOOTSTRAP -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="css/pingphp.css">
	<!-- TITLE IMG -->
	<!-- <link rel="shortcut icon" href="img/mole.png"> -->
</head>
<body>
	<button type="button" class="btn btn-sm btn-primary" id="start">Start</button>
	<h2><?= $counter ?></h2>
	<a href="pong.php?counter=<?= $hit ?>"><div class="ball"></div></a>
	<br>
	<a href="pong.php?counter=<?= $miss ?>">MISS</a>
	<!-- JQUERY -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- CUSTOM JS -->
	<script src="js/pingphp.js"></script>
</body>
</html>