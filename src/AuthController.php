<?php 

namespace PracticeProject;

class AuthController {

    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }
    public function register()
    {
        $this->registration->execute([], $this);
    }

    public function UserRegisteredSuccessfully()
    {
        var_dump("Created successfully. Redirect back.");
    }

    public function UserRegisteredFailed()
    {
        var_dump("Created unsuccessfully. An issue.");

    }
}



