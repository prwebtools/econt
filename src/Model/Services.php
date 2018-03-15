<?php

namespace Todstoychev\Econt\Model;

class Services
{
    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     *
     * @return Services
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }
}
