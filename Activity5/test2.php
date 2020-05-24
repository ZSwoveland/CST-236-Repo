<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    require_once 'BankBusinessService.php';

    $bank = new BankBusinessService();
    
    $bank->getCheckingBalance(); echo "<br>";
    
    
    $bank->getSavingBalance(); echo "<br>";
    
    
    $bank->transaction(); echo "<br>";
    
    
    $bank->getCheckingBalance(); echo "<br>";
    
    
    $bank->getSavingBalance(); echo "<br>";



?>