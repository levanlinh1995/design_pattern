<?php

include_once 'FlyBehaviorInterface.php';
include_once 'QuackBehaviorInterface.php';

class Duck {
    protected $flyBehavior;
    protected $quackBehavior;

    public function __construct(FlyBehaviorInterface $flyBehavior, QuackBehaviorInterface $quackBehavior) {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function setFlyBehavior(FlyBehaviorInterface $newFlyBehavior) {
        $this->flyBehavior = $newFlyBehavior;
    }

    public function display() {
        echo 'display Duck';
    }

    public function fly() {
        $this->flyBehavior->fly();
    }

    public function quack() {
        $this->quackBehavior->quack();
    }
}

