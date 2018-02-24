<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/12/17
 * Time: 5:48 PM
 */

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
    public function getAddress(): AddressValidation
    {
        return $this->address;
    }

    /**
     * @param AddressValidation $address
     * @return AddressValidationResponse
     */
    public function setAddress(AddressValidation $address): AddressValidationResponse
    {
        $this->address = $address;

        return $this;
    }
}