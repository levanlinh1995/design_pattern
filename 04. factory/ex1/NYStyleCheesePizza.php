<?php
include_once 'Pizza.php';

class NYStyleCheesePizza extends Pizza {
    public function __construct()
    {
        $this->name = 'NY style and cheese pizza';
        $this->sauce = 'Marinara sauce';
    }
}