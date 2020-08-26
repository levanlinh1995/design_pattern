<?php
include_once 'NYPizzaStore.php';
include_once 'ChicagoPizzaStore.php';


$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

echo '---------------- Order NY Pizza --------------------------------' . PHP_EOL;
$nyPizza = $nyStore->orderPizza('cheese');
echo '---------------- Order Chicago Pizza --------------------------------' . PHP_EOL;
$chicagoPizza = $chicagoStore->orderPizza('clam');