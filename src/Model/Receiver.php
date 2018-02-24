<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 6:19 PM
 */

namespace Todstoychev\Econt\Model;


class Receiver
{
    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $postCode;

    /**
     * @var string|null
     */
    private $addressZip;

    /**
     * @var string|null
     */
    private $officeCode;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $namePerson;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $quarter;

    /**
     * @var Street|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $phoneNumber;

    /**
     * @var string|null
     */
    private $smsNumber;

    /**
     * @var BankDetails|null
     */
    private $bankDetails;

    /**
     * @var string|null
     */
    private $providerId;

    /**
     * @return null|string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param null|string $countryCode
     * @return Receiver
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return Receiver
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param null|string $postCode
     * @return Receiver
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * @param null|string $addressZip
     * @return Receiver
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getOfficeCode()
    {
        return $this->officeCode;
    }

    /**
     * @param null|string $officeCode
     * @return Receiver
     */
    public function setOfficeCode($officeCode)
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return Receiver
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getNamePerson()
    {
        return $this->namePerson;
    }

    /**
     * @param null|string $namePerson
     * @return Receiver
     */
    public function setNamePerson($namePerson)
    {
        $this->namePerson = $namePerson;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return Receiver
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * @param null|string $quarter
     * @return Receiver
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
     * @return Receiver
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param null|string $phoneNumber
     * @return Receiver
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getSmsNumber()
    {
        return $this->smsNumber;
    }

    /**
     * @param null|string $smsNumber
     * @return Receiver
     */
    public function setSmsNumber($smsNumber)
    {
        $this->smsNumber = $smsNumber;

        return $this;
    }

    /**
     * @return null|BankDetails
     */
    public function getBankDetails()
    {
        return $this->bankDetails;
    }

    /**
     * @param null|BankDetails $bankDetails
     * @return Receiver
     */
    public function setBankDetails($bankDetails)
    {
        $this->bankDetails = $bankDetails;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * @param null|string $providerId
     * @return Receiver
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }
}