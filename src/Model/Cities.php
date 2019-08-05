<?php

namespace Todstoychev\Econt\Model;

class Cities extends AbstractModel
{

	protected $id;

	protected $post_code;

	protected $type;

	protected $id_zone;

	protected $name;

	protected $name_en;

	protected $region;

	protected $region_en;

	protected $id_country;

	protected $id_office;

	function getId() {

		return $this->id;

	}

	function setId($id) {

		$this->id = $id;

		return $this;

	}

	function getPostCode() {

		return $this->post_code;

	}

	function setPostCode($post_code) {

		$this->post_code = $post_code;

		return $this;

	}

	function getType() {

		return $this->type;

	}

	function setType($type) {

		$this->type = $type;

		return $this;

	}

	function getIdZone() {

		return $this->id_zone;

	}

	function setIdZone($id_zone) {

		$this->id_zone = $id_zone;

		return $this;

	}

	function getName() {

		return $this->name;

	}

	function setName($name) {

		$this->name = $name;

		return $this;

	}

	function getNameEnglish() {

		return $this->name_en;

	}

	function setNameEnglish($name) {

		$this->name_en = $name;

		return $this;

	}

	function getRegion() {

		return $this->region;

	}

	function setRegion($region) {

		$this->region = $region;

		return $this;

	}

	function getRegionEnglish() {

		return $this->region;

	}

	function setRegionEnglish($region) {

		$this->region_en = $region;

		return $this;

	}

	function getCountryId() {

		return $this->id_country;

	}

	function setCountryId($id_country) {

		$this->id_country = $id_country;

	}

	function getOfficeId() {

		return $this->id_office;

	}

	function setOfficeId($id_office) {

		$this->id_office = $id_office;

		return $this;

	}

}
