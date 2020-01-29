<?php

namespace Todstoychev\Econt\Request;

use Todstoychev\Econt\Model\Instruction;
use Todstoychev\Econt\Model\Loading;
use Todstoychev\Econt\Model\Payment;
use Todstoychev\Econt\Model\Services;

class ParcelRequest
{
    private const CALCULATION_ONLY_ENABLED = true;
    private const CALCULATION_ONLY_DISABLED = false;
    private const VALIDATION_ENABLED = true;
    private const VALIDATION_DISABLED = false;

    /**
     * @var bool дали да се прави само валидация, без да се генерират товарителници
     */
    private $validate = false;

    /**
     * @var bool прави се валидация само за ценообразуващите полета, всички останали се пропускат
     */
    private $onlyCalculate = false;

    /**
     * @var bool ако възникване на поне една грешка не се създават пратки; 1 – валидните пратки се създават, за останалите връща грешка
     */
    private $processAllParcels = false;

    /**
     * @var string|null ако е 1 параметрите за които е върната грешка се изпращат на посочения e-mail адрес
     */
    private $emailErrorsTo;

    /**
     * @var Loading[]
     */
    private $loadings = [];

    /**
     * @var Services
     */
    private $services;

    /**
     * @var Payment
     */
    private $payment;

    /**
     * @var Instruction
     */
    private $instruction;

    private $courier_only = false;

    /**
     * @return bool
     */
    public function isValidate()
    {
        return $this->validate;
    }

    /**
     * @param bool $validate
     *
     * @return ParcelRequest
     * @deprecated use enableValidation() instead
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;

        return $this;
    }

    /**
     * @return ParcelRequest
     */
    public function enableValidation()
    {
        $this->validate = self::VALIDATION_ENABLED;

        return $this;
    }

    /**
     * @return ParcelRequest
     */
    public function disableValidation()
    {
        $this->validate = self::VALIDATION_DISABLED;

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
     *
     * @return ParcelRequest
     * @deprecated use enableCalculationOnly() instead
     */
    public function setOnlyCalculate($onlyCalculate)
    {
        $this->onlyCalculate = $onlyCalculate;

        return $this;
    }

    /**
     * @return ParcelRequest
     */
    public function enableCalculationOnly()
    {
        $this->onlyCalculate = self::CALCULATION_ONLY_ENABLED;

        return $this;
    }

    /**
     * @return ParcelRequest
     */
    public function disableCalculationOnly()
    {
        $this->onlyCalculate = self::CALCULATION_ONLY_DISABLED;

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
     *
     * @return ParcelRequest
     */
    public function setProcessAllParcels($processAllParcels)
    {
        $this->processAllParcels = $processAllParcels;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmailErrorsTo()
    {
        return $this->emailErrorsTo;
    }

    /**
     * @param null|string $emailErrorsTo
     *
     * @return ParcelRequest
     */
    public function setEmailErrorsTo($emailErrorsTo)
    {
        $this->emailErrorsTo = $emailErrorsTo;

        return $this;
    }

    /**
     * @return Loading[]
     */
    public function getLoadings()
    {
        return $this->loadings;
    }

    /**
     * @param Loading[] $loadings
     *
     * @return ParcelRequest
     */
    public function setLoadings($loadings)
    {
        $this->loadings = $loadings;

        return $this;
    }

    /**
     * @param Loading $loading
     *
     * @return ParcelRequest
     */
    public function addLoading(Loading $loading)
    {
        $this->loadings[] = $loading;

        return $this;
    }

    /**
     * @return Services
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Services $services
     *
     * @return ParcelRequest
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param Payment $payment
     *
     * @return ParcelRequest
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

	/**
	 * @return Instruction
	 */
	public function getInstruction()
	{
		return $this->instruction;
	}

	/**
	 * @param Instruction $instruction
	 *
	 * @return ParcelRequest
	 */
	public function setInstruction($instruction)
	{
		$this->instruction = $instruction;

		return $this;
	}

	public function setCourierOnly(bool $bool){

		$this->courier_only = $bool;

		return $this;

	}

	public function getCourierOnly() {

		return $this->courier_only;

	}
}
