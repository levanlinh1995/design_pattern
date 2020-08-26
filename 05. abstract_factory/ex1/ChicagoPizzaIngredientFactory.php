<?php

include_once 'PizzaIngredientFactory.php';
include_once 'ThickCrustDough.php';
include_once 'PlumTomatoSauce.php';

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough()
    {
        return new ThickCrustDough();
    }

    public function createSauce()
    {
        return new PlumTomatoSauce();
    }
}