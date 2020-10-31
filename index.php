<?php

require_once "Car.php";

$car = new Car();

$car->setHasParkBrake(true);

try {
    $car->start();
} catch (Exception $e){
    var_dump($e);
} finally {
    $car->setHasParkBrake(false);
    $car->start();
}

