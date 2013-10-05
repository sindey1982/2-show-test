<?php
require_once dirname(__FILE__).'/../global.php';
require_once 'lib/se/SEPage.class.php';
require_once 'PHPUnit\Framework\TestCase.php';

/**
 * test case.
 */
class SEPageTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * Prepares the environment before running a test.
	 */
	private $page ;
	protected function setUp() {
		parent::setUp ();
	    $this->page = new SEPage();
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
	//函数如果什么都没动是不会修改的。判断是不是要加？
	/*public function testSavePageTemplate(){
		$resutl=json_decode($this->page->savePageTemplate("",1,"12",'g3g333',1));
		$this->assertEquals("1", $resutl->templateId);
	}*/
	/*public function testCreatePageTemplate(){
		$resutl=json_decode($this->page->createPageTemplate("","11t2",'g3g333',1));
		$this->assertNotEquals("", $resutl->templateId);
	}*/
	/*public function testEnablePageTemplate(){
		$resutl=json_decode($this->page->enablePageTemplate("","11t2"));
		$this->assertTrue($resutl->result);
	}*/
	/*public function testGetPages(){
		$resutl=json_decode($this->page->getPages("","2show_1378877798904","Test@gmail.com","654321"));
		$this->assertEquals("true", $resutl->status);
		$temp = count($resutl->pages);
		$this->assertGreaterThan(0,$temp);	
	}*/
	
	/*public function testGetFirstPage(){
		$result=$this->page->getFirstPage("2show_1377156390297");
		$this->assertEquals("0l",$result->index);
	}*/
	/*public function testGetPagesFistPhoto(){
		$result2=$this->page->getFirstImageOfPage("2show_1377156390297");
		$this->assertEquals("0l-1", $result2->index);
	}*/
   /*public function testSavePages(){
  		$example = '[{"photo_id":"1da0cf78-7fc8-8cc7-60d3-a4fc687837e4","isBlank":"false","src":"/upload/1da0cf78-7fc8-8cc7-60d3-a4fc687837e4_1024.jpg","imgWidth":683,"imgHeight":1024,"views":[{"type":"H","top":412,"left":1,"width":683,"height":313},{"type":"S","top":287,"left":0,"width":682,"height":682},{"type":"V","top":0,"left":0,"width":512,"height":1024}],"wdh":0.67,"index":"0l-1"},{"photo_id":"740a00e4-63a7-5195-0886-8f7887a58c7d","isBlank":"false","src":"/upload/8541a099-6486-242d-0a6d-6f381357d0da_1024.jpg","imgWidth":1024,"imgHeight":683,"views":[{"type":"H","top":0,"left":0,"width":512,"height":234},{"type":"S","top":341,"left":0,"width":683,"height":683},{"type":"V","top":0,"left":141,"width":512,"height":1024}],"wdh":0.67,"index":"0l-2"},{"photo_id":"8541a099-6486-242d-0a6d-6f381357d0da","isBlank":"false","src":"/upload/8ecedd83-2671-6ff1-d1e8-b8406a45c1af_1024.jpg","imgWidth":1024,"imgHeight":682,"views":[{"type":"H","top":0,"left":0,"width":1024,"height":512},{"type":"S","top":0,"left":341,"width":683,"height":683},{"type":"V","top":0,"left":291,"width":341,"height":670}],"wdh":1.5,"index":"0r-1"},{"photo_id":"8ecedd83-2671-6ff1-d1e8-b8406a45c1af","isBlank":"false","src":"/upload/740a00e4-63a7-5195-0886-8f7887a58c7d_1024.jpg","imgWidth":682,"imgHeight":1024,"views":[{"type":"H","top":170,"left":0,"width":1024,"height":512},{"type":"S","top":0,"left":341,"width":341,"height":670},{"type":"V","top":0,"left":291,"width":341,"height":682}],"wdh":1.5,"index":"1l-1"},{"photo_id":"ae00c545-9533-8591-931a-435da64d7146","isBlank":"false","src":"/upload/ae00c545-9533-8591-931a-435da64d7146_1024.jpg","imgWidth":1024,"imgHeight":683,"views":[{"type":"H","top":171,"left":0,"width":1024,"height":512},{"type":"S","top":0,"left":190,"width":683,"height":683},{"type":"V","top":1,"left":291,"width":341,"height":682}],"wdh":1.5,"index":"1r-1"},{"photo_id":"eac70b94-3378-00c4-9e61-7bbe0c348410","isBlank":"false","src":"/upload/eac70b94-3378-00c4-9e61-7bbe0c348410_1024.jpg","imgWidth":683,"imgHeight":1024,"views":[{"type":"H","top":351,"left":1,"width":683,"height":341},{"type":"S","top":0,"left":0,"width":683,"height":683},{"type":"V","top":0,"left":171,"width":512,"height":1024}],"wdh":0.67,"index":"2l-1"},{"photo_id":"f427655d-8444-cba9-0a82-1f32e6458211","isBlank":"false","src":"/upload/f427655d-8444-cba9-0a82-1f32e6458211_1024.jpg","imgWidth":1024,"imgHeight":683,"views":[{"type":"H","top":171,"left":0,"width":1024,"height":512},{"type":"S","top":0,"left":224,"width":683,"height":683},{"type":"V","top":1,"left":148,"width":341,"height":682}],"wdh":1.5,"index":"2r-1"}]';
		$result = $this->page->savePages("", "2show_1377595874158",$example);
		$r = json_decode($result);
		$this->assertEquals("true",$r->result);	
	}*/
   public function testGetRawPagesData(){
		$resutl=$this->page->getRawPagesData("2show_1379654900094");//2show_1379654900094 2show_1378777388120 2show_1378731478150 2show_1379839777335
		$temp2 = json_encode($resutl);
		$temp = count($resutl->pages);
		$this->assertGreaterThan(0,$temp);	
	}
	/*public function testCreatePages_Media(){
		date_default_timezone_set('Asia/Shanghai');
		$photoids = '[{"photo_id":"00494fd1-d5aa-9e72-e197-a4c08b96542a"},{"photo_id":"006ae806-0082-3735-ff71-7faf42d0c061"},{"photo_id":"018cb3a4-dcd2-462b-85b3-2ebb4fa09c3a"},{"photo_id":"01bf50ac-15fc-e8ea-48fa-c18b5dd96011"}]';
		$temp = $this->page->createPages_Media("", "test@gmail.com", "2show_1379654900094",null,null);//"append",$photoids 2show_1379654900094 2show_1378777388120 2show_1377156390297 2show_1378731478150 ,null,null
		$result=json_decode($temp);
		$this->assertGreaterThan(0,count($result->pages));	
		$this->assertNotEquals(0,count($result->imgs));
		//$this->assertEquals(11,count($result->pages->imgs));	
	}*/
	/*public function testSavePages_Realtime(){
		$example1 = '[{"index":"0l-1","id":"87978df9-7fcb-d97e-843e-820431698a61","src":"/upload/87978df9-7fcb-d97e-843e-820431698a61_1024.jpg","origin":"local","imgWidth":683,"imgHeight":1024,"views":[{"type":"H","top":466,"left":0,"width":682,"height":341},{"type":"S","top":341,"left":0,"width":683,"height":683},{"type":"V","top":18,"left":210,"width":318,"height":638}],"wdh":0.67,"photo_id":"87978df9-7fcb-d97e-843e-820431698a61","isBlank":"false"},{"index":"0r-1","id":"356388d4-105d-97e2-ee61-feb5e99c7e8b","src":"/upload/356388d4-105d-97e2-ee61-feb5e99c7e8b_1024.jpg","origin":"local","imgWidth":1024,"imgHeight":683,"views":[{"type":"H","top":171,"left":0,"width":1024,"height":512},{"type":"S","top":0,"left":176,"width":683,"height":683},{"type":"V","top":1,"left":282,"width":341,"height":682}],"wdh":1.5,"photo_id":"356388d4-105d-97e2-ee61-feb5e99c7e8b","isBlank":"false"}]';
		$example2 = '[{"index":"0l-1","id":"87978df9-7fcb-d97e-843e-820431698a61","src":"/upload/87978df9-7fcb-d97e-843e-820431698a61_1024.jpg","origin":"local","imgWidth":683,"imgHeight":1024,"views":[{"type":"H","top":466,"left":0,"width":682,"height":341},{"type":"S","top":0,"left":2,"width":681,"height":684},{"type":"V","top":18,"left":210,"width":318,"height":638}],"wdh":0.67,"photo_id":"87978df9-7fcb-d97e-843e-820431698a61","isBlank":"false","page_id":"83cabbeb-53c7-37ad-554c-07b510489d43"},{"index":"0r-1","id":"356388d4-105d-97e2-ee61-feb5e99c7e8b","src":"/upload/356388d4-105d-97e2-ee61-feb5e99c7e8b_1024.jpg","origin":"local","imgWidth":1024,"imgHeight":683,"views":[{"type":"H","top":171,"left":0,"width":1024,"height":512},{"type":"S","top":0,"left":176,"width":683,"height":683},{"type":"V","top":1,"left":282,"width":341,"height":682}],"wdh":1.5,"photo_id":"356388d4-105d-97e2-ee61-feb5e99c7e8b","isBlank":"false","page_id":"b90fa727-4ad9-1510-6763-e31e2e9032af"}]';
		
		$result = $this->page->savePages_Realtime("", "2show_1379688693502","swap",$example2);//"swap" 2show_1379688693502       "view" 2show_1379688693502
		$r = json_decode($result);
		$this->assertEquals("true",$r->result);	
	}*/
 /* public function testRecreatePage_onPhotoDelete(){
		$param = new stdClass();
		$param->page_id_l="d2629d6f-b6d1-0d15-8ec7-429dfbb40695";
		$param->page_id_r="8216d116-915e-baaf-1322-7240f55bdd3b";
		$param->section="l";
		$param->photoid = "cc0c4bcb-03f0-5909-9afd-ca3a7a9f6633";//f117e9d7-96cd-a280-8ff1-3aa0e2c8df91 2  4ddf002b-05f4-5499-b22b-0ac78b16f125 1
		$result = $this->page->recreatePage_onPhotoDelete("", "2show_1379654900094",$param->page_id_l.",".$param->page_id_r,$param->photoid );//json_encode($param)
		$r = json_decode($result);
		$this->assertEquals("true",$r->status);	
	}  */
}

