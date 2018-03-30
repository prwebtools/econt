<?php

namespace Todstoychev\Econt\Mapper;

use Symfony\Component\Serializer\Serializer;
use Todstoychev\Econt\Model\AddressDetails;
use Todstoychev\Econt\OptionsResolver\ModelOptionsResolver;

class AddressDetailsMapper
{
    /**
     * @var ModelOptionsResolver
     */
    protected $modelOptionsResolver;

    /**
     * @var Serializer
     */
    protected $serializer;

    public function __construct(ModelOptionsResolver $modelOptionsResolver, Serializer $serializer)
    {
        $this->modelOptionsResolver = $modelOptionsResolver;
        $this->modelOptionsResolver->setModelClass(AddressDetails::class);
        $this->serializer = $serializer;
    }

    public function map(\SimpleXMLElement $item)
    {
        $options = [];

        foreach (AddressDetails::$definedOptions as $name => $type) {
            $options[$name] = $item->{$name};
        }

        $options = $this->modelOptionsResolver->resolve($options);
        $options = $this->serializer->normalize($options);

        return $options;
    }
}