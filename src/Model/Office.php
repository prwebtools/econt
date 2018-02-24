<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/13/17
 * Time: 3:54 PM
 */

namespace Todstoychev\Econt\Model;


class Office
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $nameEnglish;

    /**
     * @var string
     */
    private $officeCode;

    /**
     * @var boolean
     */
    private $isMachine;

    /**
     * @var string
     */
    private $countryCode;

    /**
     * @var int
     */
    private $cityId;

    /**
     * @var string
     */
    private $postCode;

    /**
     * @var string
     */
    private $cityName;

    /**
     * @var string
     */
    private $cityNameEnglish;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $addressEnglish;

    /**
     * @var int
     */
    private $quarterId;

    /**
     * @var string
     */
    private $quarterName;

    /**
     * @var string
     */
    private $quarterNameEnglish;

    /**
     * @var int
     */
    private $streetId;

    /**
     * @var Street
     */
    private $street;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $workBegin;

    /**
     * @var \DateTime
     */
    private $workEnd;

    /**
     * @var \DateTime
     */
    private $workBeginSaturday;

    /**
     * @var \DateTime
     */
    private $workEndSaturday;

    /**
     * @var \DateTime
     */
    private $timePriority;

    /**
     * @var \DateTime
     */
    private $updatedOn;

    /**
     * @var string
     */
    private $hubCode;

    /**
     * @var string
     */
    private $hubName;

    /**
     * @var string
     */
    private $hubNameEnglish;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Office
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Office
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameEnglish()
    {
        return $this->nameEnglish;
    }

    /**
     * @param string $nameEnglish
     * @return Office
     */
    public function setNameEnglish($nameEnglish)
    {
        $this->nameEnglish = $nameEnglish;

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
     * @return Office
     */
    public function setOfficeCode($officeCode)
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMachine()
    {
        return $this->isMachine;
    }

    /**
     * @param bool $isMachine
     * @return Office
     */
    public function setIsMachine($isMachine)
    {
        $this->isMachine = $isMachine;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Office
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     * @return Office
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

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
     * @return Office
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return Office
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityNameEnglish()
    {
        return $this->cityNameEnglish;
    }

    /**
     * @param string $cityNameEnglish
     * @return Office
     */
    public function setCityNameEnglish($cityNameEnglish)
    {
        $this->cityNameEnglish = $cityNameEnglish;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Office
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressEnglish()
    {
        return $this->addressEnglish;
    }

    /**
     * @param string $addressEnglish
     * @return Office
     */
    public function setAddressEnglish($addressEnglish)
    {
        $this->addressEnglish = $addressEnglish;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuarterId()
    {
        return $this->quarterId;
    }

    /**
     * @param int $quarterId
     * @return Office
     */
    public function setQuarterId($quarterId)
    {
        $this->quarterId = $quarterId;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuarterName()
    {
        return $this->quarterName;
    }

    /**
     * @param string $quarterName
     * @return Office
     */
    public function setQuarterName($quarterName)
    {
        $this->quarterName = $quarterName;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuarterNameEnglish()
    {
        return $this->quarterNameEnglish;
    }

    /**
     * @param string $quarterNameEnglish
     * @return Office
     */
    public function setQuarterNameEnglish($quarterNameEnglish)
    {
        $this->quarterNameEnglish = $quarterNameEnglish;

        return $this;
    }

    /**
     * @return int
     */
    public function getStreetId()
    {
        return $this->streetId;
    }

    /**
     * @param int $streetId
     * @return Office
     */
    public function setStreetId($streetId)
    {
        $this->streetId = $streetId;

        return $this;
    }

    /**
     * @return Street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param Street $street
     * @return Office
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return Office
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Office
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkBegin()
    {
        return $this->workBegin;
    }

    /**
     * @param \DateTime $workBegin
     * @return Office
     */
    public function setWorkBegin($workBegin)
    {
        $this->workBegin = $workBegin;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkEnd()
    {
        return $this->workEnd;
    }

    /**
     * @param \DateTime $workEnd
     * @return Office
     */
    public function setWorkEnd($workEnd)
    {
        $this->workEnd = $workEnd;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkBeginSaturday()
    {
        return $this->workBeginSaturday;
    }

    /**
     * @param \DateTime $workBeginSaturday
     * @return Office
     */
    public function setWorkBeginSaturday($workBeginSaturday)
    {
        $this->workBeginSaturday = $workBeginSaturday;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWorkEndSaturday()
    {
        return $this->workEndSaturday;
    }

    /**
     * @param \DateTime $workEndSaturday
     * @return Office
     */
    public function setWorkEndSaturday($workEndSaturday)
    {
        $this->workEndSaturday = $workEndSaturday;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimePriority()
    {
        return $this->timePriority;
    }

    /**
     * @param \DateTime $timePriority
     * @return Office
     */
    public function setTimePriority($timePriority)
    {
        $this->timePriority = $timePriority;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param \DateTime $updatedOn
     * @return Office
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;

        return $this;
    }

    /**
     * @return string
     */
    public function getHubCode()
    {
        return $this->hubCode;
    }

    /**
     * @param string $hubCode
     * @return Office
     */
    public function setHubCode($hubCode)
    {
        $this->hubCode = $hubCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHubName()
    {
        return $this->hubName;
    }

    /**
     * @param string $hubName
     * @return Office
     */
    public function setHubName($hubName)
    {
        $this->hubName = $hubName;

        return $this;
    }

    /**
     * @return string
     */
    public function getHubNameEnglish()
    {
        return $this->hubNameEnglish;
    }

    /**
     * @param string $hubNameEnglish
     * @return Office
     */
    public function setHubNameEnglish($hubNameEnglish)
    {
        $this->hubNameEnglish = $hubNameEnglish;

        return $this;
    }
}