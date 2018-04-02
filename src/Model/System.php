<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

final class System extends AbstractModel
{
    /**
     * @var bool
     */
    private $validate;

    /**
     * @var string
     */
    private $responseType;

    /**
     * @var bool
     */
    private $onlyCalculate;

    /**
     * @var bool
     */
    private $processAllParcels;

    /**
     * @var string
     */
    private $emailErrorsTo;

    /**
     * @var array
     */
    protected $definedOptions = [
        'validate' => 'bool',
        'response_type' => 'string',
        'only_calculate' => 'bool',
        'process_all_parcels' => 'bool',
        'email_errors_to' => 'string',
    ];

    /**
     * @return bool
     */
    public function isValidate()
    {
        return $this->validate;
    }

    /**
     * @param bool $validate
     * @return System
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     * @return System
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * @return bool
     */
    public function isOnlyCalculate()
    {
        return $this->onlyCalculate;
    }

    /**
     * @param bool $onlyCalculate
     * @return System
     */
    public function setOnlyCalculate($onlyCalculate)
    {
        $this->onlyCalculate = $onlyCalculate;

        return $this;
    }

    /**
     * @return bool
     */
    public function isProcessAllParcels()
    {
        return $this->processAllParcels;
    }

    /**
     * @param bool $processAllParcels
     * @return System
     */
    public function setProcessAllParcels($processAllParcels)
    {
        $this->processAllParcels = $processAllParcels;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailErrorsTo()
    {
        return $this->emailErrorsTo;
    }

    /**
     * @param string $emailErrorsTo
     * @return System
     */
    public function setEmailErrorsTo($emailErrorsTo)
    {
        $this->emailErrorsTo = $emailErrorsTo;

        return $this;
    }
}