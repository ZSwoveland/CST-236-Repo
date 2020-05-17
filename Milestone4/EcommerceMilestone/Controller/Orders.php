<?php

namespace Controller;

use Model\DataBase;

require_once 'Product.php';
require_once 'User.php';
require_once 'Model/DataBase.php';

class Orders
{
    private $qty;
    private $price;
    private $name;
    private $date = date("m/d/Y");
    
    
    public function __construct()
    {}
    
    public function placeOrder($name, $price, $qty){
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }
    
    public function savetoDB(){
        $db = new DataBase();
        
        $this->savetoDetails($db->dbConnection());
        $this->savetoOrders($db->dbConnection());
    }
    
    public function savetoOrders($conn){
        
        $insert = "INSERT INTO orders (Date) VALUES (.'$this->date'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added product";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    
    public function savetoDetails($conn){
        
        $insert = "INSERT INTO orderDetails (Quantity, CurrentPrice, CurrentName) VALUES (.'$qty'.,'$price'.,'$name'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added orderDetails";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    public function displayOrder(){
        $user = new \User(); 
        $user->setFName('Zach');
        
        echo ".'$user->getFName()'. has placed order on : .'$this->date'. <br> Your items: .'$this->name'. Quantity:.' $this->qty'. Price .'$this->price'.";
        
        
    }
}

