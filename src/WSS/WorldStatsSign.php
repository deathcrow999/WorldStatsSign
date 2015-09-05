<?php
 
namespace WorldStatsSign;
 
use pocketmine\plugin\PluginBase;

 
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
