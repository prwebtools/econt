<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\Country;

class CountriesResponse
{
    /**
     * @var Country[]
     */
    private $countries = [];

    /**
     * @return Country[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param Country $country
     *
     * @return CountriesResponse
     */
    public function addCountry(Country $country)
    {
        $this->countries[] = $country;

        return $this;
    }
}
