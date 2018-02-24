<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/12/17
 * Time: 5:43 PM
 */

namespace Todstoychev\Econt\Request;


use Todstoychev\Econt\Model\Address;

class AddressValidationRequest
{

    /**
     * @var Address
     */
    private $address;

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return AddressValidationRequest
     */
    public function setAddress(Address $address): AddressValidationRequest
    {
        $this->address = $address;

        return $this;
    }
}