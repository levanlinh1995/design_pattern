<?php

include_once 'Command.php';
include_once 'GarageDoor.php';

class GarageDoorOpenCommand implements Command {
    public $garageDoor;

    public function __construct(GarageDoor $door)
    {
        $this->garageDoor = $door;
    }
    public function execute(): void
    {
        $this->garageDoor->up();
    }

    public function undo(): void
    {
        $this->garageDoor->down();
    }
}