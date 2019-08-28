<?php

namespace Todstoychev\Econt\RequestBuilder;

use Todstoychev\Econt\Request\AddressValidationRequest;
use Todstoychev\Econt\Request\CancelShipmentRequest;

class ServiceRequestBuilder extends AbstractRequestBuilder
{
    private $requestMapping = [
        'Todstoychev\Econt\Request\ZonesRequest' => 'cities_zones',
        'Todstoychev\Econt\Request\QuartersRequest' => 'cities_quarters',
        'Todstoychev\Econt\Request\AddressValidationRequest' => 'check_address',
        'Todstoychev\Econt\Request\OfficesRequest' => 'offices',
	    'Todstoychev\Econt\Request\CitiesRequest' => 'cities',
	    'Todstoychev\Econt\Request\CancelShipmentRequest' => 'cancel_shipments',
    ];

    public function createSimpleXML($request)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><request/>');
        $xml->addChild('request_type', $this->getRequestType($request));

        if ($request instanceof AddressValidationRequest) {
            $address = $xml->addChild('address');

            $address->addChild('city', $request->getAddress()->getCity());
            $address->addChild('post_code', $request->getAddress()->getPostCode());
            $address->addChild('quarter', $request->getAddress()->getQuarter());

            if ($request->getAddress()->getStreet()) {
                $address->addChild('street', $request->getAddress()->getStreet()->getName());
                $address->addChild('street_num', $request->getAddress()->getStreet()->getNumber());
                $address->addChild('street_bl', $request->getAddress()->getStreet()->getBlock());
                $address->addChild('street_vh', $request->getAddress()->getStreet()->getEntrance());
                $address->addChild('street_et', $request->getAddress()->getStreet()->getFloor());
                $address->addChild('street_ap', $request->getAddress()->getStreet()->getApartment());
                $address->addChild('street_other', $request->getAddress()->getStreet()->getOther());
            }
        } elseif($request instanceof CancelShipmentRequest) {

			$cancelShipment = $xml->addChild('cancel_shipments');
			$cancelShipment->addChild('num', $request->getShipmentID());

        }

        return $xml;

    }

    private function getRequestType($object)
    {
        return $this->requestMapping[get_class($object)];
    }
}
