<?php

require_once 'dataBase.php';

require_once 'Product.php';

class ProductCreation
{
    
    //Hardcode Products
    public $product1 = new Product("StarWars", "Galaxy far far away in an intergalatic war", "starwars.png");
    public $product2 = new Product("Zootopia", "Bunny becoming and overcomming obstacles with partner", "zootopia.png");
    public $product3 = new Product("Wreck It Ralph", "Based on video game similar to the arcade game with Mario and DK", "Raplh.png");
    public $product4 = new Product("Mickey Mouse","Face of Disney","Mickey.png");
    public $product5 = new Product("Goofy Movie", "Funny and spontaneous", "Goofy.png");
    public $product6 = new Product("Shrek", "Shrek is love, Shrek is life", "Shrek.png");
    public $product7 = new Product("3 Muskeeters", "Adventerous and Funny:", "3.png");
    public $product8 = new Product("Hercules", "Son of a god who will fight monsters to protect what he loves", "Hercules.png");
    public $product9 = new Product("Lion King", "Simba learns the hard way when growing up", "Lion.png");
    public $product10 = new Product("Shark Tales", "Will Smith is voice acting, their is a car wash", "Shark.png");
    
    public function __construct()
    {}
    
    
    public function search($query){
        $array = array($this->product1->getName(),$this->product2->getName(), $this->product3->getName(), $this->product4->getName(), $this->product5->getName(), $this->product6->getName(), $this->product7->getName(), $this->product8->getName(), $this->product9->getName(),$this->product10->getName());
        
        $count = 0;
        $index =1;
        
        while($count < 10){
            if($query == $array[$index]){
                echo $array[$index];
            }
            else{
                $count++;
                $index++;
            }
        }
        
    }
    
    public function addProduct($id, $name, $type, $desc, $qty){
        $dbConn = new DataBase();
        
        
        
        $insert = "INSERT INTO products (ProductID, ProductName, ProductType, ProductDescription, ProductQty) VALUES (.'$id'.,.'$name'.,.'$type'.,.'$desc'.,.'$qty'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added product";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    
    
    public function editProduct($id, $name, $type, $desc, $qty){
        $dbConn = new DataBase();
        
        
        
        $update = "Update products set ProductID = .'$id'., ProductName = .'$name'., ProductType = .'$type'., ProductDescription = '.$desc'., ProductQty = .'$qty'. where ProductName = .'$input'.";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $update);
            echo "Successfully updated product";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    
    public function deleteProduct($id, $name){
        
        $dbConn = new DataBase();
        $delete = "DELETE FROM `products` where ProductID = .'$id'. AND ProductName = .'$name.'";
        
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $delete);
            echo "Successfully updated product";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    
    
    
    
    
}

