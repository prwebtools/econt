<?php

namespace Todstoychev\Econt\Model;

class Payment
{
    const RECEIVER = 'RECEIVER';
    const SENDER = 'SENDER';
    const OTHER = 'OTHER';

    /**
     * @var array
     */
    protected static $types = [
        self::RECEIVER,
        self::SENDER,
        self::OTHER,
    ];

    /**
     * @var string
     */
    protected $type;

    /**
     * @var float
     */
    protected $sum;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Payment
     */
    public function setType($type)
    {
        if (!in_array($type, self::$types)) {
            throw new \InvalidArgumentException(sprintf('%s is not allowed value for %s', $type, __METHOD__));
        }

        $this->type = $type;

        return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @param float $sum
     *
     * @return Payment
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }
}
