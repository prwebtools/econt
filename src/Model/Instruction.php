<?php

namespace Todstoychev\Econt\Model;


class Instruction extends AbstractModel{

	private $template;

	public function setTemplate($template) {

		$this->template = $template;

		return $this;

	}

	public function getTemplate() {

		return $this->template;

	}

}