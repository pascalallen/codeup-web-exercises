<?php
$favoriteThings = ['guitar', 'black metal', 'football', 'craft beer', 'traveling'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Favorite Things</title>
	<!-- BOOTSTRAP -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="css/my-favorite-things.css">
</head>
<body>
	<div class="site-wrapper-inner">
		<table class="table table-striped">
			<th class="table">Favorite Things</th>
			<?php foreach($favoriteThings as $thing): ?>
			<tr>
				<td><?= $thing; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>