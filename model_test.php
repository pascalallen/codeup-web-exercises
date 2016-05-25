<?php

	require_once "User.php";

	// // New user
	$user = new User();
	$user->email = 'thomaspascalallen@yahoo.com';
	$user->username = 'as';
	$user->phone = '2104457407';
	$user->address = '168 Foxglove Pass';
	$user->city = 'Cibolo';
	$user->state = 'TX';
	$user->zip = '78108';
	$user->save();

	$userFind = User::find($user->id);

	var_dump($userFind);