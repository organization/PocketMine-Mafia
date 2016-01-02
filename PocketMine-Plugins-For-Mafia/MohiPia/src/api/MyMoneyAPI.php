<?php

namespace Mohi\Mohipia\api;

use Mohi\MyMoney\MyMoney;
use pocketmine\Server;

class MyMoneyAPI {
	private $plugin;
	public function __construct() {
		$this->plugin = Server::getInstance()->getPluginManager()->getPlugin("MyMoney");
	}
}

?>