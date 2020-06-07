<?php error_reporting(E_ALL);
ini_set('display_errors', 1);?>
<html>
<body>
Welcome to Checkout<br>

We have saved your credit card to processing.


Your order is:


<?php 
require_once 'User.php';
require_once 'Orders.php';
require_once 'Checkout.php';
require_once 'Discount.php';

$user = new User();

$user->setCreditCard($_POST['credit']);

$order = new Orders();

//$order->displayOrder();
$check = new Checkout();

$check->OrderTransaction();
$check->Banktransaction();
//echo "Credit card is :.'$_POST['credit']'.";

$discount = new Discount();

$discount->discountCalc($_POST['promo']);
$discount->discountCalcDollar($_POST['promo']);
$order->totalPrice($_POST['promo']);


?>







</body>

</html>