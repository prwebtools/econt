<?php

namespace Todstoychev\Econt\Model;

class CallCourier {

	protected $id_city;
	protected $post_code;
	protected $city_name;
	protected $full_address;
	protected $quarter;
	protected $street;
	protected $street_num;
	protected $street_other;
	protected $shipment_type;
	protected $weight;

	public function setIdCity($id_city) {

		$this->id_city = $id_city;

		return $this;

	}

	public function getIdCity() {

		return $this->id_city;

	}

	public function setPostCode($post_code) {

		$this->post_code = $post_code;

		return $this;

	}

	public function getPostCode() {

		return $this->post_code;

	}

	public function setCityName($city_name) {

		$this->city_name = $city_name;

		return $this;

	}

	public function getCityName() {

		return $this->city_name;

	}

	public function setFullAddress($full_address) {

		$this->full_address = $full_address;

		return $this;

	}

	public function getFullAddress() {

		return $this->full_address;

	}

	public function setStreet($street) {

		$this->street = $street;

		return $this;

	}

	public function getStreet() {

		return $this->street;

	}

	public function setStreetNum($street_num) {

		$this->street_num = $street_num;

		return $this;

	}

	public function getStreetNum() {

		return $this->street_num;

	}

	public function setStreetOther($street_other) {

		$this->street_other = $street_other;

		return $this;

	}

	public function getStreetOther() {

		return $this->street_other;

	}

	public function setShipmentType($shipment_type) {

		$this->shipment_type = $shipment_type;

		return $this;

	}

	public function getShipmentType() {

		return $this->shipment_type;

	}

	public function setWeight($weight) {

		$this->weight = $weight;

		return $this;

	}

	public function getWeight() {

		return $this->weight;

	}

}
