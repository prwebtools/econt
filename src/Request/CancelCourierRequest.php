<?php

namespace Todstoychev\Econt\Request;

class CancelCourierRequest {

	private $courier_id;

	public function getCourierID() {

		return $this->courier_id;

	}

	public function setCourierID(string $courier_id) {

		$this->courier_id = $courier_id;

		return $this;

	}

}
