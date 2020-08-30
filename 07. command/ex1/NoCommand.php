<?php

include_once 'Command.php';

class NoCommand implements Command {
    public function execute(): void
    {
        
    }

    public function undo(): void
    {
        
    }
}