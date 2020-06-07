<?php

require_once 'User.php';
require_once 'RegistrationPage.php';



class RegistrationHelp
{
    
    
    //database connection
    protected $user = 'root';
    protected $password = 'root';
    protected $db = 'userdb';
    protected $host = 'localhost';
    protected $port = 8889;
    
    protected $link = mysql_connect(
        "$host:$port",
        $user,
        $password
        );
    protected $db_selected = mysql_select_db(
        $db,
        $link
        );
    
    
    public function __construct()
    {}
    
    private function createNewUser(){
      
        $user = new User();
        
        $user->setFName($_POST["fName"]);
        $user->setLName($_POST["LName"]);
        $user->setEmail($_POST["email"]);
        $user->setState($_POST["state"]);
        $user->setUsername($_POST["username"]);
        $user->setPassword($_POST["username"]);
        
        
        
        return $user;
    }
    
    private function insertSQL(User $u){
      $insertSQL = "INSERT INTO `User`(`ID`, `firstName`, `lastName`, `email`, `State`, `username`, `password`) VALUES (". $u->getFName().",".$u->getLName().",".$u->getEmail().",". $u->getState .",".$u->getUsername()."," .$u->getPassword()."";
      
      return $insertSQL;
    }
    
    public function insertIntoDB(){
        $link = mysqli_connect($this->host, $this->user, $this->password,$this->db);
        
        if($link == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
            
         }
         
         if(mysqli_query($link,$this->insertSQL($this->createNewUser()))){
             echo "Records added successfully.";
         }
        else{
            echo "Error could not execute sql.";
        }
        
        mysqli_close($link);
    }
}

