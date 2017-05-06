<?php

namespace onebone\pointapi\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

use onebone\pointapi\PointAPI;

class MyStatusCommand extends Command{
	private $plugin;

	public function __construct(PointAPI $plugin){
		$desc = $plugin->getCommandMessage("mystatus");
		parent::__construct("mystatus", $desc["description"], $desc["usage"]);

		$this->setPermission("pointapi.command.mystatus");

		$this->plugin = $plugin;
	}

	public function execute(CommandSender $sender, $label, array $params){
		if(!$this->plugin->isEnabled()) return false;
		if(!$this->testPermission($sender)){
			return false;
		}

		if(!$sender instanceof Player){
			$sender->sendMessage(TextFormat::RED . "Please run this command in-game.");
			return true;
		}

		$point = $this->plugin->getAllPoint();

		$allPoint = 0;
		foreach($point as $m){
			$allPoint += $m;
		}
		$topPoint = 0;
		if($allPoint > 0){
			$topPoint = round((($point[strtolower($sender->getName())] / $allPoint) * 100), 2);
		}

		$sender->sendMessage($this->plugin->getMessage("mystatus-show", [$topPoint], $sender->getName()));
		return true;
	}
}
