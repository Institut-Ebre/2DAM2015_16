<?php


abstract class Provider {

    abstract protected function getAuthorizationUrl();
}

class FacebookProvider extends Provider {

    protected function getAuthorizationUrl()
    {
        return '';
    }
}