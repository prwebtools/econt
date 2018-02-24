<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/12/17
 * Time: 5:26 PM
 */

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
     * @return QuartersResponse
     */
    public function addQuarter(Quarter $quarter): QuartersResponse
    {
        $this->quarters[] = $quarter;

        return $this;
    }
}