<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    require_once 'User.php';
    
    $pw = "asdf";
    $pw2 = "afhahafhafhasfsd";
    
    if(User::validatePassword($pw2)){
        echo "Password is long enough! <br>";
    }
    else{
        echo "Your password is too short <br>";
    }