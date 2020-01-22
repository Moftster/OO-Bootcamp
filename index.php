<?php

require 'vendor/autoload.php';

$registration = new PracticeProject\RegisterUser;

$authController = new PracticeProject\AuthController($registration);

$authController->register();