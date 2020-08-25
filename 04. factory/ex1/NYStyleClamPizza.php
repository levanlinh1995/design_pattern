<?php
include_once 'Pizza.php';

class NYStyleClamPizza extends Pizza {
    public function __construct()
    {
        $this->name = 'NY style and clam pizza';
        $this->sauce = 'Marinara sauce';
    }
}