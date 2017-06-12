<?php

namespace VM5\Econt\Response;

use VM5\Econt\Model\Zone;

class ZonesResponse
{
    /**
     * @var Zone[]
     */
    private $zones = [];

    /**
     * @return Zone[]
     */
    public function getZones(): array
    {
        return $this->zones;
    }

    /**
     * @param Zone $zone
     * @return ZonesResponse
     */
    public function addZone(Zone $zone): ZonesResponse
    {
        $this->zones[] = $zone;

        return $this;
    }
}