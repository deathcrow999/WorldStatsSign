<?php
 
namespace WorldStatsSign;
 
use pocketmine\plugin\PluginBase;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\utils\Config;
use pocketmine\tile\Sign;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\utils\TextFormat;

 
class Main extends PluginBase{
 
        public function onLoad(){
                $this->getLogger()->info("WorldStatsSign has been loaded");
        }
 
        public function onEnable(){
                $this->getLogger()->info("WorldStatsSign has been enabled");
                $this->getServer()->getPluginManager()->registerEvents($this,$this);
        }
 
                public function onDisable() {
                                $this->getLogger()->info("WorldStatsSign has been disabled");
        }




}

?>
