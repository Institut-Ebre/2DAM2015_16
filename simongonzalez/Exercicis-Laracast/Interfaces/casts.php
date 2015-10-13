<?php

interface CastsToJson {
    public function toJson();
}

class User implements CastsToJson {}

class Collection implements CastsToJson {}