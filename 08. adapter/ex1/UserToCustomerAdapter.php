<?php

include_once 'CustomerInterface.php';
include_once 'UserInterface.php';

class UserToCustomerAdapter implements CustomerInterface {
    private $user;

    private $firstName;
    private $lastName;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
        $fullName = $user->getName();
        $pieces = explode(' ', $fullName);
        $this->firstName = $pieces[0];
        $this->lastName = $pieces[1];
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }
}