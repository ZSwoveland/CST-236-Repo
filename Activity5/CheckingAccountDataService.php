<?php
require_once 'Database.php';


class CheckingAccountDataService
{

    public function __construct()
    {}
    
    public function getBalance(){
       
        $conn = new Database();
        $query = "SELECT `BALANCE` FROM `checking` WHERE `ID` = 1";
        
        // Perform query
        $result = mysqli_query($conn->getConnect(), $query);
            
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "Name: " . $row["Balance"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn->getConnect());
      
          
           
            
            
    
    }
    
    public function updateBalance($balance){
        $conn = new Database();
        
        
        
     
        
        if($this->getBalance() != 0 || $this->getBalance() != NULL){
             $total = $this->getBalance() - $balance;
             
             $query = "UPDATE `checking` SET `BALANCE`= .'$total'. WHERE ID = 1";
             // Perform query
             $result = mysqli_query($conn->getConnect(), $query);
             
             if (mysqli_query($conn->getConnect(), $query)) {
                 echo "Record updated successfully";
             } else {
                 echo "Error updating record: " . mysqli_error($conn->getConnect());
             }
             mysqli_close($conn->getConnect());
            return 1;
        }
        else{
            return 0;
        }
        
    }
}

