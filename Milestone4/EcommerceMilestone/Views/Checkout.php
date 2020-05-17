<html>
<body>
Welcome to Checkout<br>

We have saved your credit card to processing.
<?php 
require_once 'User.php';

$user = new User();

$user->setCreditCard($_POST['credit']);



?>




</form>

</body>