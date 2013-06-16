<?php

namespace Port3M5\DComposer\Archives;

use Port3M5\DComposer\Interfaces\CompressedArchive;

class ZipArchive implements CompressedArchive
{

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
