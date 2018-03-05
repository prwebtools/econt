<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 6:19 PM.
 */

namespace Todstoychev\Econt\Model;

class Sender extends AbstractModel
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
     * @var bool
     */
    private $emailOnDelivery = false;

    /**
     * @return null|string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param null|string $countryCode
     *
     * @return Sender
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
     *
     * @return Sender
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
     *
     * @return Sender
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

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
     *
     * @return Sender
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
     *
     * @return Sender
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
     *
     * @return Sender
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
     *
     * @return Sender
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
     *
     * @return Sender
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
     * @return Sender
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
     *
     * @return Sender
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEmailOnDelivery()
    {
        return $this->emailOnDelivery;
    }

    /**
     * @param bool $emailOnDelivery
     *
     * @return Sender
     */
    public function setEmailOnDelivery($emailOnDelivery)
    {
        $this->emailOnDelivery = $emailOnDelivery;

        return $this;
    }
}
