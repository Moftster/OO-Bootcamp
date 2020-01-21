<?php

interface Provider {

    public function getAuthorisationUrl();

}

abstract class Provider {
    protected function related()
    {

    }
}

class FacebookProvider implements Provider {

    protected function getAuthorisationUrl() {

    }

}