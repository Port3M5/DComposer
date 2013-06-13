<?php
namespace Port3M5\DComposer\Interfaces;

interface CompressedArchive
{
    public function getType();
    public function extract($path);
}
