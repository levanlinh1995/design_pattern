<?php

include_once 'UserInterface.php';

class User implements UserInterface {
    private $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}