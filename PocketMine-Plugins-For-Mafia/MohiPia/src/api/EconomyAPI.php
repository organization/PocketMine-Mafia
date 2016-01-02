<?php

namespace Mohi\Mohipia\api;

use onebone\economyapi\EconomyAPI;
use pocketmine\Server;

class EconomyAPI {
	private $plugin;
	public function __construct() {
		$this->plugin = Server::getInstance()->getPluginManager()->getPlugin("EconomyAPI");
	}
}

?>