<?php

include_once 'SauceInterface.php';

class PlumTomatoSauce implements SauceInterface {
    public function description()
    {
        return 'Plum Tomato Sauce';
    }
}