<?php

interface Provider {
    public function autorize();
}

function login (Provider $provider)
{
    $provider->autorize();

}

Auth::attempt()