<?php

include_once 'IFile.php';

class File implements IFile {
    private $name;
    private $size;

    public function __construct(string $name, float $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): float
    {
        return $this->size;
    }
}