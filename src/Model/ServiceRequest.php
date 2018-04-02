<?php

namespace Todstoychev\Econt\Model;

class ServiceRequest extends AbstractModel
{
    /**
     * @var string
     */
    protected $requestType;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $definedOptions = [
        'request_type' => 'string',
        'client' => Client::class,
    ];

    /**
     * @var array
     */
    protected $requiredOptions = [
        'request_type',
        'client',
    ];

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     * @return ServiceRequest
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     * @return ServiceRequest
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }
}