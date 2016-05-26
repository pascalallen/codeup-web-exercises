<?php

	require_once "../TempSensor.php";
	require_once "../DoorSensor.php";
	require_once "../GlassSensor.php";
	require_once "../SmokeSensor.php";

	$temp = new TempSensor();
	$door = new DoorSensor();
	$glass = new GlassSensor();
	$smoke = new SmokeSensor();