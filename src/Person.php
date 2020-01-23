<?php 

namespace MyProject;

class Person {

    public $name;
    
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age) 
    {
        $this->age = $age;
    }

    public function AgeInDays() {

        return $this->age * 365;

    }
}