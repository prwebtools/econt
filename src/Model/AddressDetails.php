<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressDetails extends AbstractModel
{
    /**
     * @var array
     */
    protected $definedOptions = [
        'id_quarter' => 'integer',
        'quarter_name' => 'string',
        'quarter_name_en' => 'string',
        'id_street' => 'integer',
        'street_name' => 'string',
        'street_name_en' => 'string',
        'num' => 'string',
        'bl' => 'string',
        'vh' => 'string',
        'et' => 'integer',
        'ap' => 'string',
        'other' => 'string',
    ];

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

        $resolver->setRequired(['id_quarter', 'quarter_name', 'quarter_name_en', 'id_street']);
        $this->options = $resolver->resolve($options);
    }
}