<?php

namespace Todstoychev\Econt\Response;

use Todstoychev\Econt\Model\AddressValidation;

class AddressValidationResponse
{
    /**
     * @var AddressValidation
     */
    private $address;

    /**
     * @return AddressValidation
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressValidation $address
     *
     * @return AddressValidationResponse
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
}
