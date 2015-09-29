<?php

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 29/09/15
 * Time: 19:44
 */
class Persona
{

    public $name = "";

    public $sn1 = "";

    public $sn2 = "";

    /**
     * Factorya constructor.
     * @param string $name
     * @param string $sn1
     * @param string $sn2
     */
    public function __construct($name, $sn1, $sn2)
    {
        $this->name = $name;
        $this->sn1 = $sn1;
        $this->sn2 = $sn2;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @return string
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @param string $sn2
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;
    }

    public function full_name()
    {
        return $this->getSn1() . $this->getSn2() . $this->getName();
    }
}