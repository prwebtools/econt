<?php

namespace Todstoychev\Econt\Builder;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Todstoychev\Econt\Model\Client;
use Todstoychev\Econt\Model\ServiceRequest;

class ServiceRequestBuilder extends AbstractRequestBuilder
{
    /**
     * @param array $options
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function build(array $options = [])
    {
        $this->configureOptions(new OptionsResolver(), $options);
        $clientOptions = [
            'username' => $this->options['username'],
            'password' => $this->options['password'],
        ];
        $client = new Client($clientOptions);
        $request = new ServiceRequest(['request_type' => $this->options['request_type'], 'client' => $client]);

        return $this->view->render('service_request.xml.twig', ['request' => $request]);
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    protected function configureOptions(OptionsResolver $resolver, array $options = [])
    {
        $env = $this->config['environment'];
        $config = $this->config['environments'][$env];
        $resolver->setRequired(
            [
                'username',
                'password',
                'request_type',
            ]
        );
        $resolver->setDefaults(
            [
                'username' => $config['username'],
                'password' => $config['password'],
            ]
        );
        $resolver->setAllowedTypes('username', 'string')
            ->setAllowedTypes('password', 'string')
            ->setAllowedTypes('request_type', 'string');
        $this->options = $resolver->resolve($options);
    }
}