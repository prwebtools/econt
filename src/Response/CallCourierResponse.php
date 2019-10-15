<?php


namespace Todstoychev\Econt\Response;


class CallCourierResponse {

	protected $error;
	protected $id;


	public function setError($error) {

		$this->error = (string)$error;

		return $this;

	}

	public function getError() {

		return $this->error;

	}

	public function setId($id) {

		$this->id = (string)$id;

		return $this;

	}

	public function getId() {

		return $this->id;

	}

}