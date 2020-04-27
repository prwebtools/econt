<?php

namespace Todstoychev\Econt\Entity;

final class Services
{
    /**
     * @var Cd
     */
    protected $cd;

    /**
     * @var Oc
     */
    protected $oc;

    protected $sms_notification = 'OFF';

    /**
     * @return Cd
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * @param Cd $cd
     * @return Services
     */
    public function setCd(Cd $cd): Services
    {
        $this->cd = $cd;
        return $this;
    }

	public function getSmsNotification() {
		return $this->sms_notification;
	}

	public function onSmsNotification() {
		$this->sms_notification = 'ON';
		return $this;
	}

    public function offSmsNotification() {
        $this->sms_notification = 'OFF';
        return $this;
    }

    public function hasCd()
    {
        return ($this->cd !== null);
    }

    /**
     * @return Oc
     */
    public function getOc(): Oc
    {
        return $this->oc;
    }

    /**
     * @param Oc $oc
     * @return Services
     */
    public function setOc(Oc $oc): Services
    {
        $this->oc = $oc;
        return $this;
    }
}
