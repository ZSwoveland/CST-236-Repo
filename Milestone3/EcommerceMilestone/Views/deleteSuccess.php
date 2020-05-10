
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Model\UserCreation;
use Model\ProductCreation;

require_once 'Controller/User.php';
require_once 'Model/DataBase.php';
require_once 'Model/UserCreation.php';
require_once 'Model/ProductCreation.php';


$userC = new UserCreation();
$productC = new ProductCreation();

$userC->deleteUserQuery($_POST['fName'], $_POST['lName'], $_POST['email']);
$userC->deleteLoginQuery($_POST['username']);
$userC->deleteAddressQuery($_POST['fName'], $_POST['username']);


$productC->deleteProduct($_POST['pID'], $_POST['pName']);

?>

