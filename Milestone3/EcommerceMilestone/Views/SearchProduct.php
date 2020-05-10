<?php
use Model\ProductCreation;
?>
<html>

<body>
<form action="SearchProduct.php" method="Post">

Search for Product 
<input type="text" name="search"><br>
<input type = "Submit">
</form>
Products found:
<?php 
require_once 'Model/ProductCreation.php';


$productCreation = new ProductCreation();

$productCreation->search($_POST["search"]);



?>





</body>

</html>