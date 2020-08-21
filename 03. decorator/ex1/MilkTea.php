<?php

include_once 'Beverage.php';

class MilkTea extends Beverage {
    public function __construct()
    {
        $this->description = 'MilkTea Beverage';
        
    }

    public function cost() : float
    {
        return 56.0;
    }
}