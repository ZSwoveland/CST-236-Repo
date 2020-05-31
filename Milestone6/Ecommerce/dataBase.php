<?php


class dataBase
{
    private $dbName = "ecommerce";
    private $host = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "root";
    
    public function __construct()
    {}
    
    public function dbConnection(){
        
        $user = 'root';
        $password = 'root';
        $db = 'ecommerce';
        $host = 'localhost';
        $port = 8889;
        
        $link = mysqli_init();
        $success = mysqli_real_connect(
            $link,
            $host,
            $user,
            $password,
            $db,
            $port
            );
        
        return $success;
        
    }
    
  
 
    
    
}

