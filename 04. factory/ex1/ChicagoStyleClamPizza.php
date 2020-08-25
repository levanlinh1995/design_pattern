<?php
include_once 'Pizza.php';

class ChicagoStyleClamPizza extends Pizza {
    public function __construct()
    {
        $this->name = 'Chicago style and clam pizza';
        $this->sauce = 'Marinara sauce';
    }
}