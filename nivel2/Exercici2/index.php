<?php
require_once 'Car.php';
$newCar = new Car('Toyota', 'HS-5254-D', 'electricoo', 230);

if ($newCar->getGasType() === null) {
    echo __FILE__ . ': ' . __METHOD__ . '(linea:' . __LINE__ . "): comustible: $gasValue incorrecto, intenta:\n" . gasType::caseNames() . "\n";
}
$newCar->gasName = 'queroseno';
echo $newCar->getGasType()  . "\n";
$newCar->boost();
