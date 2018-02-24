<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\ParcelResult;

class ParcelResponse
{
    /**
     * @var ParcelResult[]
     */
    private $parcelResults = [];

    /**
     * @param ParcelResult $parcelResult
     */
    public function addParcelResult(ParcelResult $parcelResult)
    {
        $this->parcelResults[] = $parcelResult;
    }

    /**
     * @return ParcelResult[]
     */
    public function getParcelResults()
    {
        return $this->parcelResults;
    }

    /**
     * @param ParcelResult[] $parcelResults
     *
     * @return ParcelResponse
     */
    public function setParcelResults(array $parcelResults)
    {
        $this->parcelResults = $parcelResults;

        return $this;
    }
}
