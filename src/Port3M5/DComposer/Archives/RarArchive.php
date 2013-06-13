<?php

namespace Port3M5\DComposer\Archives;

use Port3M5\DComposer\Interfaces\CompressedArchive;

class RarArchive implements CompressedArchive
{
    public function getType()
    {
        return "rar";
    }

    public function extract($path)
    {
        //TODO
    }
}
