<?php

namespace Todstoychev\Econt\Model;

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
     * @var array
     */
    protected $requiredOptions = [];

    /**
     * @return array
     */
    public function getDefinedOptions()
    {
        return $this->definedOptions;
    }

    /**
     * @param array $definedOptions
     * @return AbstractModel
     */
    public function setDefinedOptions($definedOptions)
    {
        $this->definedOptions = $definedOptions;

        return $this;
    }

    /**
     * @return array
     */
    public function getRequiredOptions()
    {
        return $this->requiredOptions;
    }

    /**
     * @param array $requiredOptions
     * @return AbstractModel
     */
    public function setRequiredOptions($requiredOptions)
    {
        $this->requiredOptions = $requiredOptions;

        return $this;
    }
}