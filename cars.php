<?php

use CarsProject\Color;

require 'vendor/autoload.php';

$car = new Color("blue");

$car->setModel("VW");

var_dump($car);