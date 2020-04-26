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
    
    public function installEngine(){
        $hasEngine = true;
        
        echo "Engine successfully installed";
        
        return true;
    }
    
    public function inflateTiresTo($x){
        $tirePressure = $x;
        if($tirePressure < 32){
            echo "Current tire pressure " . $tirePressure . "Try again Hint 32 <br>";
        }
        else{
            echo "Tire pressure is correct amount <br>";
        }
    }
    
    public function start(){
        if($this->tirePressure == 32 && $this->installEngine() == true){
            $isRunning = true;
            $this->setSpeed(rand(1,60));
            echo "Car is now running <br>";
        }
        else{
           echo "Please make sure car has an engine, 4 tires, and 32 PSI in the tires <br>";
        }
    }
    
    public function restart(){
        
        echo "Car was restarted <br>";
        $this->start();
    }
    
    public function stop(){
        $isRunning = false;
        $this->setSpeed(0);
    }
    
    public function setSpeed($x){
        $speedOfCar = $x;
        
        echo "Car is going " . $speedOfCar . "mph <br>";
    }
    
    
    
    
    
    
    
    
}

?>
