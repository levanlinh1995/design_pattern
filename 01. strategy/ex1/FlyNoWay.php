<?php

include_once 'FlyBehaviorInterface.php';

class FlyNoWay implements FlyBehaviorInterface {
    public function fly() {
        echo 'I cant fly';
    }
}