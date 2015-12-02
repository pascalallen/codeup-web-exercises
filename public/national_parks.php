<?php
	// FIRST RUN MIGRATION AND SEEDER FILE.
	require_once "../parks_logins.php";
	require_once "../db_connect.php";
	require_once "../Input.php";

	$page = Input::has('page') ? Input::get('page') : 1;
	$offset = ($page - 1) * 2;
	$selectAll = 'SELECT * FROM national_parks LIMIT 2 OFFSET ' . $offset;
	$stmt = $dbc->query($selectAll);
	$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$numPages = 5;
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>National Parks</title>
	<!-- BOOTSTRAP -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="css/national_parks.css">
	<!-- TITLE IMG -->
	<!-- <link rel="shortcut icon" href="img/mole.png"> -->
</head>
<body>
	<div class="container">
		<h1><?= $page; ?></h1>
		<h2>National Parks</h2>
		<h3>Database Driven Web Application</h3>
		<table class="table">
			<thead>
				<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Established</th>
				<th>Acres</th>
				</tr>
		    </thead>
			<?php foreach ($parks as $park) : ?>
				<tbody>
					<tr class="success">
					    <td><?= $park['name'] ?> </td>
					    <td><?= $park['location'] ?> </td>
					    <td><?= $park['date_established'] ?> </td>
					    <td><?= $park['area_in_acres'] ?> </td>
					</tr>
				</tbody>
			<?php endforeach; ?>
		</table>
		<? if ($page == 0) : ? ?>
			<a href="?page=<?= ($page - 1) ?>">Previous</a>
		<? endif; ?>
		<? if ($page < $numPages) : ?>
			<a href="?page=<?= ($page + 1) ?>">Next</a>
		<? endif; ?>
	</div>
</body>
</html>




