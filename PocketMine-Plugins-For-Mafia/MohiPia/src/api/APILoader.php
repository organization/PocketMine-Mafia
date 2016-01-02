<?php

namespace Mohi\MohiPia\api;

class APILoader {
	public $moneyAPI;
	public function __construct() {
		$this->moneyAPI = new MyMoneyAPI();
	}
}

?>