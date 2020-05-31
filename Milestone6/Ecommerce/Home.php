<html>
<body>
Welcome to the Home Page <br>

Username entered : <?php echo $_POST["username"];?> <br>
Password entered : <?php echo $_POST["password"]?> <br>

<?php 
require_once 'RegistrationHelp.php';
require_once 'LoginValidation.php';

$reg = new RegistrationHelp();
$login = new LoginValidation();

$reg->insertIntoDB();
$login->verifyLogin();
?>
</body>
</html>
