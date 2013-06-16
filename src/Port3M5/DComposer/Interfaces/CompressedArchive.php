<?php
namespace Port3M5\DComposer\Interfaces;

interface CompressedArchive
{
    public function __construct($file);
    public function getType();
    public function extract($path);
    public function getFiles();
}
