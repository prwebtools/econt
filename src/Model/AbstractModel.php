<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractModel
{
    /**
     * @var array
     */
    protected $options;

    /**
     * AbstractModel constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->configureOptions(new OptionsResolver(), $options);
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     * @return mixed
     */
    abstract protected function configureOptions(OptionsResolver $resolver, array $options = []);
}