<?php

namespace Todstoychev\Econt\Entity;

use Todstoychev\Econt\Entity\Cd\PayOptions;

final class Cd
{
    const TYPE_GET = 'GET'; // Get amount from the receiver
    const TYPE_GIVE = 'GIVE'; // Give amount to the receiver

    private $type;
    private $amount;
    private $currency;
    private $agreement_num;

    /**
     * @var PayOptions
     */
    private $pay_options;

    public function __construct(float $amount, string $currency = 'BGN')
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Cd
     */
    public function setType($type)
    {
        if (!in_array($type, [self::TYPE_GET, self::TYPE_GIVE], true)) {
            throw new InvalidArgumentException(sprintf('%s is not allowed value for %s', $type, __METHOD__));
        }

        $this->type = $type;
        return $this;
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
     * @return Cd
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
     * @return Cd
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreementNum()
    {
        return $this->agreement_num;
    }

    /**
     * @param string $agreement_num
     * @return Cd
     */
    public function setAgreementNum($agreement_num)
    {
        $this->agreement_num = $agreement_num;
        return $this;
    }

    /**
     * @return PayOptions
     */
    public function getPayOptions()
    {
        return $this->pay_options;
    }

    /**
     * @param PayOptions $pay_options
     * @return Cd
     */
    public function setPayOptions($pay_options)
    {
        $this->pay_options = $pay_options;
        return $this;
    }
}
