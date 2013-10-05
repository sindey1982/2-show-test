<?php

require_once '../lib/local/LocalPage.class.php';

require_once 'PHPUnit\Framework\TestCase.php';

/**
 * Page test case.
 */
class PageTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var Page
	 */
	private $Page;
	private $userToken;
	private $photoWallId;
	private $templateId;
	private $dataPhotos;
	private $newTemplateName;
	private $newTemplateInfo;
	private $newTemplateCapacity;
	private $savedTmplate;
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated PageTest::setUp()
		$this->userToken=" ";
		$this->photoWallId="2show_1373361872505";
		$this->templateId = 1;
		$this->dataPhotos='{ "photos":["uuid_page_25439904-e285-5b62-d9c3-6e0fa173502c", "uuid_page_6636f275-a9f2-0a53-f86b-f5d4a86d1548", "uuid_page_ecc4f6cd-c7b0-c8a3-21c4-83424e016c6d"]}';
		$this->newTemplateCapacity=5;
		$this->newTemplateInfo='{"width":600, "height":450, "cellNum":2 "cells":[{"width":600,"height":300, "float":"none", "top": 0,"left": 0,"index":1},{"width":600,"height":140,"float":"left","top":0,"left": 300,"index":2},{"width":600,"height":300, "float":"none", "top": 0,"left": 0,"index":1},{"width":600,"height":300, "float":"none", "top": 0,"left": 0,"index":1}]}';
		$this->newTemplateName='测试模板用例';

		$this->Page = new LocalPage();
	
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated PageTest::tearDown()
		

		$this->Page = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests Page->createPage_Template()
	 */
	/*public function testCreatePage_Template() {
		
		$result = $this->josn2Obj($this->Page->createPage_Template($this->userToken,$this->photoWallId,$this->templateId,$this->dataPhotos));
		$this->assertNotEquals("", $result->pageId);
		$this->assertGreaterThan(0, count($result->cells));
	
	}*/
	
	/**
	 * Tests Page->createPage_Random()
	 */
	/*public function testCreatePage_Random() {
		
		$result =  $this->josn2Obj($this->Page->createPage_Random($this->userToken,$this->photoWallId,$this->dataPhotos));
		$this->assertNotEquals("", $result->pageId);
		$this->assertGreaterThan(0, count($result->cells));
	
	}*/
	
	/**
	 * Tests Page->getPages()
	 */
	/*public function testGetPages() {
		$result = $this->josn2Obj($this->Page->getPages($this->userToken,$this->photoWallId));
		$this->assertEquals($this->photoWallId, $result->photoWallId);	
		$this->assertGreaterThan(0, count($result->pages));	
	}*/
	
	/**
	 * Tests Page->removePage()
	 */
	/*public function testRemovePage() {
		$this->Page->removePage();
	
	}*/
	
	/**
	 * Tests Page->createPageTemplate()
	 */
	/*public function testCreatePageTemplate() {
		$result =  $this->josn2Obj($this->Page->createPageTemplate($this->userToken,$this->newTemplateName,$this->newTemplateInfo,$this->newTemplateCapacity));
		$this->assertNotEquals("", $result->templateId)	;
	}
	*/
	/**
	 * Tests Page->savePageTemplate()
	 */
	/*public function testSavePageTemplate() {
		$newTemp =  $this->josn2Obj($this->Page->createPageTemplate($this->userToken,$this->newTemplateName,$this->newTemplateInfo,$this->newTemplateCapacity));
		$result =  $this->josn2Obj($this->Page->savePageTemplate($this->userToken,$newTemp->templateId, "这是修改后的模板名字", '{"test":"test"}', 5));
		$this->assertNotEquals("", $result->templateId)	;
	}*/
	
	/**
	 * Tests Page->enablePageTemplate()
	 */
	/*public function testEnablePageTemplate() {
		$newTemp =  $this->josn2Obj($this->Page->createPageTemplate($this->userToken,$this->newTemplateName,$this->newTemplateInfo,$this->newTemplateCapacity));
		$result = $this->josn2Obj($this->Page->enablePageTemplate($this->userToken,$newTemp->templateId));
		$this->assertNotEquals("", $result->templateId)	;
	}*/
	
   public function josn2Obj($jsonstr){
   		return json_decode($jsonstr);
   }
}

