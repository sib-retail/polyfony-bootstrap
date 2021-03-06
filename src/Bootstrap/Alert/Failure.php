<?php

namespace Bootstrap\Alert;

use \Polyfony\Locales as Locales;
use \Polyfony\Store\Session as Session;

class Failure extends \Bootstrap\Alert {

	public function __construct() {

		// preconfigure the alert
		$this
			->setMessage(Locales::get('Operation failed'))
			->setClass('danger');

		// if the alert is not already in the flashbag
		Session::has(self::FLASH_KEY) ?: 
			Session::put(self::FLASH_KEY, $this, true);

		// return itself
		return $this;

	}

}

?>
