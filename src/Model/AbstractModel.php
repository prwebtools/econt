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
    public static $definedOptions = [];

    /**
     * @var array
     */
    public static $requiredOptions = [];
}