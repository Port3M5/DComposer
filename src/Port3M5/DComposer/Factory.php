<?php

namespace Port3M5\DComposer;

use Port3M5\DComposer\Archives\ZipArchive;
use Port3M5\DComposer\Archives\RarArchive;

class Factory
{
    public function __construct($file = null)
    {
        if($file) {
            $this->factory($file);
        }
    }

    public function factory($file)
    {
        $extension = $this->getFileType($file);

        switch($extension) {
            case "zip":
                return new ZipArchive($file);
                break;
            case "rar":
                return new RarArchive($file);
                break;
            default:
                throw new \InvalidArgumentException("File must be a type of zip or rar archive");
        }
    }

    public function getFileType($file)
    {
        $fileExtensionFound = preg_match('/^.*\.(?<extension>\w+)$/', $file, $matches);

        if($fileExtensionFound) {
            return $matches['extension'];
        }
    }
}
