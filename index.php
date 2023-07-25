<?php
// index.php
require_once 'car.php';
require_once 'Bicycle.php';


$bike = new Bicycle('blue');
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.
// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
$tornado->forward();
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
var_dump($bike);
$bike->dump();

$car = new Car('rose', 5, 'diesel');
var_dump($car);
$car->setCurrentSpeed(60);
$car->setEnergyLevel(30);
echo $car->start();
echo'<br>';
echo $car->forward(20);
echo'<br>';
echo $car->brake();
echo'<br>';
var_dump($car);