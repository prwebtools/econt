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
     * @var array
     */
    protected $definedOptions = [];

    /**
     * AbstractModel constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->configureOptions(new OptionsResolver(), $options);

        foreach ($this->options as $name => $value) {
            $name = $this->toCamelCase($name);
            $method = 'set'.ucfirst($name);
            $this->{$method}($value);
        }
    }

    /**
     * @param bool $toSnakeCase
     * @return array
     * @throws \ReflectionException
     */
    public function toArray($toSnakeCase = false)
    {
        $reflect = new \ReflectionClass($this);
        $properties = $reflect->getProperties(\ReflectionProperty::IS_PROTECTED | \ReflectionProperty::IS_PRIVATE);
        $array = [];

        /** @var \ReflectionProperty $property */
        foreach ($properties as $property) {
            $name = $property->getName();
            $methodName = 'get'.ucfirst($name);
            $name = $toSnakeCase ? $this->toSnakeCase($name) : $name;
            $value = $this->$methodName();

            if ($value instanceof AbstractModel) {
                $value = $this->$methodName()->toArray();
            }

            $array[$name] = $value;
        }

        return $array;
    }

    /**
     * @param string $name
     * @return string
     */
    protected function toSnakeCase($name)
    {
        preg_match_all('/[A-Z]/', $name, $matches);
        $matches = \array_shift($matches);

        if (!empty($matches)) {
            /** @var string $match */
            foreach ($matches as $match) {
                $name = str_replace($match, '_'.strtolower($match), $name);
            }
        }

        return $name;
    }

    /**
     * @param string $name
     * @return string
     */
    protected function toCamelCase($name)
    {
        preg_match_all('/_[a-z]/', $name, $matches);
        $matches = \array_shift($matches);

        if (!empty($matches)) {
            /** @var string $match */
            foreach ($matches as $match) {
                $char = str_replace('_', '', $match);
                $name = str_replace($match, strtoupper($char), $name);
            }
        }

        return $name;
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     * @return mixed
     */
    abstract protected function configureOptions(OptionsResolver $resolver, array $options = []);
}