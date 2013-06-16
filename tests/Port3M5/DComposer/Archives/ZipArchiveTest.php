<?php

namespace Port3M5\DComposer\Archives;


use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamFile;
use org\bovigo\vfs\visitor\vfsStreamStructureVisitor;

class ZipArchiveTest extends \PHPUnit_Framework_TestCase
{

    protected $vfs;

    public function setUp()
    {

        if(file_exists('/tmp/examples.zip')) {
            unlink('/tmp/examples.zip');
        }

        $this->vfs = vfsStream::setup('root');
        $archive = new \ZipArchive;
        $res = $archive->open('/tmp/examples.zip', \ZipArchive::CREATE);
        $archive->addFromString('test.txt', 'some text');
        $archive->close();

        vfsStream::newFile('examples.zip')->at($this->vfs)->setContent(file_get_contents('/tmp/examples.zip'));
    }

    public function tearDown()
    {
        if(file_exists('/tmp/examples.zip')) {
            unlink('/tmp/examples.zip');
        }
    }

    public function testAcceptsZipfile()
    {
        $file = $this->vfs->url('examples.zip');
        $archive = new ZipArchive($file);

        $this->assertEquals('zip', $archive->getType(), 'File Should be zip');


    }
}
