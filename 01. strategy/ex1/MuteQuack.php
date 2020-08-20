<?php

include_once 'QuackBehaviorInterface.php';

class MuteQuack implements QuackBehaviorInterface {
    public function quack() {
        echo 'I cant quack';
    }
}