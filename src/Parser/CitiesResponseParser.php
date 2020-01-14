<?php

namespace Todstoychev\Econt\Parser;

use Todstoychev\Econt\Model\Cities;
use Todstoychev\Econt\Model\City;
use Todstoychev\Econt\Response\CitiesResponse;

class CitiesResponseParser
{
	public function parse(\SimpleXMLElement $xml)
	{
		$response = new CitiesResponse();

		foreach ($xml->cities->e as $row) {
			$city = new City();
			$city->setId((int)$row->id);
			$city->setType((string)$row->type);
			$city->setPostCode((string)$row->post_code);
            $city->setName((string)$row->name);
            $city->setNameEnglish((string)$row->name_en);
            $city->setRegion((string)$row->region);
            $city->setRegionEnglish((string)$row->region_en);
            $city->setZoneId((int)$row->id_zone);
            $city->setCountryId((int)$row->id_country);
			$city->setOfficeId((int)$row->id_office);

			$response->addCity($city);
		}

		return $response;
	}
}
