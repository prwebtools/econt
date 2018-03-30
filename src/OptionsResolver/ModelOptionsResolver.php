<?php

namespace Todstoychev\Econt\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Todstoychev\Econt\Exception\ModelException;

class ModelOptionsResolver extends OptionsResolver
{
    /**
     * @var string
     */
    protected $modelClass;

    public function __construct($modelClass)
    {
        $this->modelClass = $modelClass;
    }

    /**
     * @return string
     */
    public function getModelClass()
    {
        return $this->modelClass;
    }

    /**
     * @param string $modelClass
     * @return ModelOptionsResolver
     */
    public function setModelClass($modelClass)
    {
        $this->modelClass = $modelClass;

        return $this;
    }

    /**
     * @param array $options
     * @return array
     */
    public function resolve(array $options = array())
    {
        $this->configureOptions();

        return parent::resolve($options);
    }


    protected function configureOptions()
    {
        if (!class_exists($this->modelClass)) {
            throw new ModelException("Model {$this->modelClass} not found!");
        }

        if (!property_exists($this->modelClass, 'definedOptions')) {
            throw new ModelException("Property 'definedOptions' not found in model {$this->modelClass}!");
        }

        if (!property_exists($this->modelClass, 'requiredOptions')) {
            throw new ModelException("Property 'requiredOptions' not found in model {$this->modelClass}!");
        }

        $definedOptions = $this->modelClass::$definedOptions;
        $requiredOptions = $this->modelClass::$requiredOptions;
        $this->setDefined(array_keys($definedOptions));

        foreach ($definedOptions as $name => $type) {
            $this->setAllowedTypes($name, $type);
        }

        $this->setRequired($requiredOptions);
    }
}