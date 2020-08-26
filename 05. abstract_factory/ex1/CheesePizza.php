<?php
include_once 'Pizza.php';
include_once 'PizzaIngredientFactory.php';

class CheesePizza extends Pizza {
    public $ingredientFactory;
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo 'Preparing ' . $this->getName();
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
    }
}