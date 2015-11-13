<?php
function pageController()
{
	$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
	$up = $counter+1;
	$down = $counter-1;

	return array(
		'counter' => $counter,
		'up'	  => $up,
		'down'	  => $down
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
	<title>Counter</title>
	<!-- BOOTSTRAP -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<!-- <link rel="stylesheet" type="text/css" href="css/counter.css"> -->
</head>
<body>
	<h2><?= $counter ?></h2>
	<a href="counter.php?counter=<?= $up ?>">up</a>
	<br>
	<a href="counter.php?counter=<?= $down ?>">down</a>
	<!-- JQUERY -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- CUSTOM JS -->
	<!-- <script src="js/counter.js"></script> -->
</body>
</html>