<?php
require_once dirname(__FILE__).'/../global.php';
require_once 'lib/se/SEWall.class.php';
require_once 'lib/se/SEPage.class.php';
require_once 'PHPUnit\Framework\TestCase.php';

/**
 * test case.
 */
class SEWallTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	private $wall ;
	protected function setUp() {
		parent::setUp ();
	    $this->wall = new SEWall();
		// TODO Auto-generated SEPageTest::setUp()
	

	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated SEPageTest::tearDown()
		

		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	/*public function testCreatePhotoWall(){
		$wallid = "这个测试来源于unit测试3";
		date_default_timezone_set('Asia/Shanghai');
		$resutl=json_decode($this->wall->createPhotoWall("",$wallid,'te3322233',"test@gmail.com","descriptiontest"));
		$this->assertNotEquals("", $resutl->createPhotoWall);
		$this->assertEquals($wallid, $resutl->createPhotoWall);
	}*/
  /* public function testSavePhotoWall(){
		date_default_timezone_set('Asia/Shanghai');
		$resutl=json_decode($this->wall->savePhotoWall("","2show_1375411163261",'彻3底',"tes33","e5333t"));
		$this->assertNotEquals("", $resutl->photowall_id);
	}*/
	/*public function testGetPhotoWalls_User(){
		date_default_timezone_set('Asia/Shanghai');
		$resutl=json_decode($this->wall->getPhotoWalls_User("","test@gmail.com"));
		$this->assertGreaterThan(0, count($resutl->photoWalls));

		
	}*/
	/*public function testGetWall(){
		$resutl=json_decode($this->wall->getPhotoWall("","2show_1375860778825",'corpofwine@gmail.com'));
		$this->assertEquals("2show_1375860778825", $resutl->photowall_id);		
	}*/
	/*public function testSharePhotoWall(){
		$resutl=json_decode($this->wall->sharePhotoWall("","2show_1375412768963","3","123456"));
		$this->assertTrue($resutl->result);		
	}*/
	/*public function testRemoveWall(){
		$resutl=json_decode($this->wall->removePhotoWall("","2show_1373620885887"));
		$this->assertEquals("2show_1373880135956", $resutl->photowall_id);		
	}*/
	/*public function testGetWallThumb(){
		$url =$this->wall->getWallThumb("2show_1377095427059");
		$this->assertNotNull($url);
	}*/
	/*public function testGetPhotoWall_Random(){
		$result =json_decode($this->wall->getPhotoWall_Random(""));
		$this->assertNotNull($result->photowall_id);
	}*/
    /*public function testDiscoverPhotoWall(){
		$result =json_decode($this->wall->discoverPhotoWall("",1,5,"create_date","DESC",null));
		$this->assertNotEquals(0, count($result->photowalls));
	}*/
		/*public function testGetPhotoWall_Anonymous(){
		$resutl=json_decode($this->wall->getPhotoWall_Anonymous("2show_1377095427059"));
		$this->assertEquals("2show_1377095427059", $resutl->photowall_id);	
	}*/
	/*public function testGetWallThumb(){
		date_default_timezone_set('Asia/Shanghai');
		$url =$this->wall->getThumbnail("", "2show_1379654900094",400,4);
		$this->assertNotNull($url);
	}*/
	/*public function testrReportAbuse(){
		$result =$this->wall->reportAbuse("2show_1377595874158","这是一个投诉测试","test@gmail.com");
		$temp = json_decode($result);
		$this->assertEquals("true",$temp->result);
	}*/
}

