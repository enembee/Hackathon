<?php

include 'classes/MySQLUserProvider.php';
include 'classes/UserObject.php';

$userDataObj = new MySQLUserProvider();

$user = new UserObject($userDataObj);

if ($user->authenticate($_POST['username'], $_POST['password'])) {
	echo 'user authenticated...';
	$user->email = 'something@email.com';
	$user->save();
	echo 'email address changed...';
}