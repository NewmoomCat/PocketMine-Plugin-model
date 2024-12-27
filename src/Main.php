<?php

/**
 *    _______                                      ________
 *  /  ______|                                    /  ______|             __
 * |  (_____   ___  ___  _____     _____   ___ __ | |         _____   __|  |__ 
 *  \_____  \  | |  | | |  __ \   /  __ \  | |/_/ | |        / __  | |__    __|
 *  ______)  | | |__| | |  |_) | |  _____| |  |   | |______ | (__| |    |  |
 * |________/  \______/ |  ___/   \_____|  |__|   \________| \__/|_|    |__|
 *                      |__|
 * Meow!
 * 
 */

namespace MenuCat;

use time;
use json;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
implements Listener{
    public function onload(){
    }
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
    }
    public function onDisable(){
    }
}
?>