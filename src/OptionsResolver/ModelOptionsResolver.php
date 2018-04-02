<?php

namespace Todstoychev\Econt\OptionsResolver;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Todstoychev\Econt\Model\AbstractModel;

class ModelOptionsResolver extends OptionsResolver
{
    /**
     * @var AbstractModel
     */
    protected $model;

    /**
     * ModelOptionsResolver constructor.
     *
     * @param AbstractModel|null $model
     */
    public function __construct(AbstractModel $model = null)
    {
        $this->model = $model;
    }

    /**
     * @param array $options
     *
     * @return array
     */
    public function resolve(array $options = array())
    {
        $this->configureOptions();

        return parent::resolve($options);
    }

    /**
     * @return AbstractModel
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param AbstractModel $model
     *
     * @return ModelOptionsResolver
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @return $this
     */
    protected function configureOptions()
    {
        $this->setDefined(array_keys($this->model->getDefinedOptions()));
        $this->setRequired($this->model->getRequiredOptions());

        foreach ($this->model->getDefinedOptions() as $name => $type) {
            $this->setAllowedTypes($name, $type);
        }

        return $this;
    }
}
