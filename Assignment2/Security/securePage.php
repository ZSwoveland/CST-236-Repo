<?php
require_once 'Header.php';
include 'Header.php';


 $_SESSION["principle"];



 if( $_SESSION["principle"] == null ||  $_SESSION["principle"] == false ||  $_SESSION["principle"] == true){
   header("Location: index.html");
}


?>