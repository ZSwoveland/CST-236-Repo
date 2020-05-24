<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'CheckingAccountDataService.php';
  require_once 'SavingAccountDataService.php';
  
  $checkings = new CheckingAccountDataService();
  $savings = new SavingAccountDataService();
  
  
  //Display checking balance;
  
  $checkings->getBalance();
  
  
  //Update Checkings;
  
  $checkings->updateBalance(100);
  
    
  //Display checking balance;
  
  $checkings->getBalance();
  
  //Display Savings balance;
  
  $savings->getBalance();
  
  
  //Update Savings;
  
  $savings->updateBalance(100);
  
  
  //Display Savings balance;
  
  $savings->getBalance();


?>