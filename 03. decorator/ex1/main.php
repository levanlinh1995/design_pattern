<?php

include_once 'Beverage.php';
include_once 'MilkTea.php';
include_once 'Mocha.php';
include_once 'Cream.php';

$milkTea = new MilkTea();
echo $milkTea->getDescription() . ' ' . $milkTea->cost();
echo PHP_EOL;

$update = new Mocha($milkTea);

// echo $update->getDescription() . ' ' . $update->cost();

$update = new Cream($update);

echo $update->getDescription() . ' ' . $update->cost();