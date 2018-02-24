<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/12/17
 * Time: 2:30 PM.
 */

namespace Todstoychev\Econt\Model;

class ParcelResult
{
    /**
     * @var string|null
     */
    private $loadingId;

    /**
     * @var string|null
     */
    private $loadingNumber;

    /**
     * @var string|null
     */
    private $courierRequestId;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var LoadingPrice
     */
    private $loadingPrice;

    /**
     * @var string|null
     */
    private $loadingDiscount;

    /**
     * @var Error|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $pdfUrl;

    /**
     * @var string|null
     */
    private $returnReason;

    /**
     * @var string|null
     */
    private $previousParcelNumber;

    /**
     * @var string|null
     */
    private $nextParcels;

    /**
     * @return null|string
     */
    public function getLoadingId()
    {
        return $this->loadingId;
    }

    /**
     * @param null|string $loadingId
     *
     * @return ParcelResult
     */
    public function setLoadingId($loadingId)
    {
        $this->loadingId = $loadingId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLoadingNumber()
    {
        return $this->loadingNumber;
    }

    /**
     * @param null|string $loadingNumber
     *
     * @return ParcelResult
     */
    public function setLoadingNumber($loadingNumber)
    {
        $this->loadingNumber = $loadingNumber;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCourierRequestId()
    {
        return $this->courierRequestId;
    }

    /**
     * @param null|string $courierRequestId
     *
     * @return ParcelResult
     */
    public function setCourierRequestId($courierRequestId)
    {
        $this->courierRequestId = $courierRequestId;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     *
     * @return ParcelResult
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return LoadingPrice
     */
    public function getLoadingPrice()
    {
        return $this->loadingPrice;
    }

    /**
     * @param LoadingPrice $loadingPrice
     *
     * @return ParcelResult
     */
    public function setLoadingPrice($loadingPrice)
    {
        $this->loadingPrice = $loadingPrice;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getLoadingDiscount()
    {
        return $this->loadingDiscount;
    }

    /**
     * @param null|string $loadingDiscount
     *
     * @return ParcelResult
     */
    public function setLoadingDiscount($loadingDiscount)
    {
        $this->loadingDiscount = $loadingDiscount;

        return $this;
    }

    /**
     * @return null|Error
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param null|Error $error
     *
     * @return ParcelResult
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPdfUrl()
    {
        return $this->pdfUrl;
    }

    /**
     * @param null|string $pdfUrl
     *
     * @return ParcelResult
     */
    public function setPdfUrl($pdfUrl)
    {
        $this->pdfUrl = $pdfUrl;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getReturnReason()
    {
        return $this->returnReason;
    }

    /**
     * @param null|string $returnReason
     *
     * @return ParcelResult
     */
    public function setReturnReason($returnReason)
    {
        $this->returnReason = $returnReason;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPreviousParcelNumber()
    {
        return $this->previousParcelNumber;
    }

    /**
     * @param null|string $previousParcelNumber
     *
     * @return ParcelResult
     */
    public function setPreviousParcelNumber($previousParcelNumber)
    {
        $this->previousParcelNumber = $previousParcelNumber;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNextParcels()
    {
        return $this->nextParcels;
    }

    /**
     * @param null|string $nextParcels
     *
     * @return ParcelResult
     */
    public function setNextParcels($nextParcels)
    {
        $this->nextParcels = $nextParcels;

        return $this;
    }
}
