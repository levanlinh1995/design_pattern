<?php

include_once 'PizzaStore.php';
include_once 'Pizza.php';
include_once 'NYStyleCheesePizza.php';
include_once 'NYStyleClamPizza.php';

class NYPizzaStore extends PizzaStore {
    public function createPizza(string $type): Pizza
    {
        if ($type == 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } else if ($type == 'clam') {
            $pizza = new NYStyleClamPizza();
        }

        return $pizza;
    }
}