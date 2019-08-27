<?php

namespace Todstoychev\Econt;

use Todstoychev\Econt\Parser\Parser;
use Todstoychev\Econt\Request\ParcelRequest;
use Todstoychev\Econt\RequestBuilder\RequestBuilder;

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

    /**
     * @var bool
     */
    private $dev = false;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var array
     */
    private $responseParserMapping = [
        'Todstoychev\Econt\Request\ZonesRequest' => 'Todstoychev\Econt\Parser\ZonesResponseParser',
        'Todstoychev\Econt\Request\ParcelRequest' => 'Todstoychev\Econt\Parser\ParcelResponseParser',
        'Todstoychev\Econt\Request\QuartersRequest' => 'Todstoychev\Econt\Parser\QuartersResponseParser',
        'Todstoychev\Econt\Request\AddressValidationRequest' => 'Todstoychev\Econt\Parser\AddressValidationResponseParser',
        'Todstoychev\Econt\Request\OfficesRequest' => 'Todstoychev\Econt\Parser\OfficeResponseParser',
	    'Todstoychev\Econt\Request\CitiesRequest' => 'Todstoychev\Econt\Parser\CitiesResponseParser',
	    'Todstoychev\Econt\Request\CancelShipmentRequest' => 'Todstoychev\Econt\Parser\CancelShipmentResponseParser',
    ];

    /**
     * @var array
     */
    private $requestBuilderMapping = [
        'Todstoychev\Econt\Request\ParcelRequest' => 'Todstoychev\Econt\RequestBuilder\ParcelRequestBuilder',
        'Todstoychev\Econt\Request\ZonesRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
        'Todstoychev\Econt\Request\QuartersRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
        'Todstoychev\Econt\Request\AddressValidationRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
        'Todstoychev\Econt\Request\OfficesRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
	    'Todstoychev\Econt\Request\CitiesRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
	    'Todstoychev\Econt\Request\CancelShipmentRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
	    'Todstoychev\Econt\Request\CancelShipmentRequest' => 'Todstoychev\Econt\RequestBuilder\ServiceRequestBuilder',
    ];

    /**
     * @var Parser[]
     */
    private $cachedParsers = [];

    /**
     * @var RequestBuilder[]
     */
    private $cachedRequestBuilders = [];

    /**
     * Client constructor.
     *
     * @param \GuzzleHttp\Client $guzzle
     * @param $dev
     * @param $username
     * @param $password
     */
    public function __construct(\GuzzleHttp\Client $guzzle, $dev, $username, $password)
    {
        $this->guzzle = $guzzle;
        $this->dev = $dev;
        $this->username = $username;
        $this->password = $password;
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
        $result = json_decode(json_encode((array) $xml), 1);

        return $result;
    }

    /**
     * @return string
     */
    private function getEndPoint()
    {
        if (!$this->dev) {
            return self::SERVICE;
        } else {
            return self::SERVICE_DEMO;
        }
    }

    /**
     * @return string
     */
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
     *
     * @return Parser
     */
    private function getParser($object)
    {
        $parserClass = $this->responseParserMapping[get_class($object)];

        if (!isset($this->cachedParsers[$parserClass])) {
            $this->cachedParsers[$parserClass] = new $parserClass();
        }

        return $this->cachedParsers[$parserClass];
    }

    /**
     * @param $object
     *
     * @return RequestBuilder
     */
    function getRequestBuilder($object)
    {
        $builderClass = $this->requestBuilderMapping[get_class($object)];

        if (!isset($this->cachedRequestBuilders[$builderClass])) {
            /** @var RequestBuilder $builder */
            $builder = new $builderClass();
            $builder->setUsername($this->username);
            $builder->setPassword($this->password);
            $this->cachedRequestBuilders[$builderClass] = $builder;
        }

        return $this->cachedRequestBuilders[$builderClass];
    }
}
