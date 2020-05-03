<html>

<body>

<center>Products Found: </center>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'ProductCreation.php';


$productCreation = new ProductCreation();

$productCreation->search($_POST["search"]);



?>



</body>
</html>