<?php

namespace Port3M5\DComposer;

class DComposer
{
    public function decompress($filename, $path)
    {
        new Factory($filename, $path);
    }
}
