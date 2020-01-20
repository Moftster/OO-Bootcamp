<?php

use PracticeProject\Users\Person;
use PracticeProject\Staff;
use PracticeProject\Business;

$jeffrey = new Person("Jeffrey Way");

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

// $laracasts->hire($jeffrey);

$laracasts->hire(new Person('Jane Doe'));

$laracasts->hire(new Person('Bill'));

var_dump($laracasts->getStaffMembers());