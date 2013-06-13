<?php

use Port3M5\DComposer\Factory;
use Mockery as m;

class FactoryTest extends PHPUnit_Framework_TestCase
{
    public function testCanDetermineFileExtension()
    {
        $f = new Factory();
        $result = $f->getFileType("somefile.zip");
        $this->assertEquals('zip', $result, 'Expect zip extension to return "zip"');

        $result = $f->getFileType("somefile.rar");
        $this->assertEquals('rar', $result, 'Expect rar extension to return "rar"');
    }

    public function testFactoryReturnsCompressedArchive()
    {
        $f = new Factory();
        $result = $f->factory('somefile.zip');
        $this->assertInstanceOf('\Port3M5\DComposer\Interfaces\CompressedArchive', $result);
    }
}
