<?php
require_once 'Car.php';
$newCar = new Car('Toyota', 'HS-5254-D', gasType::ELECTRIC, 230);

$newCar->setGasType(gasType::DIESEL);
echo $newCar->getGasType()  . "\n";
$newCar->boost();
