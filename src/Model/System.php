<?php

namespace Todstoychev\Econt\Model;

use Symfony\Component\OptionsResolver\OptionsResolver;

final class System
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
    private $options;

    /**
     * System constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->configureOptions(new OptionsResolver(), $options);
        $this->setValidate($this->options['validate'])
            ->setEmailErrorsTo($this->options['emailErrorsTo'])
            ->setOnlyCalculate($this->options['onlyCalculate'])
            ->setProcessAllParcels($this->options['processAllParcels'])
            ->setResponseType($this->options['responseType']);
    }

    /**
     * @param OptionsResolver $resolver
     * @param array $options
     */
    private function configureOptions(OptionsResolver $resolver, array $options = [])
    {
        $resolver->setDefaults(
            [
                'validate' => true,
                'responseType' => 'XML',
                'onlyCalculate' => true,
                'processAllParcels' => true,
                'emailErrorsTo' => '',
            ]
        );
        $resolver->setAllowedTypes('validate', 'bool');
        $resolver->setAllowedTypes('responseType', 'string');
        $resolver->setAllowedValues('responseType', ['XML', 'HTML']);
        $resolver->setAllowedTypes('onlyCalculate', 'bool');
        $resolver->setAllowedTypes('processAllParcels', 'bool');
        $resolver->setAllowedTypes('emailErrorsTo', 'string');
        $this->options = $resolver->resolve($options);
    }

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