<?php

interface CanBeFlitered {
    public function filter();
}

class Favourited implements CanBeFiltered {
    public function filter()
    {

    }
}

class NotRead implements CanBeFiltered {
    public function filter()
    {

    }
}

class Difficulty implements CanBeFiltered {
    public function filter()
    {

    }
}