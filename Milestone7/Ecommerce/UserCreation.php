<?php

require_once ('User.php');
require_once ('dataBase.php');


class UserCreation
{

    public function __construct()
    {}


    public function addUser($fName, $lName, $Password, $Username, $state, $email, $type, $pn, $zip, $city, $address){
        $user = new \User($fName, $lName, $Password, $Username, $state, $email, $type, $pn);
        
        $this->addUserQuery($fName,$lName, $email, $pn, $ut);
        $this->addLoginQuery($Username, $Password);
        $this->addAddressQuery($address, $state, $city, $zip);
        
    }
    
    public function addUserQuery($f, $l, $e, $pn, $ut){
        $dbConn = new DataBase();
        
      
        
        $insert = "INSERT INTO users(FirstName, LastName, EmailAddress, PhoneNumber, UserType) VALUES (.'$f'.,.'$l'.,.'$e'.,.'$pn'.,.'$ut'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added user";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }

    }
    
    public function addAddressQuery($a, $s, $c, $z){
        $dbConn = new DataBase();
        
        $insert = "INSERT INTO `address`( `Address`, `State`, `City`, `Zip`) VALUES (.'$a'.,.'$s'.,.'$c'.,.'$z'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added address";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
      
    }
    
    public function addLoginQuery($u,$p){
        $dbConn = new DataBase();
        
        $insert = "INSERT INTO `login`(`Username`, `Password`) VALUES (.'$u'.,.'$p'.])";
        
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "Successfully added Login Information";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    
    public function deleteUser($fName, $lName, $Username, $email){
        //$user = new \User($fName, $lName, $Password, $Username, $state, $email, $type, $pn);
        
        $this->editUserQuery($fName,$lName, $email, $pn, $ut);
        $this->editLoginQuery($Username, $Password);
        $this->editAddressQuery($address, $state, $city, $zip);
        
    }
    
    public function deleteUserQuery($f, $l, $e){
        $dbConn = new DataBase();
        
        
        
        $delete = "DELETE FROM users where FirstName = .'$f'., LastName = .'$l'., EmailAddress = .'$e'.";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $delete);
            echo "Successfully added user";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
    }
    
    public function deleteAddressQuery($fName,$username){
        $dbConn = new DataBase();
        
        $delete = "DELETE FROM `address` where users.firstName = .'$this->selectQuery($fName, $username)'.";
        
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $delete);
            echo "Successfully deleted Address Information";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
        
    }
    
    public function selectQuery($firstName, $username){
        $dbConn = new DataBase();
        
        $select = "Select addressID FROM `users` where firstName = .'$firstname'. AND username = .'$username'";
        
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $select);
            return $query;
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
    }
    
    public function deleteLoginQuery($u){
        $dbConn = new DataBase();
        
        $delete = "DELETE FROM `login` where Username = .'$u'.";
        
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $delete);
            echo "Successfully deleted Login Information";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
    }
    
    public function editUserQuery($f, $l, $e, $pn, $ut){
        $dbConn = new DataBase();
        
        
        
        $update = "Update users set FirstName = .'$f'., LastName = .'$l'., EmailAddress = .'$e'., PhoneNumber = '.$pn'., UserType = .'$ut'.";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $update);
            echo "Successfully updated user";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
    }
    
    public function editAddressQuery($a, $s, $c, $z){
        $dbConn = new DataBase();
        
        $update = "Update address set Address = .'$a'., State = .'$s'., City = .'$c'., Zip = '.$z'.";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $update);
            echo "Successfully updated address";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
        
        
    }
    
    public function editLoginQuery($u,$p){
        $dbConn = new DataBase();
        
        $update = "Update login set Username = .'$u'., Password = .'$p'.";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $update);
            echo "Successfully updated login";
        }
        catch(\Exception $e){
            echo "error .'$e'.";
        }
        
    }
}

?>
