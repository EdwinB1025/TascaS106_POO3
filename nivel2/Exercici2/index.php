<?php
require_once 'Car.php';
$newCar = new Car('Toyota', 'HS-5254-D', 'electricoo', 230);
$newCar->gasName = 'queroseno';
echo $newCar->gasName  . "\n";
$newCar->boost();
