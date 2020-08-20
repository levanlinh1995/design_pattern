<?php

include_once 'QuackBehaviorInterface.php';

class Quack implements QuackBehaviorInterface {
    public function quack() {
        echo 'quack';
    }
}
