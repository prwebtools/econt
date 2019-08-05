<?php

namespace Todstoychev\Econt\Parser;

use Todstoychev\Econt\Model\Cities;
use Todstoychev\Econt\Model\Quarter;
use Todstoychev\Econt\Response\CitiesResponse;

class CitiesResponseParser
{
	public function parse(\SimpleXMLElement $xml)
	{
		$response = new CitiesResponse();

		foreach ($xml->cities->e as $row) {
			$cities = new Cities();
			$cities->setId((int) $row->id);
			$cities->setType($row->type);
			$cities->setPostCode($row->post_code);
			$cities->setIdZone($row->id_zone);
			$cities->setName($row->name);
			$cities->setNameEnglish($row->name_en);
			$cities->setRegion($row->region);
			$cities->setRegionEnglish($row->region_en);
			$cities->setCountryId($row->id_country);
			$cities->setOfficeId($row->id_office);

			$response->addCity($cities);
		}

		return $response;
	}


}