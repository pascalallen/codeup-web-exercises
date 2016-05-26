<?php

	function pageController(){

		require_once "../Bootstrap.php";


		return array(
			'kitchenTemp' => $temp->getRandTemp(),
			'basementTemp' => $temp->getRandTemp(),
			'frontDoor' => $door->getRandOpenClose(),
			'backDoor' => $door->getRandOpenClose(),
			'basement' => $glass->getRandGlassBreak(),
			'mainFloor' => $glass->getRandGlassBreak(),
			'upstairs' => $glass->getRandGlassBreak(),
			'bedroom1' => $smoke->getRandSmoke(),
			'bedroom2' => $smoke->getRandSmoke(),
			'hallway' => $smoke->getRandSmoke()
		);
	}
	extract(pageController());
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Security System</title>
</head>
<body>
	<h1>Sensor State</h1>
	<table>
		<thead>
	      	<tr>
	        	<th>Name</th>
	        	<th>Type</th>
	        	<th>State</th>
	        	<th>Alarm</th>
	      	</tr>
    	</thead>
    	<tbody>
			<tr>
		        <td>Kitchen Temperature</td>
		        <td>Fire</td>
		        <td><?= $kitchenTemp; ?></td>
		        <td></td>
  			</tr>
  			<tr>
		        <td>Basement Temperature</td>
		        <td>Freeze</td>
		        <td><?= $basementTemp; ?></td>
		        <td></td>
  			</tr>
  			<tr>
		        <td>Front Door</td>
		        <td>Door</td>
		        <td><?= $yo = $frontDoor; ?></td>
		        <?php if($yo == "Open") : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
  			<tr>
		        <td>Back Door</td>
		        <td>Door</td>
		        <td><?= $dude = $backDoor; ?></td>
		        <?php if($dude == "Open") : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
  			<tr>
		        <td>Basement</td>
		        <td>GlassBreak</td>
		        <td><?= $hi = $basement; ?></td>
		        <?php if($hi > 900) : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
  			<tr>
		        <td>Main Floor</td>
		        <td>GlassBreak</td>
		        <td><?= $hello = $mainFloor; ?></td>
		        <?php if($hello > 900) : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
  			<tr>
		        <td>Upstairs</td>
		        <td>GlassBreak</td>
		        <td><?= $glass = $upstairs; ?></td>
		        <?php if($glass > 900) : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
  			<tr>
		        <td>Bedroom 1</td>
		        <td>Smoke</td>
		        <td><?= $smoke1 = $bedroom1; ?></td>
		        <?php if($smoke1 < 60) : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
			<tr>
		        <td>Bedroom 2</td>
		        <td>Smoke</td>
		        <td><?= $smoke2 = $bedroom2; ?></td>
		        <?php if($smoke2 < 60) : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
  			<tr>
		        <td>Hallway</td>
		        <td>Smoke</td>
		        <td><?= $smoke3 = $hallway; ?></td>
		        <?php if($smoke3 < 60) : ?>
		        	<td>ALARM</td>
		        <?php endif; ?>
  			</tr>
		</tbody>
	</table>

</body>
</html>