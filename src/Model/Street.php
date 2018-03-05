<?php

namespace Todstoychev\Econt\Model;

class Street extends AbstractModel
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $number;

    /**
     * @var string|null
     */
    protected $block;

    /**
     * @var string|null
     */
    protected $entrance;

    /**
     * @var string|null
     */
    protected $floor;

    /**
     * @var string|null
     */
    protected $apartment;

    /**
     * @var string|null
     */
    protected $other;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return Street
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param null|string $number
     *
     * @return Street
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @param null|string $block
     *
     * @return Street
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEntrance()
    {
        return $this->entrance;
    }

    /**
     * @param null|string $entrance
     *
     * @return Street
     */
    public function setEntrance($entrance)
    {
        $this->entrance = $entrance;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param null|string $floor
     *
     * @return Street
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * @param null|string $apartment
     *
     * @return Street
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param null|string $other
     *
     * @return Street
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }


}
