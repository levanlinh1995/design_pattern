<?php

abstract class Pizza {
    public $name;
    public $sauce;

    public function prepare(): void {
        echo 'Preparing ' . $this->name . PHP_EOL;
        echo 'Adding ' . $this->name;
    }

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
}