<?php

include_once 'CaffeineBeverage.php';

class Coffee extends CaffeineBeverage {
    public function brew(): void
    {
        echo "Dripping coffee through filter\n";
    }

    public function addCondiments(): void
    {
        echo "Adding sugar and milk\n";
    }
}