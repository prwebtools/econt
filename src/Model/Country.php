<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/13/17
 * Time: 3:54 PM.
 */

namespace Todstoychev\Econt\Model;

class Country extends AbstractModel
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $country_name;

    /**
     * @var string
     */
    protected $country_name_en;

    protected $id_zone;
    protected $zone_name;
    protected $zone_name_en;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Country
     */
    public function setId(int $id): Country
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->country_name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->country_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameEnglish(): string
    {
        return $this->country_name_en;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setNameEnglish(string $name): Country
    {
        $this->country_name_en = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getZoneId()
    {
        return $this->id_zone;
    }

    /**
     * @param int $zoneId
     * @return Country
     */
    public function setZoneId(int $zoneId): Country
    {
        $this->id_zone = $zoneId;
        return $this;
    }

    /**
     * @return string
     */
    public function getZoneName()
    {
        return $this->zone_name;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setZoneName($name)
    {
        $this->zone_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getZoneNameEnglish()
    {
        return $this->zone_name_en;
    }

    /**
     * @param string $name
     * @return Country
     */
    public function setZoneNameEnglish($name)
    {
        $this->zone_name_en = $name;
        return $this;
    }
}
