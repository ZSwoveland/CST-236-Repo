<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    require_once 'Dog.php';
    require_once 'Cat.php';
    
    $cat1 = new Cat("Morris", "Orange");
    $dog1 = new Dog("Fito","Black");
    
    $cat1->talk();
    $dog1->talk();
    $cat1->doTrick();
    $dog1->doTrick();
    
?>