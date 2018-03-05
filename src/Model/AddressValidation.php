<?php

namespace Todstoychev\Econt\Model;

class AddressValidation extends AbstractModel
{
    const STATUS_VALID = 'normal';
    const STATUS_VALID_AFTER_PROCESS = 'processed';
    const STATUS_INVALID = 'invalid';

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $postCode;

    /**
     * @var string
     */
    protected $officeCode;

    /**
     * @var string
     */
    protected $quarter;

    /**
     * @var Street|null
     */
    protected $street;

    /**
     * @var string “normal” – адреса е валиден; “processed” – адреса е валиден след обработка; “invalid” – адреса не е валиден
     */
    protected $validationStatus;

    /**
     * @var string|null – текст на грешката ако адреса не е валиден;
     */
    protected $error;

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return AddressValidation
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     *
     * @return AddressValidation
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getOfficeCode()
    {
        return $this->officeCode;
    }

    /**
     * @param string $officeCode
     *
     * @return AddressValidation
     */
    public function setOfficeCode($officeCode)
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * @param string $quarter
     *
     * @return AddressValidation
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;

        return $this;
    }

    /**
     * @return null|Street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param null|Street $street
     *
     * @return AddressValidation
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getValidationStatus()
    {
        return $this->validationStatus;
    }

    /**
     * @param string $validationStatus
     *
     * @return AddressValidation
     */
    public function setValidationStatus($validationStatus)
    {
        $this->validationStatus = $validationStatus;

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
     *
     * @return AddressValidation
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    public function isValid()
    {
        return self::STATUS_VALID == $this->getValidationStatus();
    }

    public function isValidAfterProcessed()
    {
        return self::STATUS_VALID_AFTER_PROCESS == $this->getValidationStatus();
    }

    public function isInvalid()
    {
        return self::STATUS_INVALID == $this->getValidationStatus();
    }
}
