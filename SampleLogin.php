<?php

require "testlogin.php";
class SampleLogin extends PHPUnit_Framework_TestCase
{
	public function testlogin()
	{
		$fungsilogin = new testlogin();
		$result = $fungsilogin->login();
		$this->assertEquals("berhasil",$result);
	}
}
?>