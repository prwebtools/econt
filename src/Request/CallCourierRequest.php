<?php


namespace Todstoychev\Econt\Request;


class CallCourierRequest {

	protected $address;
	protected $weight;
	protected $shipment_type;

	function setAddress(\Todstoychev\Econt\Model\CallCourier $callCourier) {

		$this->address = $callCourier;

		return $this;

	}

	function getAddress() {

		return $this->address;

	}

	function setWeight($weight) {

		$this->weight = $weight;

		return $this;

	}

	function getWeight() {

		return $this->weight;

	}

	function setShipmentType($shipment_type) {

		$this->shipment_type = $shipment_type;

		return $this;

	}

	function getShipmentType() {

		return $this->shipment_type;

	}

}
