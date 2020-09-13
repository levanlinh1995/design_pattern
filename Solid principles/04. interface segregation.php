<?php
/*
interface Animal {
    public function eat(): void;
    public function run(): void;
    public function fly(): void;
}
*/

interface Animal {
    public function eat(): void;
}

interface RunnableAnimal {
    public function run(): void;
}

interface FlyableAnimal {
    public function fly(): void;
}


class Dog implements Animal, RunnableAnimal {
    public function eat(): void {

    }

    public function run(): void {

    }
}

class Eagle implements Animal, FlyableAnimal {
    public function eat(): void {

    }

    public function fly(): void {
        
    }
}