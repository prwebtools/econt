<?php

namespace VM5\Econt;


use VM5\Econt\Parser\AddressValidationResponseParser;
use VM5\Econt\Parser\ParcelResponseParser;
use VM5\Econt\Parser\Parser;
use VM5\Econt\Parser\QuartersResponseParser;
use VM5\Econt\Parser\ZonesResponseParser;
use VM5\Econt\Request\AddressValidationRequest;
use VM5\Econt\Request\ParcelRequest;
use VM5\Econt\Request\QuartersRequest;
use VM5\Econt\Request\ZonesRequest;
use VM5\Econt\RequestBuilder\ParcelRequestBuilder;
use VM5\Econt\RequestBuilder\RequestBuilder;
use VM5\Econt\RequestBuilder\ServiceRequestBuilder;

class Client
{
    const PARCEL = 'http://www.econt.com/e-econt/xml_parcel_import2.php';
    const SERVICE = 'https://www.econt.com/e-econt/xml_service_tool.php';
    const PARCEL_DEMO = 'http://demo.econt.com/e-econt/xml_parcel_import2.php';
    const SERVICE_DEMO = 'http://demo.econt.com/e-econt/xml_service_tool.php';

    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzle;
    private $dev = false;
    private $username;
    private $password;


    private $responseParserMapping = [
        ZonesRequest::class => ZonesResponseParser::class,
        ParcelRequest::class => ParcelResponseParser::class,
        QuartersRequest::class => QuartersResponseParser::class,
        AddressValidationRequest::class => AddressValidationResponseParser::class,
    ];
    private $requestBuilderMapping = [
        ParcelRequest::class => ParcelRequestBuilder::class,
        ZonesRequest::class => ServiceRequestBuilder::class,
        QuartersRequest::class => ServiceRequestBuilder::class,
        AddressValidationRequest::class => ServiceRequestBuilder::class,
    ];

    /**
     * @var Parser[]
     */
    private $cachedParsers = [];

    /**
     * @var RequestBuilder[]
     */
    private $cachedRequestBuilders = [];

    public function __construct(\GuzzleHttp\Client $guzzle, $dev, $username, $password)
    {
        $this->guzzle = $guzzle;
        $this->dev = $dev;
        $this->username = $username;
        $this->password = $password;
    }

    private function getEndPoint()
    {
        if (!$this->dev) {
            return self::SERVICE;
        } else {
            return self::SERVICE_DEMO;
        }
    }

    private function getParcelsEndPoint()
    {
        if (!$this->dev) {
            return self::PARCEL;
        } else {
            return self::PARCEL_DEMO;
        }
    }


    /**
     * @param $object
     * @return Parser
     */
    private function getParser($object)
    {
        $parserClass = $this->responseParserMapping[get_class($object)];

        if (!isset($this->cachedParsers[$parserClass])) {
            $this->cachedParsers[$parserClass] = new $parserClass;
        }

        return $this->cachedParsers[$parserClass];
    }

    /**
     * @param $object
     * @return RequestBuilder
     */
    private function getRequestBuilder($object)
    {
        $builderClass = $this->requestBuilderMapping[get_class($object)];

        if (!isset($this->cachedRequestBuilders[$builderClass])) {
            /** @var RequestBuilder $builder */
            $builder = new $builderClass;
            $builder->setUsername($this->username);
            $builder->setPassword($this->password);
            $this->cachedRequestBuilders[$builderClass] = $builder;
        }

        return $this->cachedRequestBuilders[$builderClass];
    }

    public function execute($request)
    {
        $xml = $this->getRequestBuilder($request)->build($request);

        if ($request instanceof ParcelRequest) {
            $endPoint = $this->getParcelsEndPoint();
        } else {
            $endPoint = $this->getEndPoint();
        }

        $response = $this->guzzle->request(
            'POST',
            $endPoint,
            [
                'form_params' => [
                    'xml' => $xml,
                ],
            ]
        );

        $responseXML = $response->getBody()->getContents();
        $responseXML = substr($responseXML, stripos($responseXML, '<?xml'));
        $responseSimpleXMLElement = new \SimpleXMLElement($responseXML);

        return $this->getParser($request)->parse($responseSimpleXMLElement);
    }

    public function executeRaw(\SimpleXMLElement $xml)
    {
        $xml->client->username = $this->username;
        $xml->client->password = $this->password;
        $xml = $xml->saveXML();

        $response = $this->guzzle->request(
            'POST',
            $this->getParcelsEndPoint(),
            [
                'form_params' => [
                    'xml' => $xml,
                ],
            ]
        );

        $responseXML = $response->getBody()->getContents();

        $xml = simplexml_load_string($responseXML, 'SimpleXMLElement', LIBXML_NOCDATA);
        $result = json_decode(json_encode((array)$xml), 1);

        return $result;
    }
}