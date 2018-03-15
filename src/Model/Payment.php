<?php

namespace Todstoychev\Econt\Model;

class Payment
{
    const RECEIVER = 'RECEIVER';
    const SENDER = 'SENDER';
    const OTHER = 'OTHER';

    const CASH = 'CASH';
    const CREDIT = 'CREDIT';
    const BONUS = 'BONUS';
    const VOUCHER = 'VOUCHER';

    /**
     * @var array
     */
    protected static $sides = [
        self::RECEIVER,
        self::SENDER,
        self::OTHER,
    ];

    /**
     * @var array
     */
    protected static $methods = [
        self::CASH,
        self::CREDIT,
        self::BONUS,
        self::VOUCHER,
    ];

    /**
     * @var string
     */
    protected $side;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var float
     */
    protected $receiverShareSum;

    /**
     * @var float
     */
    protected $sharePercent;

    /**
     * @var string
     */
    protected $keyWord;

    /**
     * @return string
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * @param string $side
     *
     * @return Payment
     */
    public function setSide($side)
    {
        if (!in_array($side, self::$sides)) {
            throw new \InvalidArgumentException(sprintf('%s is not allowed value for %s', $side, __METHOD__));
        }

        $this->side = $side;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     *
     * @return Payment
     */
    public function setMethod($method)
    {
        if (!in_array($method, self::$methods)) {
            throw new \InvalidArgumentException(sprintf('%s is not allowed value for %s', $method, __METHOD__));
        }

        $this->method = $method;

        return $this;
    }

    /**
     * @return float
     */
    public function getReceiverShareSum()
    {
        return $this->receiverShareSum;
    }

    /**
     * @param float $receiverShareSum
     *
     * @return Payment
     */
    public function setReceiverShareSum($receiverShareSum)
    {
        $this->receiverShareSum = $receiverShareSum;

        return $this;
    }

    /**
     * @return float
     */
    public function getSharePercent()
    {
        return $this->sharePercent;
    }

    /**
     * @param float $sharePercent
     *
     * @return Payment
     */
    public function setSharePercent($sharePercent)
    {
        $this->sharePercent = $sharePercent;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyWord()
    {
        return $this->keyWord;
    }

    /**
     * @param string $keyWord
     *
     * @return Payment
     */
    public function setKeyWord($keyWord)
    {
        $this->keyWord = $keyWord;

        return $this;
    }
}
