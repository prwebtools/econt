<?php

require_once __DIR__.'/vendor/autoload.php';

$config = (new \Todstoychev\Econt\Builder\ConfigBuilder())->build();
$view = (new \Todstoychev\Econt\Builder\TwigBuilder())->build();
$client = new \Todstoychev\Econt\HttpClient(new \GuzzleHttp\Client(), $config);
$requestBuilder = new \Todstoychev\Econt\Builder\ServiceRequestBuilder($config, $view);
$response = $client->call($requestBuilder, ['request_type' => 'offices']);

echo $response->getBody()->getContents();
