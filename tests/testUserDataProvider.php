<?php

class testUserDataProvider extends PHPUnit_Framework_Testcase
{
	
	private $mock;

	protected function setup()
	{
		$this->mock = $this->getMock('IUserDataProvider');
	}

	public function testFindByUsername()
	{

	}
}