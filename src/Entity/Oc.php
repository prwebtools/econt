<?php

namespace Todstoychev\Econt\Entity;

final class Oc
{
    private $amount;
    private $currency;

    public function __construct(float $amount, string $currency = 'BGN')
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Oc
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Oc
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
}
