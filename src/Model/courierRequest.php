<?php


namespace Todstoychev\Econt\Model;


class courierRequest extends AbstractModel {

	private $only_courier_request;

	public function setOnlyCourier($bool) {

		$this->only_courier_request = true;

		return $this;

	}

	public function getOnlyCourier() {

		return $this->only_courier_request;

	}

}