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

$userC->editUserQuery($_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['phonenumber'], $_POST['type']);
$userC->editLoginQuery($_POST['username'], $_POST['password']);
$userC->editAddressQuery($_POST['address'], $_POST['state'], $_POST['city'], $_POST['Zip']);


$productC->editProduct($_POST['pID'], $_POST['pName'], $_POST['pType'], $_POST['pdDesc'], $_POST['qty']);

?>