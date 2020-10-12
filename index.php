<?php

// index.php


require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("red");
$bike->dump();

$rockrider = new Bicycle("blue");
$rockrider->setColor('yellow');


$tornado = new Bicycle("green");
$tornado->setColor('black');

$twingo = new Car("yellow", 4, "fuel");
$twingo->setEnergyLevel(4);
echo $twingo->getEnergyLevel();

$alfa = new Car("black", 5, "gasoline");
$alfa->setEnergyLevel(2);
$alfa->setNbWheels(4);
echo $alfa->getEnergyLevel();
var_dump($alfa);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br><br>';
//Moving car
echo $twingo->start();
echo '<br> Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h';
echo 'Niveau d energy de la voiture : ' . $twingo->getEnergyLevel() . ' L' . '<br>';
echo $twingo->forward();
echo '<br> Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h';
echo 'Niveau d energy de la voiture : ' . $twingo->getEnergyLevel() . ' L' . '<br>';
echo $twingo->forward();
echo '<br> Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h';
echo 'Niveau d energy de la voiture : ' . $twingo->getEnergyLevel() . ' L' . '<br>';
echo $twingo->brake();
echo '<br> Vitesse de la voiture : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();
echo '<br><br>';

echo $alfa->start();
echo '<br> Vitesse de la voiture : ' . $alfa->getCurrentSpeed() . ' km/h';
echo 'Niveau d energy de la voiture : ' . $alfa->getEnergyLevel() . ' L' . '<br>';
echo $alfa->forward();
echo '<br> Vitesse de la voiture : ' . $alfa->getCurrentSpeed() . ' km/h';
echo 'Niveau d energy de la voiture : ' . $alfa->getEnergyLevel() . ' L' . '<br>';
echo $alfa->forward();
echo '<br> Vitesse de la voiture : ' . $alfa->getCurrentSpeed() . ' km/h';
echo 'Niveau d energy de la voiture : ' . $alfa->getEnergyLevel() . ' L' . '<br>';
echo $alfa->brake();
echo '<br> Vitesse de la voiture : ' . $alfa->getCurrentSpeed() . ' km/h' . '<br>';
echo $alfa->brake();

