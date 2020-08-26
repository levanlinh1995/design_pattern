<?php

include_once 'PizzaStore.php';
include_once 'Pizza.php';
include_once 'CheesePizza.php';
include_once 'ClamPizza.php';
include_once 'NYPizzaIngredientFactory.php';

class NYPizzaStore extends PizzaStore {
    public function createPizza(string $type): Pizza
    {
        $pizza = NULL;
        $pizzaIngredientFactory = new NYPizzaIngredientFactory();

        if ($type == 'cheese') {
            $pizza = new CheesePizza($pizzaIngredientFactory);
            $pizza->setName('NY Style Cheese Pizza');
        } else if ($type == 'clam') {
            $pizza = new ClamPizza($pizzaIngredientFactory);
            $pizza->setName('NY Style Clam Pizza');
        }

        return $pizza;
    }
}