<?php

namespace PracticeProject;

class RegisterUser {
    public function execute(array $data, ResponseToUserRegistration $listener)
    {
        var_dump("Registering the user.");

        $listener->UserRegisteredFailed();
    }
}