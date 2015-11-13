<?php
function pageController()
{
	$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
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
	<title>Ping</title>
</head>
<body>
	<h2><?= $counter ?></h2>
	<a href="pong.php?counter=<?= $hit ?>">HIT</a>
	<br>
	<a href="pong.php?counter=<?= $miss ?>">MISS</a>
</body>
</html>