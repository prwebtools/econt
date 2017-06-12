<?php
/**
 * Created by PhpStorm.
 * User: bozhidar.hristov
 * Date: 6/9/17
 * Time: 6:58 PM
 */

namespace VM5\Econt\RequestBuilder;


use VM5\Econt\Request\ZonesRequest;

class ServiceRequestBuilder extends AbstractRequestBuilder
{
    private $requestMapping = [
        ZonesRequest::class => 'cities_zones',
    ];

    private function getRequestType($object)
    {
        return $this->requestMapping[get_class($object)];
    }

    public function createSimpleXML($request)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><request/>');
        $xml->addChild('request_type', $this->getRequestType($request));

        return $xml;
    }
}