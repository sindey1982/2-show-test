<?php
require_once dirname(__FILE__).'/../global.php';
require_once 'lib/se/SEUser.class.php';
require_once 'PHPUnit\Framework\TestCase.php';

class SeUserTest extends PHPUnit_Framework_TestCase{
	private $se ;
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated PageTest::setUp()
		$this->se = new SEUser();
	
	}
	/*public function testCheckSeEmailExisted(){
		$result=json_decode($this->se->mailExists("corpofwine@gmail.com"));
		$this->assertTrue($result->result);	
	}*/
	/*public function testCheckSeGetClientToken(){
		$result=json_decode($this->se->getClientToken("sind1982@gmail.com", "001101ys"));
		$this->assertNotEquals("", $result->token);	
	}*/
	/*public function testGetUserInfo(){
		$result=json_decode($this->se->getUserInfo("wuyuanchina@gmail.com"));
		$this->assertNotNull($result);
		$this->assertEquals("11", $result->photowall_count);
		$this->assertEquals("Test", $result->profile_name);		
	}
*/
	/*public function testCheckSeGetClientToken(){
		$result=$this->se->getClientToken("test@gmail.com", "123123");
	    $result2=json_decode($result);
		$this->assertNotEquals("", $result2->token);	
	}*/
	
	public function testSaveNickName(){
		$resut = $this->se->saveNickName("","test@gmail.com", "1231223");
		$result2=json_decode($result);
		$this->assertEquals("true", $result2->result);	
	}
	/*public function testProfileExists(){
		$result=json_decode($this->se->profileExists("test"));
		$this->assertEquals(true, $result->result);	
	}*/
	/*public function testChangePassword(){
		$result=json_decode($this->se->changePassword("", "sindey", "00233", "11222"));
		$this->assertEquals(true, $result->result);	
	}*/
	/*public function testSaveComment(){
		$result=json_decode($this->se->saveComment("sindey1982", "sindey1982@gmail.com", "test"));
		$this->assertEquals(true, $result->result);	
	}*/
  /* public function testRegistry(){
		$result=json_decode($this->se->register("sindey333", "sindey333@gmail.com", "001101ys"));
		$this->assertEquals("false", $result->result);	
	}*/
}
