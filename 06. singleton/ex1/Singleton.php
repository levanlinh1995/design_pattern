<?php

class Singleton {
    private static $instance = NULL;
    public $name;

    private function __construct() {}

    public static function getInstance(): Singleton {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function setName(string $newName): void {
        $this->name = $newName;
    }

    public function getName(): string {
        return $this->name;
    }
}
