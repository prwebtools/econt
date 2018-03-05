<?php

namespace Todstoychev\Econt\Model;

use ReflectionClass;

abstract class AbstractModel
{
    /**
     * @return array
     *
     * @throws \ReflectionException
     */
    public function toArray()
    {
        $reflect = new ReflectionClass($this);
        $properties = $reflect->getProperties();
        $array = [];

        foreach ($properties as $property) {
            $key = $property->getName();

            if ((bool) preg_match('/^[A-Z]*$/', $property->getName(), $matches)) {
                foreach ($matches[0] as $match) {
                    $key = str_replace($match, '_'.strtolower($match), $property->getName());
                }
            }

            if ($this->{$property->getName()} instanceof \SimpleXMLElement) {
                $array[$key] = (string) $this->{$property->getName()};

                continue;
            }

            $array[$key] = $this->{$property->getName()};
        }

        return $array;
    }
}
