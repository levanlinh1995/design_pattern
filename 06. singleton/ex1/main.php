<?php

include_once 'Singleton.php';

$instance = Singleton::getInstance();
$instance->setName('linh');

echo $instance->getName();

$instance2 = Singleton::getInstance();
$instance2->setName('le');

echo $instance2->getName();