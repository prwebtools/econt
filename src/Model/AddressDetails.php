<?php

namespace Todstoychev\Econt\Model;

class AddressDetails extends AbstractModel
{
    /**
     * @var array
     */
    public static $definedOptions = [
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
     * @var array
     */
    public static $requiredOptions = ['id_quarter', 'quarter_name', 'quarter_name_en', 'id_street'];
}