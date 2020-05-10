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

$userC->addUser($_POST['fName'], $_POST['lName'], $_POST['password'], $_POST['username'], $_POST['state'], $_POST['email'], $_POST['type'], $_POST['phonenumber'], $_POST['Zip'], $_POST['city'], $_POST['address']);

$productC->addProduct($_POST['pID'], $_POST['pName'], $_POST['pType'], $_POST['pdDesc'], $_POST['qty']);

?>