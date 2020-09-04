<?php

include_once 'Subsystem1.php';
include_once 'Subsystem2.php';
include_once 'Facade.php';

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();
$facade = new Facade($subsystem1, $subsystem2);
echo $facade->operation();