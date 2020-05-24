<?php

class Database
{


    public function __construct()
    {}
    
    public function getConnect(){
        $user = 'root';
        $password = 'root';
        $db = 'ica17';
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
    
    public function Close($conn){
        $conn->close;
    }
}
?>

