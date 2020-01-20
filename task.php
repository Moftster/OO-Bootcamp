<?php

class Person {

    public $name;

    public $age;

    public function __construct($name) {

        $this->name = $name;

    }

    public function getAge()
    {

       return $this->age * 365;

    }

    public function setAge($age) {

        if($age <18) {

            throw new Exception ("Person is not old enough");

        }

        $this->age = $age;

    }

}

$john = new Person('Billy Jones');

$john->setAge(31);

$john->age= 1;

var_dump($john->getAge());


