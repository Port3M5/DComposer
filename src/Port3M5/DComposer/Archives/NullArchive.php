<?php

namespace Port3M5\DComposer\Archives;

use Port3M5\DComposer\Interfaces\CompressedArchive;

class NullArchive implements CompressedArchive
{
    function getType()
    {
        return "null";
    }

    function extract($path)
    {

    }

    public function getFiles()
    {

    }

}
