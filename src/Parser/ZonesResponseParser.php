<?php

namespace Todstoychev\Econt\Parser;

use Todstoychev\Econt\Model\Zone;
use Todstoychev\Econt\Response\ZonesResponse;

class ZonesResponseParser implements Parser
{
    public function parse(\SimpleXMLElement $xml)
    {
        $response = new ZonesResponse();

        foreach ($xml->zones->e as $zoneXml) {
            $zone = new Zone();
            $zone->setId((int) $zoneXml->id);
            $zone->setName((string)$zoneXml->name);
            $zone->setNameEnglish((string)$zoneXml->name_en);
            $zone->setNational((bool) $zoneXml->national);
            $zone->setIsEe((bool) $zoneXml->is_ee);
            $zone->setUpdatedOn(new \DateTime((string)$zoneXml->updated_time));

            $response->addZone($zone);
        }

        return $response;
    }
}
