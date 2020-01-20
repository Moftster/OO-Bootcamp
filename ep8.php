<?php

interface Logger {
    public function execute($message);
}

class logToFile implements Logger {

    public function execute($message) {
        var_dump('The message to a file ' . $message);
    }

}

class logToDatabase implements Logger {

    public function execute($message) {
        var_dump('The message to a database ' . $message);
    }

}


// 

class UsersController {

    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    } 

    public function show()
    {
        $user = 'JohnDoe';

        $this->logger->execute($user);

    }
}

$controller = new UsersController(new logToDatabase);

$controller->show();