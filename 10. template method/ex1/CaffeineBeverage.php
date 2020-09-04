<?php

abstract class CaffeineBeverage {
    final public function prepareRecipe(): void {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    abstract public function brew(): void;
    abstract public function addCondiments(): void;

    public function boilWater(): void {
        echo "Boiling water ...\n";
    }

    public function pourInCup() {
        echo "Pouring into cup\n";
    }

    // this is a hook
    public function customerWantsCondiments(): bool {
        return true;
    }
}