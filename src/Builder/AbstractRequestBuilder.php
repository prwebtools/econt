<?php

namespace Todstoychev\Econt\Builder;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractRequestBuilder
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var \Twig_Environment
     */
    protected $view;

    /**
     * @var array
     */
    protected $options;

    /**
     * ServiceRequestBuilder constructor.
     * @param array $config
     * @param \Twig_Environment $twig
     */
    public function __construct(array $config, \Twig_Environment $twig)
    {
        $this->config = $config;
        $this->view = $twig;
    }

    /**
     * @param array $options
     * @return mixed
     */
    abstract public function build(array $options = []);

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    abstract protected function configureOptions(OptionsResolver $resolver, array $options = []);
}