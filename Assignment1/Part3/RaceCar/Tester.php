<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'Car.php';

 $racecar = new Car();

 $racecar->addTire(4);
 $racecar->installEngine();
 $racecar->inflateTiresTo(32);
 $racecar->start();
 $racecar->stop();
 $racecar->restart();

?>