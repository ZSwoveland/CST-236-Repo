<?php

class Database
{
    private $user = 'root';
    private $password = 'root';
    private $db = 'inventory';
    private $host = 'localhost';
    private $port = 8889;

    public function __construct()
    {}
    
    public function getConnect(){
        $link = mysqli_init();
        $success = mysqli_real_connect(
            $link,
            $this->host,
            $this->user,
            $this->password,
            $this->db,
            $this->port
            );
        return $success;
    }
}
?>

