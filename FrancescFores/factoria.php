<?php
/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 29/09/15
 * Time: 19:44

 */

namespace factoria;


/**
 * Class factoria
 * @package factoria
 */
class Factoria
{
    public $name ="";
    public $name1 ="";
    public $name2 ="";

    /**
     * factoria constructor.
     * @param string $name1
     * @param string $name2
     * @param string $name
     */
    public function __construct($name1, $name2, $name)
    {
        $this->name1 = $name1;
        $this->name2 = $name2;
        $this->name = $name;
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
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * @param string $name1
     */
    public function setName1($name1)
    {
        $this->name1 = $name1;
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
     * prova constructor.
     * @param string $name
     */


}
