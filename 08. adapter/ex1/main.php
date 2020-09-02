<?php

include_once 'UserToCustomerAdapter.php';
include_once 'User.php';

$user = new User();
$user->setName('linh le');

$adapter = new UserToCustomerAdapter($user);
$first = $adapter->getFirstName();
$last = $adapter->getLastName();

echo $first . ' ' . $last;
