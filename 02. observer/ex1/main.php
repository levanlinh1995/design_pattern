<?php

include_once 'concreteSubject.php';
include_once 'concreteObserver.php';

$subject = new ConcreteSubject();
$object = new ConcreteObserver();

$subject->registerObserver($object);
$subject->setState(1);
$subject->setState(2);
$subject->removeObserver($object);
$subject->setState(3);