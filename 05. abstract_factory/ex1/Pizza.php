<?php

abstract class Pizza {
    public $name;
    public $sauce;
    public $dough;

    abstract public function prepare();

    public function bake(): void {
        echo 'Bake for 25 mins' . PHP_EOL;
    }

    public function cut(): void {
        echo 'Cutting the pizza' . PHP_EOL;
    }

    public function box(): void {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
}