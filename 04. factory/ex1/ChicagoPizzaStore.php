<?php

include_once 'PizzaStore.php';
include_once 'Pizza.php';
include_once 'ChicagoStyleCheesePizza.php';
include_once 'ChicagoStyleClamPizza.php';

class ChicagoPizzaStore extends PizzaStore {
    public function createPizza(string $type): Pizza
    {
        if ($type == 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } else if ($type == 'clam') {
            $pizza = new ChicagoStyleClamPizza();
        }

        return $pizza;
    }
}