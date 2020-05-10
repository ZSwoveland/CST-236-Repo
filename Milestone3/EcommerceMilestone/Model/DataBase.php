<?php
namespace Model;

class DataBase
{
    private $dbName = "ecommerce";
    private $host = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "root";
    
    public function __construct()
    {}
    
    public function dbConnection(){
        
        $conn = mysqli_connect($this->host, $this->dbUsername, $this->dbUsername,$this->dbName);
        
        
        return $conn;
    }
 
    
    
}

