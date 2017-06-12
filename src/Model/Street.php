<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 6:21 PM
 */

namespace VM5\Econt\Model;


class Street
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $block;

    /**
     * @var string
     */
    private $entrance;

    /**
     * @var string
     */
    private $floor;

    /**
     * @var string
     */
    private $apartment;

    /**
     * @var string
     */
    private $other;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Street
     */
    public function setName(string $name): Street
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Street
     */
    public function setNumber(string $number): Street
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getBlock(): string
    {
        return $this->block;
    }

    /**
     * @param string $block
     * @return Street
     */
    public function setBlock(string $block): Street
    {
        $this->block = $block;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntrance(): string
    {
        return $this->entrance;
    }

    /**
     * @param string $entrance
     * @return Street
     */
    public function setEntrance(string $entrance): Street
    {
        $this->entrance = $entrance;

        return $this;
    }

    /**
     * @return string
     */
    public function getApartment(): string
    {
        return $this->apartment;
    }

    /**
     * @param string $apartment
     * @return Street
     */
    public function setApartment(string $apartment): Street
    {
        $this->apartment = $apartment;

        return $this;
    }

    /**
     * @return string
     */
    public function getOther(): string
    {
        return $this->other;
    }

    /**
     * @param string $other
     * @return Street
     */
    public function setOther(string $other): Street
    {
        $this->other = $other;

        return $this;
    }

    /**
     * @return string
     */
    public function getFloor(): string
    {
        return $this->floor;
    }

    /**
     * @param string $floor
     * @return Street
     */
    public function setFloor(string $floor): Street
    {
        $this->floor = $floor;

        return $this;
    }
}