<?php

namespace Mohi\MohiPia\api;

class APILoader {
	public $economyAPI;
	public function __construct() {
		$this->economyAPI = new EconomyAPI();
	}
}

?>