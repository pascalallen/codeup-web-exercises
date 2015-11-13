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
	<title>Counter</title>
</head>
<body>
	<h2><?= $counter ?></h2>
	<a href="counter.php?counter=<?= $up ?>">up</a>
	<br>
	<a href="counter.php?counter=<?= $down ?>">down</a>
</body>
</html>