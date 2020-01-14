<?php

namespace Todstoychev\Econt\Model;

class City extends AbstractModel
{
    protected $id;
    protected $post_code;
    protected $type;
    protected $name;
    protected $name_en;
    protected $region;
    protected $region_en;
    protected $zone_id;
    protected $office_id;
    protected $country_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getPostCode()
    {
        return $this->post_code;
    }

    public function setPostCode($post_code)
    {
        $this->post_code = $post_code;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getZoneId()
    {
        return $this->zone_id;
    }

    public function setZoneId($zoneId)
    {
        $this->zone_id = $zoneId;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getNameEnglish()
    {
        return $this->name_en;
    }

    public function setNameEnglish($name)
    {
        $this->name_en = $name;
        return $this;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function getRegionEnglish()
    {
        return $this->region;
    }

    public function setRegionEnglish($region)
    {
        $this->region_en = $region;
        return $this;
    }

    public function getCountryId()
    {
        return $this->country_id;
    }

    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;
        return $this;
    }

    public function getOfficeId()
    {
        return $this->office_id;
    }

    public function setOfficeId($officeId)
    {
        $this->office_id = $officeId;
        return $this;
    }
}
