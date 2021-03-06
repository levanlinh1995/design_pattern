<?php

include_once 'PizzaStore.php';
include_once 'Pizza.php';
include_once 'CheesePizza.php';
include_once 'ClamPizza.php';
include_once 'ChicagoPizzaIngredientFactory.php';

class ChicagoPizzaStore extends PizzaStore {
    public function createPizza(string $type): Pizza
    {
        $pizza = NULL;
        $pizzaIngredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type == 'cheese') {
            $pizza = new CheesePizza($pizzaIngredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } else if ($type == 'clam') {
            $pizza = new ClamPizza($pizzaIngredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        }

        return $pizza;
    }
}