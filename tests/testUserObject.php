<?php

require_once("../classes/UserObject.php");

class testUserObject extends PHPUnit_Framework_Testcase
{
	protected $dataProviderMock;

	protected function setup()
	{
		$this->dataProviderMock = $this->getMock("IUserDataProvider", array('authenticate'));
	}

	public function testAuthenticate()
	{
		$this->dataProviderMock->expects($this->once())
			 ->method('authenticate')
			 ->with($this->equalTo('username'), $this->equalTo('password'))
			 ->will($this->returnValue(true));

		$testUserObject = new UserObject($this->dataProviderMock);
		$this->assertTrue($testUserObject->authenticate('username', 'password'), "Authentication did not return true.");
	}

}