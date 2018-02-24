<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\Quarter;

class QuartersResponse
{
    /**
     * @var Quarter[]
     */
    private $quarters = [];

    /**
     * @return Quarter[]
     */
    public function getQuarters(): array
    {
        return $this->quarters;
    }

    /**
     * @param Quarter $quarter
     *
     * @return QuartersResponse
     */
    public function addQuarter(Quarter $quarter)
    {
        $this->quarters[] = $quarter;

        return $this;
    }
}
