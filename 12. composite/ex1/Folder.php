<?php

include_once 'IFile.php';

class Folder implements IFile {
    protected $files = [];
    protected $name;
    protected $size;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->size = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): float
    {
        foreach ($this->files as $file) {
            $this->size += $file->getSize();
        }

        return $this->size;
    }

    public function addFile(IFile $file): void {
        $this->files[] = $file;
    }

    public function removeFile(IFile $deletefile): void {
        foreach ($this->files as $key => $file) {
            if ($file == $deletefile) {
                unset($this->files[$key]);
                break;
            }
        }
    }
}