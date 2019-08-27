<?php

namespace Todstoychev\Econt\RequestBuilder;

abstract class AbstractRequestBuilder implements RequestBuilder
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param $request
     *
     * @return \SimpleXMLElement
     */
    abstract public function createSimpleXML($request);

    public function build($request)
    {
        $xml = $this->createSimpleXML($request);

        $client = $xml->addChild('client');
        $client->addChild('username', $this->username);
        $client->addChild('password', $this->password);

        return $xml->saveXML();
    }
}
