<?php
require_once __DIR__ . '/../config/dbConstants.php';
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\UserRepository;
use Tudublin\User;

//--------- MOVIE ---------
// (1) drop then create table
$userRepository = new UserRepository();
$userRepository->dropTable();
$userRepository->createTable();

// (2) delete any existing objects
$userRepository->deleteAll();

// (3) create objects
$u1 = new User();
$u1->setUsername('matt');
$u1->setPassword('smith');

$u2 = new User();
$u2->setUsername('admin');
$u2->setPassword('admin');
$u2->setRole('ROLE_ADMIN');

// (3) insert objects into DB
$userRepository->create($u1);
$userRepository->create($u2);

// (4) test objects are there
$users = $userRepository->findAll();
print '<pre>';
var_dump($users);
