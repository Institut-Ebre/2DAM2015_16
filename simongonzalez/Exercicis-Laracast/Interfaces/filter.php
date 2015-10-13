<?php

interface CanBeFiltered{
    public function filter();
}

class Favorited implements CanBeFiltered {
    public function filter()
    {

    }
}

class Unwatched implements CanBeFiltered {
    public function filter()
    {

    }
}

class Difficulty implements CanBeFiltered {
    public function filter()
    {

    }
}