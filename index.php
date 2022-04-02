<?php
require_once 'Vehicle.php';
require_once 'bike.php';
require_once 'car.php';
require_once 'truck.php';


$bicycle = new Bike('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

$myTruck = new Truck('orange', 3, 'electric', 27);
$myTruck->setCurrentStorage (12);
var_dump($myTruck);
echo "<br>";
echo $myTruck->fillingRate();
echo $myTruck->forward();
echo $myTruck->brake();

$tesla = new Car('black', 4, 'electric');
$ferrari = new Car('red', 2, 'fuel');
$schoolBus = new Bus('yellow', 40);