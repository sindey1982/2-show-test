<?php
require_once dirname(__FILE__).'/../global.php';
require_once 'lib/se/SEMember.class.php';
require_once 'PHPUnit\Framework\TestCase.php';

/**
 * test case.
 */
class SEMemberTest extends PHPUnit_Framework_TestCase {
	private $member ;
	protected function setUp() {
		parent::setUp ();
	    $this->member = new SEMember();
		// TODO Auto-generated SEPageTest::setUp()
	}
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated SEPageTest::tearDown()
		

		parent::tearDown ();
	}
	public function testAddPhotowallMember(){
		$resutl=json_decode($this->member->addPhotowallMember("","2show_1378877798904","test1@gmail.com",0,null));
		$this->assertEquals("true", $resutl->result);
	}		
}