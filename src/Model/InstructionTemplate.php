<?php

namespace Todstoychev\Econt\Model;

class InstructionTemplate extends AbstractModel {

	private $type;
	private $delivery_fail_action;
	private $daysUnilReturn;

	function setType(string $type) {

		$this->type = $type;

		return $this;

	}

	function getType() {
		
		return $this->type;

	}

	function setDeliveryFailAction(string $action) {

		$this->delivery_fail_action = $action;

		return $this;

	}

	function getDeliveryFailAction() {

		return $this->delivery_fail_action;

	}
	
	function setDaysUntilReturn(int $days) {

		$this->daysUnilReturn = $days;

		return $this;

	}

	function getDaysUntilReturn() {

		return $this->daysUnilReturn;

	}

}
