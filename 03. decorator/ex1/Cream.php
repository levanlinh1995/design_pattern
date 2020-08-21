<?php

include_once 'Beverage.php';
include_once 'CondimentDecorator.php';

class Cream extends CondimentDecorator {
    private $beverage;
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
        $this->description = 'Cream';   
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ' + ' . $this->description;
    }

    public function cost(): float
    {
        return 5.0 + $this->beverage->cost();
    }
}