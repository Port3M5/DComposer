<?php

namespace Port3M5\DComposer;

use Port3M5\DComposer\Archives\ZipArchive;
use Port3M5\DComposer\Archives\RarArchive;
use Port3M5\DComposer\Archives\NullArchive;

/**
 * Deals with creating the correct instance of CompressedArchive
 *
 * @author Anthony Porthouse <admin@port3m5.com>
 * @since 0.0.1
 * @package Port3M5\DComposer
 */
class Factory
{
    public function __construct($file = null)
    {
        if($file) {
            return $this->factory($file);
        }
    }

    /**
     * Creates the instance of CompressedArchive given the file. Filetype is determined by extension
     *
     * @author Anthony Porthouse <admin@port3m5.com>
     * @since 0.0.1
     * @param string $file Path to the file that is to be returned
     * @return \Port3M5\DComposer\Archives\NullArchive|\Port3M5\DComposer\Archives\RarArchive|\Port3M5\DComposer\Archives\ZipArchive
     */
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
                return new NullArchive($file);
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
