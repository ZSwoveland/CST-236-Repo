<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'Batman.php';
    require_once 'Superman.php';
    //require_once 'SuperHero.php';
    
    

    
    $Batman = new Batman("Batman", 10);
    $Supeman = new Superman("Superman", 100);

    while($Batman->isDead() == false && $SuperMan->isDead() == false){
        $SuperMan->Attack($Batman);
        
        echo $Batman->getName() . " Health is : " . $Batman->getHealth() . "<br>";
        
        $Batman->Attack($SuperMan);
        
        echo $SuperMan->getName() . " Health is : " . $SuperMan->getHealth() . "<br>";
        
        
    }

    


?>