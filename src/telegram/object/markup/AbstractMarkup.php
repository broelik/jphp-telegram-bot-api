<?php
namespace telegram\object\markup;

class AbstractMarkup {
	/**
	 * @var array
	 */
	protected $markup = [];

	public function getMarkup(): array {
		return $this->markup;
	}
}