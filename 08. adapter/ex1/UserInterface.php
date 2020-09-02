<?php

interface UserInterface {
    public function setName(string $name): void;
    public function getName(): string;
}