<?php
include_once 'CondimentDecorator.php';

class Mocha extends CondimentDecorator {
    private $beverage;
    public function __construct(Beverage $newBeverage)
    {
        $this->beverage = $newBeverage;
        $this->description = 'Mocha';
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ' + ' . $this->description;
    }

    public function cost(): float
    {
        return 10.0 + $this->beverage->cost();
    }
}