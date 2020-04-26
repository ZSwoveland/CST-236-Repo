<?php

class SuperHero
{
    //properties
    protected $name;
    protected $health;
    protected $isDead = false;
    
   
   
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Ambigous <string, unknown> $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getHealth()
    {
        return $this-> health;
    }

    /**
     * @param Ambigous <string, unknown> $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    //constructor
    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
    }
    
    //methods
    
    public function takeDamage($hitAgainstMe){
        $this->health = $this->health - $hitAgainstMe;
        DetermineHealth();
    }
    
    public function Attack($enemy){
        
        $dmg = rand(1,10);
        
        $enemy->takeDamage($dmg);
        
        
        echo $this->name . " has attacked " . $enemy->name . " and caused " . $dmg . "hit points against him <br>";
        //return $sh->health;
    }
    
    public function DetermineHealth(){
        
        if($this->health <= 0){
            $this->health = 0;
            $this->isDead = true;
        }
       
        
        
    }
    
    public function isDead(){
        if($this->isDead == true){
            echo $this->name . "is dead <br>";
            return $this->isDead;
        }
        else{
            echo $this->name . "is still alive <br>";
            return $this->isDead;
        }
        return $this->isDead;
    }
    
    
}

?>

