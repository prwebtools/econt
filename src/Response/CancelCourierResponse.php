<?php

namespace Todstoychev\Econt\Response;

class CancelCourierResponse {

	private $success;
	private $error;
	private $errorCode;

	/**
	 * @return mixed
	 */
	public function getSuccess() {
		return $this->success;
	}

	/**
	 * @param mixed $result
	 */
	public function setSuccess($success) {

		$this->success = $success;

		return $this;

	}

	public function setError($error) {

		$this->error = $error;

		return $this;

	}

	public function getError() {

		return $this->error;

	}

	public function setErrorCode($errorCode) {

		$this->errorCode = $errorCode;

		return $this;

	}

	public function getErrorCode() {

		return $this->errorCode;

	}

}