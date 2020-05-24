<?php


require_once 'dataBase.php';
require_once 'Orders.php';

class Checkout
{
    
    public function __construct()
    {}
    
    public function getBalance(){
        $database = new dataBase();
        $database->dbConnection();
        
        
        $query = "SELECT BALANCE FROM BANK where .'user.ID'. = ID";
      
        
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
    
    
    public function getCompanyBalance(){
        
        $database = new DataBase();
        $database->dbConnection();
        
        
        $query = "SELECT BALANCE FROM Company WHERE ID = 1";
        
        
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
    
    public function updateCompanyBalance($balance){
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
    
    public function getProductPrice(){
        
        $database = new DataBase();
        $database->dbConnection();
        $p = new Orders();
        $productName = $p->getProductName();
        
        $query = "SELECT PRICE FROM Products where productName = .'$productName'.;";
        
        
        
        $result = mysqli_query($conn->getConnect(), $query);
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "Name: " . $row["Price"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    
    public function Banktransaction(){
        
        $database = new DataBase();
        $conn = $database->dbConnection();
        
        
        
        $conn->autocommit(FALSE);
        
        $conn->begin_transaction();
        
        $Total = $this->getBalance() - $this->getProductPrice();
        $this->updateBalance($Total);
        
        $nTotal = $this->getCompanyBalance() + $this->getProductPrice();
        $this->updateCompanyBalance();
        
   
        
        if($this->updateBalance($Total) == 1 && $this->updateCompanyBalance($nTotal) == 1){
            $conn->commit();
        }
        else{
            $conn->rollback();
        }
        
        
        
    }
    
    public function OrderTransaction(){
        
        
        $database = new DataBase();
        $conn = $database->dbConnection();
        $order = new Orders();
        
        
        $conn->autocommit(FALSE);
        
        $conn->begin_transaction();
        
        $order->savetoDB();
       // $order->placeOrder1();
        $order->displayOrder();
        
        
        
        if($order->savetoDetails($conn) == 1 && $order->savetoDetails($conn) == 1){
            $conn->commit();
           
        }
        else{
            $conn->rollback();
        }
        
        
    }
    
    
    
   
}

