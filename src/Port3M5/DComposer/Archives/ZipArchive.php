<?php

namespace Port3M5\DComposer\Archives;

use Port3M5\DComposer\Interfaces\CompressedArchive;

class ZipArchive implements CompressedArchive
{
    protected $archive;

    public function __construct($file)
    {
        if(file_exists($file) && is_readable($file)) {
            $this->archive = new \ZipArchive();
            $this->archive->open($file);
        } else {
            throw new \InvalidArgumentException("File must exist and be accessible");
        }

    }

    public function getType()
    {
        return "zip";
    }

    public function extract($path)
    {
        //TODO
    }

    public function getFiles()
    {
        //TODO
    }

}
