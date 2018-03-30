<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

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

    public static $definedOptions = [
        'request_type' => 'string',
        'client' => Client::class,
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

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    protected function configureOptions(OptionsResolver $resolver, array $options = [])
    {
        $resolver->setRequired(['request_type', 'client'])
            ->setAllowedTypes('client', Client::class);
        $this->options = $resolver->resolve($options);
    }
}