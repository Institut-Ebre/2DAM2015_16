<?php

/**
 * Created by PhpStorm.
 * User: yves
 * Date: 04/10/15
 * Time: 20:12
 */
class Persona
{
    /**
     * @var string
     */
    public $name = "";
    /**
     * @var string
     */
    public $name2 = "";
    /**
     * @var string
     */
    public $name3 = "";

    /**
     * Factoria constructor.
     * @param string $name
     * @param string $name2
     * @param string $name3
     */
    public function __construct($name, $name2, $name3)
    {
        $this->name = $name;
        $this->name2 = $name2;
        $this->name3 = $name3;
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
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param string $name2
     */
    public function setName2($name2)
    {
        $this->name2 = $name2;
    }

    /**
     * @return string
     */
    public function getName3()
    {
        return $this->name3;
    }

    /**
     * @param string $name3
     */
    public function setName3($name3)
    {
        $this->name3 = $name3;
    }

    public function full_name()
    {
        return $this->getName().' '.$this->getName2().', '.$this->getName3();
    }

}