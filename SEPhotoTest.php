<?php
require_once dirname(__FILE__).'/../global.php';
require_once 'lib/se/SEPhoto.class.php';
require_once 'PHPUnit\Framework\TestCase.php';

class SePhotoTest extends PHPUnit_Framework_TestCase{
	private $se ;
	protected function setUp() {
		parent::setUp ();
		// TODO Auto-generated PageTest::setUp()
		$this->se = new SEPhoto();
	}
 /*	public function testUploadPhoto(){
		$result=json_decode($this->se->uploadPhoto("","corpofwine@gmail.com"));
		$this->assertTrue($result->result);	
	}*/
	
	public function testGetPhotos_UserPhotowall(){
		$result=json_decode($this->se->getPhotos_UserPhotowall("", "test@gmail.com", "2show_1377595874158"));
		$this->assertGreaterThan(0,count($result));	
		//$this->assertEquals("040e1d7b-dfe3-dcfd-9136-f25280ea83a6", $result[0]->photo_id);
	}

	/*public function testGetPhotos(){
		$result=json_decode($this->se->getPhotos("", "test@gmail.com", "34"));
		$this->assertGreaterThan(0,count($result));	
		//$this->assertEquals("040e1d7b-dfe3-dcfd-9136-f25280ea83a6", $result[0]->photo_id);
	}*/
	/*public function testGetPhotoById(){
		$result=$this->se->getPhotoById("00494fd1-d5aa-9e72-e197-a4c08b96542a");
		$this->assertNotNull($result);	
	}*/
	
}
