<?php
require_once 'Database.php';
require_once 'SavingAccountDataService.php';
require_once 'CheckingAccountDataService.php';




class BankBusinessService
{
    public $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnect();
        
    }
    
    public function getCheckingBalance(){
        $cDS = new CheckingAccountDataService();
        
        return $cDS->getBalance();
    }
    
    public function getSavingBalance(){
        $sDS = new SavingAccountDataService();
        
        return $sDS->getBalance();
    }
    
    public function transaction(){
        $db = new Database();
        $cDS = new CheckingAccountDataService();
        $sDS = new SavingAccountDataService();
        
        $conn = $db->getConnect();
        
        $conn->autocommit(FALSE);
        
        $conn->begin_transaction();
        
        $newTotal = $this->getCheckingBalance() - 100;
        $cDS->updateBalance($newTotal);
        

        
        $newTotal1 = $this->getSavingBalance() + 100;
        $sDS->updateBalance($newTotal1);
        
        if($sDS->updateBalance($newTotal1) == 1 && $cDS->updateBalance($newTotal)){
            $conn->commit();
        }
        else{
            $conn->rollback();
        }
           
    
        
    }
}

