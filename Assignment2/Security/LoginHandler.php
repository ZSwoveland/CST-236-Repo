<?php
    require_once 'SecurityService.php';
    require_once 'securePage.php';

    $security = new SecurityService($_POST["username"], $_POST["password"]);
    
    
    if($security->loginValidator() == true){
        include 'loginPassed.php';
        
        $_SESSION["principle"] = true;
    }
    else{
        include 'loginFailed.php';
        $_SESSION["principle"] = false;
        echo "Login Failed";
    }

?>