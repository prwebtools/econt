<?php

namespace Todstoychev\Econt;

use GuzzleHttp\Client;
use Todstoychev\Econt\Builder\AbstractRequestBuilder;
use Todstoychev\Econt\Builder\ServiceRequestBuilder;

class HttpClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var array
     */
    protected $config;

    /**
     * HttpClient constructor.
     * @param Client $client
     * @param array $config
     */
    public function __construct(Client $client, array $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    /**
     * @param AbstractRequestBuilder $requestBuilder
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function call(AbstractRequestBuilder $requestBuilder, array $options = [])
    {
        $options = ['body' => $requestBuilder->build($options), 'headers' => ['Content-type' => 'text/xml']];
        $env = $this->config['environment'];
        $url = $this->config['environments'][$env]['parcel_request_url'];

        if ($requestBuilder instanceof ServiceRequestBuilder) {
            $url = $this->config['environments'][$env]['service_request_url'];
        }

        return $this->client->post($url, $options);
    }
}