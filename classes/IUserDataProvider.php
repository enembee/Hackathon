<?php

Interface IUserDataProvider
{
	function findByUserName($username);

	function authenticate($username, $password);

	function loadUserData();

	function saveUserData($userdata);
}