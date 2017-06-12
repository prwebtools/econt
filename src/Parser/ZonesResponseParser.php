<?php

namespace VM5\Econt\Parser;

use VM5\Econt\Model\Zone;
use VM5\Econt\Response\ZonesResponse;

class ZonesResponseParser implements Parser
{

    private function getValueOf($node, $xpath, $element)
    {
        $idNode = $xpath->evaluate($node, $element);

        return $idNode->item(0)->textContent;
    }

    private function getDateTime($node, $xpath, $element)
    {
        $string = $this->getValueOf($node, $xpath, $element);

        return new \DateTime($string);
    }

    public function parse(\SimpleXMLElement $xml)
    {
        $response = new ZonesResponse();

        $xpath = new \DOMXPath($xml);


        $zonesList = $xpath->evaluate('//response/zones/e');
        foreach ($zonesList as $zoneXml) {
            /** @var \DOMElement $zoneXml */

            $zone = new Zone();
            $zone->setId((int)$this->getValueOf('id', $xpath, $zoneXml));
            $zone->setName($this->getValueOf('name', $xpath, $zoneXml));
            $zone->setNameEnglish($this->getValueOf('name_en', $xpath, $zoneXml));
            $zone->setNational((boolean)$this->getValueOf('national', $xpath, $zoneXml));
            $zone->setIsEe((boolean)$this->getValueOf('is_ee', $xpath, $zoneXml));
            $zone->setUpdatedOn($this->getDateTime('updated_time', $xpath, $zoneXml));

            $response->addZone($zone);
        }

        return $response;
    }
}