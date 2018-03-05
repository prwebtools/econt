<?php

namespace Todstoychev\Econt\Model;

class BankDetails extends AbstractModel
{
    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $iban;

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     *
     * @return BankDetails
     */
    public function setBic($bic)
    {
        $this->bic = $bic;

        return $this;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     *
     * @return BankDetails
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }
}
