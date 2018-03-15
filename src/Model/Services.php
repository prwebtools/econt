<?php

namespace Todstoychev\Econt\Model;

class Services
{
    const CD_TYPE_GET = 'GET'; // Get price from receiver
    const CD_TYPE_GIVE = 'GIVE'; // Give price to sender

    /**
     * @var string
     */
    protected $cdType;

    /**
     * @var float
     */
    protected $price;

    /**
     * @return string
     */
    public function getCdType()
    {
        return $this->cdType;
    }

    /**
     * @param string $cdType
     *
     * @return Services
     */
    public function setCdType($cdType)
    {
        $this->cdType = $cdType;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return Services
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
