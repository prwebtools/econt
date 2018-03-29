<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

class OfficeDetails extends AbstractModel
{
    /**
     * @var bool
     */
    protected $courier;

    /**
     * @var bool
     */
    protected $post;

    /**
     * @var bool
     */
    protected $cargo;

    /**
     * @var bool
     */
    protected $cargoExpress;

    /**
     * @var array
     */
    protected $definedOptions = [
        'courier' => 'boolean',
        'post' => 'boolean',
        'cargo' => 'boolean',
        'cargo_express' => 'boolean',
    ];

    /**
     * @return bool
     */
    public function isCourier()
    {
        return $this->courier;
    }

    /**
     * @param bool $courier
     * @return OfficeDetails
     */
    public function setCourier($courier)
    {
        $this->courier = $courier;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPost()
    {
        return $this->post;
    }

    /**
     * @param bool $post
     * @return OfficeDetails
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCargo()
    {
        return $this->cargo;
    }

    /**
     * @param bool $cargo
     * @return OfficeDetails
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCargoExpress()
    {
        return $this->cargoExpress;
    }

    /**
     * @param bool $cargoExpress
     * @return OfficeDetails
     */
    public function setCargoExpress($cargoExpress)
    {
        $this->cargoExpress = $cargoExpress;

        return $this;
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    protected function configureOptions(OptionsResolver $resolver, array $options = [])
    {
        $resolver->setDefined(array_keys($this->definedOptions));

        foreach ($this->definedOptions as $name => $type) {
            $resolver->setAllowedTypes($name, $type);
        }

        $resolver->setRequired($this->definedOptions);
        $this->options = $resolver->resolve($options);
    }
}