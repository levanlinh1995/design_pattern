<?php

interface CustomerInterface {
    public function setFirstName(string $firstName): void;
    public function setLastName(string $lastName): void;
    public function getFirstName(): string;
    public function getLastName(): string;
}