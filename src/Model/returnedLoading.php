<?php


namespace Todstoychev\Econt\Model;


class returnedLoading extends AbstractModel {

	protected $loadingNum;

	protected $receiverPhone;

	function setLoadingNum($loadingNum) {

		$this->loadingNum = $loadingNum;

		return $this;

	}

	function getReceiverPhone() {

		return $this->receiverPhone;

	}

	function setReceiverPhone($receiverPhone) {

		$this->receiverPhone = $receiverPhone;

		return $this;

	}

	function getLoadingNum() {

		return $this->loadingNum;

	}

}