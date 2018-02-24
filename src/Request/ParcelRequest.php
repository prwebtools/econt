<?php

namespace Todstoychev\Econt\Request;

use Todstoychev\Econt\Model\Loading;

class ParcelRequest
{
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
     */
    public function setValidate($validate)
    {
        $this->validate = $validate;

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
}
