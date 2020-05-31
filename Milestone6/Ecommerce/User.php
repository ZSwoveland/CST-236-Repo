<?php

class User
{
    //properties
    private $fName;
    private $lName;
    private $email;
    private $state;
    private $username;
    private $password;
    private $type;
    private $pn;
    private $creditCard;
    
    /**
     * @return mixed
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param mixed $creditCard
     */
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }

    //constructor
   /* public function __construct($fName, $lName, $Password, $Username, $state, $email, $type, $pn,$credit)
    {
     $this->fName = $fName;
     $this->lName = $lName;
     $this->password = $Password;
     $this->username = $Username;
     $this->state = $state;
     $this->email = $email;
     $this->type = $type;
     $this->pn = $pn;
     $this->creditCard = $credit;
        
    }*/
    public function __construct(){
        
    }
    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    //getter and setters foreach property
    /**
     * @return mixed
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @return mixed
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

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
     * @param mixed $fName
     */
    public function setFName($fName)
    {
        $this->fName = $fName;
    }

    /**
     * @param mixed $pName
     */
    public function setLName($lName)
    {
        $this->lName = lName;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
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

  
}

