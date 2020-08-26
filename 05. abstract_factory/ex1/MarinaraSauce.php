<?php

include_once 'SauceInterface.php';

class MarinaraSauce implements SauceInterface {
    public function description()
    {
        return 'Marinara Sauce';
    }
}