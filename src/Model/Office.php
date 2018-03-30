<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Office extends AbstractModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $nameEn;

    /**
     * @var int
     */
    protected $officeCode;

    /**
     * @var bool
     */
    protected $isMachine;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var int
     */
    protected $idCity;

    /**
     * @var string
     */
    protected $postCode;

    /**
     * @var string
     */
    protected $cityName;

    /**
     * @var string
     */
    protected $cityNameEn;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var string
     */
    protected $addressEn;

    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @var AddressDetails
     */
    protected $addressDetails;

    /**
     * @var OfficeDetails
     */
    protected $officeDetails;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $workBegin;

    /**
     * @var string
     */
    protected $workEnd;

    /**
     * @var string
     */
    protected $workBeginSaturday;

    /**
     * @var string
     */
    protected $workEndSaturday;

    /**
     * @var string
     */
    protected $timePriority;

    /**
     * @var string
     */
    protected $updatedTime;

    /**
     * @var int
     */
    protected $hubCode;

    /**
     * @var string
     */
    protected $hubName;

    /**
     * @var string
     */
    protected $hubNameEn;

    /**
     * @var array
     */
    public static $definedOptions = [
        'id' => 'integer',
        'name' => 'string',
        'name_en' => 'string',
        'office_code' => 'integer',
        'is_machine' => 'boolean',
        'country_code' => 'string',
        'id_city' => 'integer',
        'post_code' => 'string',
        'city_name' => 'string',
        'city_name_en' => 'string',
        'address' => 'string',
        'address_en' => 'string',
        'latitude' => 'float',
        'longitude' => 'float',
        'address_details' => AddressDetails::class,
        'office_details' => OfficeDetails::class,
        'phone' => 'string',
        'email' => 'string',
        'work_begin' => 'string',
        'work_end' => 'string',
        'work_begin_saturday' => 'string',
        'work_end_saturday' => 'string',
        'time_priority' => 'string',
        'updated_time' => 'string',
        'hub_code' => 'string',
        'hub_name' => 'string',
        'hub_name_en' => 'string',
    ];

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
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     * @return Office
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * @return int
     */
    public function getOfficeCode()
    {
        return $this->officeCode;
    }

    /**
     * @param int $officeCode
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
    public function getIdCity()
    {
        return $this->idCity;
    }

    /**
     * @param int $idCity
     * @return Office
     */
    public function setIdCity($idCity)
    {
        $this->idCity = $idCity;

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
    public function getCityNameEn()
    {
        return $this->cityNameEn;
    }

    /**
     * @param string $cityNameEn
     * @return Office
     */
    public function setCityNameEn($cityNameEn)
    {
        $this->cityNameEn = $cityNameEn;

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
    public function getAddressEn()
    {
        return $this->addressEn;
    }

    /**
     * @param string $addressEn
     * @return Office
     */
    public function setAddressEn($addressEn)
    {
        $this->addressEn = $addressEn;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return Office
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return Office
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return AddressDetails
     */
    public function getAddressDetails()
    {
        return $this->addressDetails;
    }

    /**
     * @param AddressDetails $addressDetails
     * @return Office
     */
    public function setAddressDetails($addressDetails)
    {
        $this->addressDetails = $addressDetails;

        return $this;
    }

    /**
     * @return OfficeDetails
     */
    public function getOfficeDetails()
    {
        return $this->officeDetails;
    }

    /**
     * @param OfficeDetails $officeDetails
     * @return Office
     */
    public function setOfficeDetails($officeDetails)
    {
        $this->officeDetails = $officeDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Office
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

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
     * @return string
     */
    public function getWorkBegin()
    {
        return $this->workBegin;
    }

    /**
     * @param string $workBegin
     * @return Office
     */
    public function setWorkBegin($workBegin)
    {
        $this->workBegin = $workBegin;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkEnd()
    {
        return $this->workEnd;
    }

    /**
     * @param string $workEnd
     * @return Office
     */
    public function setWorkEnd($workEnd)
    {
        $this->workEnd = $workEnd;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkBeginSaturday()
    {
        return $this->workBeginSaturday;
    }

    /**
     * @param string $workBeginSaturday
     * @return Office
     */
    public function setWorkBeginSaturday($workBeginSaturday)
    {
        $this->workBeginSaturday = $workBeginSaturday;

        return $this;
    }

    /**
     * @return string
     */
    public function getWorkEndSaturday()
    {
        return $this->workEndSaturday;
    }

    /**
     * @param string $workEndSaturday
     * @return Office
     */
    public function setWorkEndSaturday($workEndSaturday)
    {
        $this->workEndSaturday = $workEndSaturday;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimePriority()
    {
        return $this->timePriority;
    }

    /**
     * @param string $timePriority
     * @return Office
     */
    public function setTimePriority($timePriority)
    {
        $this->timePriority = $timePriority;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    /**
     * @param string $updatedTime
     * @return Office
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getHubCode()
    {
        return $this->hubCode;
    }

    /**
     * @param int $hubCode
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
    public function getHubNameEn()
    {
        return $this->hubNameEn;
    }

    /**
     * @param string $hubNameEn
     * @return Office
     */
    public function setHubNameEn($hubNameEn)
    {
        $this->hubNameEn = $hubNameEn;

        return $this;
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    protected function configureOptions(OptionsResolver $resolver, array $options = [])
    {
        $resolver->setDefined(array_keys($this->definedOptions));

        foreach ($this->definedOptions as $name => $type) {
            $resolver->setAllowedTypes($name, $type);
        }

        $required = $this->definedOptions;
        unset($required['is_machine']);
        $resolver->setRequired($required);
        $this->options = $resolver->resolve($options);
    }
}