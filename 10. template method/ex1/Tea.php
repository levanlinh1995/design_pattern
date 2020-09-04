<?php

include_once 'CaffeineBeverage.php';

class Tea extends CaffeineBeverage {
    public function brew(): void
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments(): void
    {
        echo "Adding lemon\n";
    }
}