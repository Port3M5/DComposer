<?php

namespace Port3M5\DComposer;

/**
 * This Library is Designed to simplify and unify the interface for working with Compressed Archives within PHP
 * @author Anthony Porthouse <admin@port3m5.com>
 * @since 0.0.1
 * @package Port3M5\DComposer
 */
class DComposer
{
    /**
     * Simply returns an instance of CompressedArchive
     *
     * @param string|null $filename Filepath to the archive
     * @return Interfaces\CompressedArchive An instance of CompressedArchive
     */
    public function __construct($filename = null)
    {
        return new Factory($filename);
    }
}
