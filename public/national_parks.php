<?php
	// FIRST RUN MIGRATION AND SEEDER FILE.
	require_once "../parks_logins.php";
	require_once "../db_connect.php";

	$selectAll = 'SELECT * FROM national_parks';
	$stmt = $dbc->query($selectAll);
	$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
	<h2>National Parks</h2>
	<h3>Database Driven Web Application</h3>
	<table>
		<?php foreach ($parks as $park) : ?>
			<tr>
			    <td><?= $park['name'] ?> </td>
			    <td><?= $park['location'] ?> </td>
			</tr>
			<tr>
				<td><?= $park['date_established'] ?> </td>
			    <td><?= $park['area_in_acres'] ?> </td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>