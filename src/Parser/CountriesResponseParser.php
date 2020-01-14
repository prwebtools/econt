<?php

namespace Todstoychev\Econt\Parser;

use Todstoychev\Econt\Model\Country;
use Todstoychev\Econt\Model\Street;
use Todstoychev\Econt\Response\CountriesResponse;

class CountriesResponseParser implements Parser
{
    public function parse(\SimpleXMLElement $xml)
    {
        $response = new CountriesResponse();

        foreach ($xml->e as $row) {
            $country = new Country();
            $country->setId((int) $row->id);
            $country->setName((string) $row->country_name);
            $country->setNameEnglish((string) $row->country_name_en);
            $country->setZoneId((string) $row->id_zone);
            $country->setZoneName((string) $row->zone_name);
            $country->setZoneNameEnglish((string) $row->zone_name_en);

            $response->addCountry($country);
        }

        return $response;
    }
}
