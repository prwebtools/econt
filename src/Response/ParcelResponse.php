<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 7:24 PM
 */

namespace VM5\Econt\Response;


use VM5\Econt\Model\LoadingPrice;

class ParcelResponse
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
     * @var string|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $errorCode;

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
     * @return ParcelResponse
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
     * @return ParcelResponse
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
     * @return ParcelResponse
     */
    public function setCourierRequestId($courierRequestId)
    {
        $this->courierRequestId = $courierRequestId;

        return $this;
    }

    /**
     * @return LoadingPrice
     */
    public function getLoadingPrice(): LoadingPrice
    {
        return $this->loadingPrice;
    }

    /**
     * @param LoadingPrice $loadingPrice
     * @return ParcelResponse
     */
    public function setLoadingPrice(LoadingPrice $loadingPrice): ParcelResponse
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
     * @return ParcelResponse
     */
    public function setLoadingDiscount($loadingDiscount)
    {
        $this->loadingDiscount = $loadingDiscount;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param null|string $error
     * @return ParcelResponse
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param null|string $errorCode
     * @return ParcelResponse
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;

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
     * @return ParcelResponse
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
     * @return ParcelResponse
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
     * @return ParcelResponse
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
     * @return ParcelResponse
     */
    public function setNextParcels($nextParcels)
    {
        $this->nextParcels = $nextParcels;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate(): \DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime $deliveryDate
     * @return ParcelResponse
     */
    public function setDeliveryDate(\DateTime $deliveryDate): ParcelResponse
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }
}