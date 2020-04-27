<?php

namespace Todstoychev\Econt\Entity;

final class Payment
{
    public const SIDE_SENDER = 'SENDER';
    public const SIDE_RECEIVER = 'RECEIVER';
    public const SIDE_OTHER = 'OTHER';
    public const METHOD_CASH = 'CASH';
    public const METHOD_CREDIT = 'CREDIT';
    public const METHOD_BONUS = 'BONUS';
    public const METHOD_VOUCHER = 'VOUCHER';

    /**
     * @var string
     */
    private $side;

    /**
     * @var string
     */
    private $method;

    /**
     * @var float
     */
    private $receiver_share_sum;

    /**
     * @var float
     */
    private $share_percent;

    /**
     * @var string
     */
    private $keyword;

    public function __construct($side, $method)
    {
        $this->setSide($side);
        $this->setMethod($method);
    }

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
        if (!in_array($side, [self::SIDE_SENDER, self::SIDE_RECEIVER, self::SIDE_OTHER])) {
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
        if (!in_array($method, [self::METHOD_CASH, self::METHOD_BONUS, self::METHOD_CREDIT, self::METHOD_VOUCHER])) {
            throw new \InvalidArgumentException(sprintf('%s is not allowed value for %s', $method, __METHOD__));
        }

        $this->method = $method;
        return $this;
    }

    /**
     * @return float
     */
    public function getSharedByReceiverSum()
    {
        return $this->receiver_share_sum;
    }

    /**
     * @param float $sum
     *
     * @return Payment
     */
    public function setSharedByReceiverSum($sum)
    {
        $this->receiver_share_sum = $sum;
        return $this;
    }

    /**
     * @return float
     */
    public function getSharedPercent()
    {
        return $this->share_percent;
    }

    /**
     * @param float $percent
     *
     * @return Payment
     */
    public function setSharedPercent($percent)
    {
        $this->share_percent = $percent;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyWord;
    }

    /**
     * @param string $keyword
     *
     * @return Payment
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }
}
