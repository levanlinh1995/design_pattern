<?php

include_once 'PizzaIngredientFactory.php';
include_once 'ThinCrustDough.php';
include_once 'MarinaraSauce.php';

class NYPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }
}