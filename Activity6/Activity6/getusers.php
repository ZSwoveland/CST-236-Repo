<?php

require_once 'User.php';

$user = new User(1, "Zach", "Swoveland");
$user1 = new User(2, "King", "DeeDeeDee");
$user2 = new User(3, "Sparta", "Leonidas");
$user3 = new User(4,"Boba", "Fett");
$user4 = new User(5, "Mike", "Mic");

$array = array($user,$user1,$user2,$user3,$user4);


echo json_encode($array);

?>