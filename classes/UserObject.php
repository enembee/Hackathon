<?php

class UserObject
{
	protected $dataSource;
	protected $_userdata;

	public function __construct(IUserDataProvider $datasource)
	{
		$this->dataSource = $datasource;
		$this->_userdata = array();
	}

	public function authenticate($username, $password)
	{
		if($this->dataSource->authenticate($username, $password)){
			$this->loadUserData();
			return true;
		}
		return false;
	}

	public function loadUserData()
	{
		$userData = $this->dataSource->loadUserData();
		foreach($userData as $key=>$value){
			$this->$key = $value;
		}
	}

	public function create()
	{

	}

	public function save()
	{
		return $this->dataSource->saveUserData($this->_userdata);
	}

	public function resetPassword()
	{

	}

	public function setPassword($newPassword)
	{

	}

	private function encryptPassword($password)
	{

	}

	public function __set($var, $value)
	{
		return $this->_userdata[$var] = $value;
	}

	public function __get($var)
	{
		if(isset($this->_userdata[$var])){
			return $this->_userdata[$var];
		}
		return false;
	}
}