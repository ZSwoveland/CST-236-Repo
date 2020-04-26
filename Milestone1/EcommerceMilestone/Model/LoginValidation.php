<?php
require_once 'Views/LoginWebPage.php';

class LoginValidation
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
    private $uSQL = "SELECT username FROM `user` where username = ".$_POST['username']." and password = ".$_POST['password']."";
    private $pSQL = "SELECT password FROM `user` where username = ".$_POST['username']." and password = ".$_POST['password']."";
    
    //sql statement to look for username and password
    
    public function verifyLogin(){
        $status;
        if($this->selectUserName() == $_POST['username'] && $this->selectPassword() == $_POST['password']){
            $status = "Approved";
            return $status;
            echo "Successfully logged in <br>";
        }
        else{
            $status = "Declined";
            return $status;
            echo "Please try again <br>";
        }
    }
    
    private function selectUserName(){
        $link = mysqli_connect($this->host, $this->user, $this->password,$this->db);
        
        if($link == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
            
        }
        
        $username;
        
        if(mysqli_query($link,$this->uSQL)){
            
            $username = mysqli_query($link,$this->uSQL);
            
            return $username;
            echo "Records searched successfully.";
        }
        else{
            echo "Error could not execute sql.";
        }
        
        return $username;
        mysqli_close($link);
        
    }
    
    private function selectPassword(){
        $link = mysqli_connect($this->host, $this->user, $this->password,$this->db);
        
        if($link == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
            
        }
        $password;
        
        if(mysqli_query($link,$this->pSQL)){
            
            $password = mysqli_query($link,$this->pSQL);
            
            return $password;
            echo "Records searched successfully.";
        }
        else{
            echo "Error could not execute sql.";
        }
        
        return $password;
        mysqli_close($link);
    }
    
    
    public function __construct()
    {}
}

