<?php

include_once 'observerInterface.php';

interface SubjecInterface {
    public function registerObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface $observer);
    public function notify();
}