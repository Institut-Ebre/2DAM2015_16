<?php

class Mother {

    public function getEyeCount()
    {
        return 2;
    }

}

class Child extends Mother {

}

(new Child)->getEyeCount(); // 2