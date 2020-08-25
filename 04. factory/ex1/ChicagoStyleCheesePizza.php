<?php
include_once 'Pizza.php';

class ChicagoStyleCheesePizza extends Pizza {
    public function __construct()
    {
        $this->name = 'Chicago style and cheese pizza';
        $this->sauce = 'Marinara sauce';
    }
}