<?php

class User implements JsonSerializable
{
    private $id;
    private $firstName;
    private $lastName;
    

    public function __construct($id,$fN,$lN)
    {
        $this->id= $id;
        $this->firstName = $fN;
        $this->lastName= $lN;
        
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    public function jsonSerialize()
    {
        
        
        return get_object_vars($this);
    }


    
    
    
}

