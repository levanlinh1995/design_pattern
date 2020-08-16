<?php

include_once 'Duck.php';
include_once 'FlyWithWings.php';
include_once 'FlyNoWay.php';
include_once 'Quack.php';
include_once 'FlyBehaviorInterface.php';

class ironDuck extends Duck {
    
}


$ob = new ironDuck(new FlyWithWings(), new Quack());
// $ob->fly();
// $ob->setFlyBehavior(new FlyNoWay);
$ob->fly();
