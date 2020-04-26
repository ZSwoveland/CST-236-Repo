<?php

/**
 * Class that encapsulates a Person
 * @author zachs
 * Date 4/20/20
 *
 */

class Person
{
    //properties
    private $name;
    
    //constructor for creating a new person
    public function __construct($name)
    {
        echo "Hello my name is " .$name ."<br>";
        $this->name = $name;
        $this->username = "Zach";
        $this->password = "password";
    }
    
    //methods a person can do
    public function formalGreeting(){
        echo "Sir, Nice to meet you. You can call me " .$this->name . "</br>";
        
    }
    
    public function walk(){
        echo "I am walking..." ."<br>";
        
    }
    
    public function spanishGreeting(){
        echo "Hola senor y senora como estan ustedes, me llamo" .$this->name . "<br>";
        
    }
    
    public function login($a, $b){
        if($a == $this->username && $b == $this->password){
            echo $this->name . "has been logged in sucessfully <br>";
        }
        else{
            echo "Login failed. That doesn't seem quite right<br>";
        }
    }
    
}

