<?php

include_once 'subjectInterface.php';
include_once 'observerInterface.php';

class ConcreteSubject implements SubjecInterface {
    private $state;
    private $observerList = []; // array

    public function registerObserver(ObserverInterface $observer): void
    {
        $this->observerList[] = $observer;
    }

    public function removeObserver(ObserverInterface $i_observer): void
    {
        foreach ($this->observerList as $key => $observer) {
            if ($i_observer == $observer) {
                unset($this->observerList[$key]);
            }
        }
    }

    public function notify() : void
    {
        foreach ($this->observerList as $observer) {
            $observer->update($this->state);
        }
    }

    public function setState(int $state) : void 
    {
        $this->state = $state;
        $this->notify();
    }
}