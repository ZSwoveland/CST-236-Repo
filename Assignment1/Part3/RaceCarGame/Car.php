<?php


class Car
{
    //properties
    private $tires;
    private $hasEngine;
    private $tirePressure;
    private $isRunning;
    
    //Constructor to create a new Car
    public function __construct(){
        
    }
    
    
    //method of a Car
    public function addTire($numberOfNewTires){
        if($numberOfNewTires > 0 && $numberOfNewTires <= 4){
            if ($this->tires + $numberOfNewTires > 4){
                echo "You can only have 4 tires. Try again";
            }
            else{
                $this->tires = $this->tires + $numberOfNewTires;
                echo "You installed " . $numberOfNewTires . "you now have " . $this->tires . " tires on your car <br>";
            }
        }
        else{
            echo "That is an invalid number of new tires. Please try again.";
        }
    }
    
    

    
    
    
    
    
}

?>

