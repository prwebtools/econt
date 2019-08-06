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

    protected $oc;
    protected $oc_currency = 'BGN';
    protected $sms_notification;


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

    public function getOc() {

		return $this->oc;

    }

    public function setOc($value) {

		$this->oc = $value;

		return $this;

    }

	public function getOcCurrency() {

		return $this->oc_currency;

	}

	public function setOcCurrency($value) {

		$this->oc_currency = $value;

		return $this;

	}

	public function getSmsNotification() {

		return $this->sms_notification;

	}

	public function setSmsNotification(bool $status) {

		$this->oc_currency = $status;

		return $this;

	}

}
