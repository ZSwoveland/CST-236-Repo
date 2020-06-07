<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<html>
<body>
Welcome to the Shopping cart:<br>
<form action="CheckOutPage.php" method="post">



Payment Information:<br>
Credit Card #: <input type="text" name="credit"><br> 
Promo Code: <input type = "text" name ="promo"><br>
<input type = "submit"><br>


Your Cart:<br>
<?php 
require_once 'Orders.php';


$order = new Orders();

$order->placeOrder($_POST['pName'], '$100.00', $_POST['qty']);
$order->displayOrder1();
?>






</form>

</body>