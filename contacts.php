<?php
require_once "User.php";

$contact = new User();
$contact->email = 'thomaspascalallen@yahoo.com';
$contact->name = 'Pascal Allen';
$contact->phone = '210-445-7507';
$contact->address = '168 Foxglove Pass';
$contact->city = 'Cibolo';
$contact->state = 'TX';
$contact->zip = '78108';
$contact->save();


// $user = User::find(1);

// $users = User::all();
// foreach($users as $user) {
// 	echo $user->name;
// }

// $user = User::find(25);
// $user->name = 'Pascal';
// $user->save();

// $test = $contact->;
// var_dump($test);