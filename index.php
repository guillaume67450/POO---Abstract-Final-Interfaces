<?php

// Intefaces
require './interfaces/lightable.interface.php';

// Classes
require './classes/high-way.class.php';

require './classes/motor-way.class.php';
require './classes/pedestrian-way.class.php';
require './classes/residential-way.class.php';

require './classes/vehicule.class.php';

require './classes/car.class.php';
require './classes/bike.class.php';
require './classes/skateboard.class.php';

$motorWay       = new MotorWay();
$pedestrianWay  = new PedestrianWay();
$residentialWay = new ResidentialWay();

$bike = new Bike();
$bike->setCurrentSpeed(17); // on peut changer la vitesse du vélo ici, pour rouler à + ou - de 10 km/h

if ($bike->switchOn())
  echo "La vitesse du vélo est " . $bike->getCurrentSpeed() . " km/h";
else
  echo "Le vélo n'est pas assez rapide pour allumer la lumière";