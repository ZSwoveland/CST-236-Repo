<?php

class SecurityService
{
    
    private $username;
    private $password;
    
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        
    }
    
    public function loginValidator(){
        $user = "Username";
        $pass = "Password";
        
        if($user == $this->username && $pass == $this->password){
            //echo "Access accepted";
            return true;
        }
        else{
            //echo "Access denied";
            return false;
        }
        
        
    }
    
    
    
    
    
}
?>

