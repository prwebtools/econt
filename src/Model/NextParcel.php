<?php

namespace Todstoychev\Econt\Model;

class NextParcel extends AbstractModel {

	protected $num;
	protected $reason;
	protected $pdf_url;

	public function setNum(string $num) {

		$this->num = $num;

		return $this;

	}

	public function getNum() {

		return $this->num;

	}

	public function setReason($reason) {

		$this->reason = $reason;

		return $this;

	}

	public function getReason() {

		return $this->reason;

	}

	public function setPdfUrl($pdf_url) {

		$this->pdf_url = $pdf_url;

		return $this;

	}

	public function getPdfUrl() {

		return $this->pdf_url;

	}

}