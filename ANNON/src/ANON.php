<?php
namespace ANNON\ANON

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat; 

class Main extends PluginBase implements Listener {
	public function onEnable (){
		$this->getLogger()->info("I Have Loaded Sir!");
	}
	
	
}
