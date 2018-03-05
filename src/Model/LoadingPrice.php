<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 7:54 PM.
 */

namespace Todstoychev\Econt\Model;

class LoadingPrice extends AbstractModel
{
    /**
     * @var string
     */
    private $total;

    /**
     * @var string
     */
    private $senderTotal;

    /**
     * @var string
     */
    private $receiverTotal;

    /**
     * @var string
     */
    private $otherTotal;

    /**
     * @var Currency
     */
    private $currency;

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     *
     * @return LoadingPrice
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderTotal()
    {
        return $this->senderTotal;
    }

    /**
     * @param string $senderTotal
     *
     * @return LoadingPrice
     */
    public function setSenderTotal($senderTotal)
    {
        $this->senderTotal = $senderTotal;

        return $this;
    }

    /**
     * @return string
     */
    public function getReceiverTotal()
    {
        return $this->receiverTotal;
    }

    /**
     * @param string $receiverTotal
     *
     * @return LoadingPrice
     */
    public function setReceiverTotal($receiverTotal)
    {
        $this->receiverTotal = $receiverTotal;

        return $this;
    }

    /**
     * @return string
     */
    public function getOtherTotal()
    {
        return $this->otherTotal;
    }

    /**
     * @param string $otherTotal
     *
     * @return LoadingPrice
     */
    public function setOtherTotal($otherTotal)
    {
        $this->otherTotal = $otherTotal;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     *
     * @return LoadingPrice
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }
}
