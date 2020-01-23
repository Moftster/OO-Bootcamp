<?php

require 'vendor/autoload.php';

use MyProject\Person;

$person = new Person("Tom");

$person->setAge(30);

var_dump($person);

$ageIndays = $person->AgeInDays();

var_dump($ageIndays);

$personTwo = new Person ("Billy");

var_dump($personTwo);