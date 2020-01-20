<?php

namespace PracticeProject;

use PracticeProject\Users\Person;

// use PracticeProject\Users\Person;

class Business {

    protected $staff;

    public function __construct(Staff $staff) 
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        // add $person to the staff colleciton

        $this->staff->add($person);
    }

    public function getStaffMembers() {
        return $this->staff->members();
    }

}