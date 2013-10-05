<?php
use org\bovigo\vfs\vfsStream;
require_once 'test\sample\FileExample.php';
require '../vendor/autoload.php';
require_once 'PHPUnit\Framework\TestCase.php';

/**
 * FileExample test case.
 */
class FileExampleTest extends PHPUnit_Framework_TestCase {
	
 /**
     * root directory
     *
     * @type  vfsStreamDirectory
     */
    protected $root;

    /**
     * set up test environmemt
     */
    public function setUp()
    {
        $this->root = vfsStream::setup('exampleDir');
    }

    /**
     * @test
     */
    public function directoryIsCreated()
    {
        $example = new FileExample('id');
        $this->assertFalse($this->root->hasChild('id'));
        $example->setDirectory(vfsStream::url('exampleDir'));
        $this->assertTrue($this->root->hasChild('id'));
    }
}

