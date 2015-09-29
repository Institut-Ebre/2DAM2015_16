<?php
/**
 * Created by PhpStorm.
 * User: liviucoronciuc
 * Date: 29/9/15
 * Time: 19:45
 */

class Factoria
{

    /**
     * @var string
     */
    public $name        = "";

    /**
     * @var string
     */
    public $name2       = "";

    /**
     * @var string
     */
    public $sn1         = "";

    /**
     * @var string
     */
    public $sn2         = "";

    /**
     * Factoria constructor.
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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * @param string $sn1
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;
    }

    /**
     * @return string
     */
    public function getSn2()
    {
        return $this->sn2;
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
        return $this->getSn1() . ' ' . $this->getSn2() . ', ' . $this->getName();
    }
}