<html>

<body>
<center>Welcome to the Sales Report:</center>

<form action="SalesReportWeb.php" method="post">

Product ID: <input type="text" name="productID"><br> 
Start Date: <input type="text" name="sDate"><br> 
End Date: <input type="text" name="eDate"><br> 

<input type = "submit"><br>


</form>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'SaleReport.php';

$sales = new SaleReport();

$sales->salesQuery($_POST['sDate'], $_POST['eDate'], $_POST['productID']);
$sales->jsonSerialize($_POST['sDate'], $_POST['eDate'], $_POST['productID']);

?>
</body>


</html>
