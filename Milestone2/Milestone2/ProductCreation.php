<?php


require_once 'Product.php';

class ProductCreation
{

  
    
    public function __construct()
    {}
    
    public function arrayProducts($index){
        $product1 = new Product("StarWars", "Galaxy far far away in an intergalatic war", "~Img\StarWars.jpg");
        $product2 = new Product("Zootopia", "Bunny becoming and overcomming obstacles with partner", "~Img\Zootopia.jpg");
        $product3 = new Product("Wreck It Ralph", "Based on video game similar to the arcade game with Mario and DK", "~Img\Wreckit.jpg");
        $product4 = new Product("Mickey Mouse","Face of Disney","~Img/Mickey.jpg");
        $product5 = new Product("Goofy Movie", "Funny and spontaneous", "~Img/Goofy.jpg");
        $product6 = new Product("Shrek", "Shrek is love, Shrek is life", "~Img/Shrek.jpg");
        $product7 = new Product("3 Muskeeters", "Adventerous and Funny:", "~Img/3Musk.jpg");
        $product8 = new Product("Hercules", "Son of a god who will fight monsters to protect what he loves", "~Img/Hercules.jpg");
        $product9 = new Product("Lion King", "Simba learns the hard way when growing up", "");
        $product10 = new Product("Shark Tales", "Will Smith is voice acting, their is a car wash", "~Img/SharkTale.jpg");
        
        $array = array($product1,$product2,$product3,$product4,$product5,$product6,$product7,$product8,$product9,$product10);
        
        return $array[$index];
    }
    
    public function search($query){
  
        $count = 0;
      
        
        while($count < 10){
            if($query == $this->arrayProducts($count)->getName()){
                echo $this->arrayProducts($count)->getName();
                break;
            }
            else{
                
                
                $count++;
                
            }
        }
        
    }
    
    public function imgShow($name, $index){
        
        
        if(isset($_POST["$name"])){
           
            echo "<img src= ".$this->arrayProducts($index)->getImg() ."/>";    
        }
    }
    
    
    
    
    
}

