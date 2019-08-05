<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\Cities;

class CitiesResponse {

	/**
	 * @var City[]
	 */
	private $cities = [];

	/**
	 * @return City[]
	 */
	public function getCities(): array
	{
		return $this->cities;
	}

	/**
	 * @param City $city
	 *
	 * @return CitysResponse
	 */
	public function addCity(Cities $city)
	{
		$this->cities[] = $city;

		return $this;
	}
	
}
