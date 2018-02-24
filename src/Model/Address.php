<?php

namespace Todstoychev\Econt\Model;

class Address
{
    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string|null
     */
    private $quarter;

    /**
     * @var Street|null
     */
    private $street;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     *
     * @return Address
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * @param null|string $quarter
     *
     * @return Address
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * @return null|Street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param null|Street $street
     *
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }
}
