<?php 

namespace MyProject;

class Person {

    public $age;

    public function AgeInDays($age) {

        return $age * 365;

    }
}