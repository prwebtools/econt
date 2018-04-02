<?php

namespace Todstoychev\Econt\Mapper;

use Todstoychev\Econt\Exception\ModelException;
use Todstoychev\Econt\Model\AbstractModel;

class ModelMapper
{
    /**
     * @param AbstractModel $model
     * @param array $options
     * @return AbstractModel
     */
    public function map(AbstractModel $model, array $options)
    {

        foreach ($options as $field => $value) {
            $methodName = 'set'.ucfirst($field);

            if (!method_exists($model, $methodName)) {
                $class = get_class($model);

                throw new ModelException("Method {$methodName} does not exist in class {$class}!");
            }

            $model->{$methodName}($value);
        }

        return $model;
    }
}