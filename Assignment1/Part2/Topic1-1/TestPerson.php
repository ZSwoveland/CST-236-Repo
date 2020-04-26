<?php
    //require_once "Autoloader.php";
    require_once 'Person.php';
    
    //Create an instance of Person Class
    $person = new Person("Tyler");
    $person->walk();
    
    $person2 = new Person("Jeeves");
    $person->formalGreeting();
    
    $person3 = new Person("Jose");
    $person3->spanishGreeting();
    
    $person3->login("Zach", "abcde");
    $person3->login("Zach", "password");