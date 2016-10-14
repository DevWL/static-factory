<?php

include "StaticFactory.php";

$A6 = VehicleFactory::buildVehicle('Car', 'Audi', 'A6');
$S7 = VehicleFactory::buildVehicle('Car', 'BMW', 'Series 7');

var_dump($A6);
var_dump($S7);