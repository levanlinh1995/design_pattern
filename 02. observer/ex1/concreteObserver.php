<?php

include_once 'observerInterface.php';

class ConcreteObserver implements ObserverInterface {
    private $state;
    public function update(int $state) : void
    {
        $this->state = $state;
        $this->display();
    }

    public function display(): void 
    {
        echo 'updated: ' . $this->state . PHP_EOL;
    }
}