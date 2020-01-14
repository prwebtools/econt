<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\City;

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
	public function addCity(City $city)
	{
		$this->cities[] = $city;

		return $this;
	}

}
