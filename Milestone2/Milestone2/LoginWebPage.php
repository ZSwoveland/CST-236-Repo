<?php 
//session start
session_start();




?>

<html>
<body>
Welcome to the Login Page

<form action="Home.php" method="post">

Username: <input type="text" name ="username"><br>

Password: <input type="text" name ="password"><br>
<input type = "submit">


<?php 

require_once 'LoginValidation.php';

$login = new LoginValidation();

//set session variables
$_SESSION["status"] = $login->verifyLogin();

?>

<input type = "submit">


</form>

</body>

