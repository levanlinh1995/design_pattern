<?php


include_once 'RemoteController.php';
include_once 'LightOnCommand.php';
include_once 'LightOffCommand.php';
include_once 'GarageDoor.php';
include_once 'GarageDoorOpenCommand.php';
include_once 'GarageDoorCloseCommand.php';

$remote = new RemoteController();

$light = new Light();
$lightOnCommand = new LightOnCommand($light);
$lightOffCommand = new LightOffCommand($light);

$garage = new GarageDoor();
$garageDoorOpenCommand = new GarageDoorOpenCommand($garage);
$garageDoorCloseCommand = new GarageDoorCloseCommand($garage);

$remote->setCommand(0, $lightOnCommand, $lightOffCommand);
$remote->setCommand(1, $garageDoorOpenCommand, $garageDoorCloseCommand);


$remote->onButtonWasPressed(0);
$remote->offButtonWasPressed(0);
$remote->onButtonWasPressed(1);
$remote->offButtonWasPressed(1);