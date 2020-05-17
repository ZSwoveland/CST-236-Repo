<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Controller\Orders;
?>

<html>
<body>
Welcome to the Shopping cart:<br>
<form action="CheckOut.php" method="post">



Payment Information:<br>
Credit Card #: <input type="text" name="credit"><br>

<input type = "submit"><br>


Your Cart:<br>
<?php 
require_once 'Controller/Orders.php';

$order = new Orders();

$order->placeOrder($_POST['pName'], '$100.00', $_POST['qty']);
$order->displayOrder();
?>






</form>

</body>