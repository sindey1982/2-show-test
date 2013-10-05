<?php

require_once '../lib/common/HttpUtil.php';

require_once 'PHPUnit\Framework\TestCase.php';

/**
 * HttpUtil test case.
 */
class HttpUtilTest extends PHPUnit_Framework_TestCase {
	
	/**
	 * @var HttpUtil
	 */
	private $HttpUtil;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated HttpUtilTest::setUp()
		

		$this->HttpUtil = new HttpUtil(/* parameters */);
	
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated HttpUtilTest::tearDown()
		

		$this->HttpUtil = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests HttpUtil->post()
	 */
	public function testPost() {
		// TODO Auto-generated HttpUtilTest->testPost()
		$params = array();
		$params['email']="sindey1982@gmail.com";
		$result = $this->HttpUtil->post("http://bo.2-show.com/api/signup/checkemail",$params,false);
	
	}
	

}

