<?php

interface Provider{
    public function getAuthorizationUrl();
}

abstract class AbstractProvider {

    protected function related()
    {

    }
}

class FacebookProvider implements Provider {

    protected function getAuthorizationUrl()
    {
        return '';
    }
}
