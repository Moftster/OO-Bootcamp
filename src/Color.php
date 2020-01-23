<?php

namespace CarsProject;

class Color {
    public $color;

    public $make;

    public function __construct($color) {
        $this->color = $color;
    }

    public function setModel($make)
    {
        $this->make = $make;
    }
}