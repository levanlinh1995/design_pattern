<?php

include_once 'Command.php';
include_once 'NoCommand.php';

class RemoteController {
    public $onCommands = [];
    public $offCommands = [];

    public function __construct()
    {
        for ($i = 0; $i < 2; $i++) {
            $onCommands[] =  new NoCommand();
            $offCommands[] =  new NoCommand();
        }
    }

    public function setCommand(int $slot, Command $oncommand, Command $offCommand): void {
        $this->onCommands[$slot] = $oncommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPressed(int $slot): void {
        $this->onCommands[$slot]->execute();
    }

    public function offButtonWasPressed(int $slot): void {
        $this->offCommands[$slot]->execute();
    }
}