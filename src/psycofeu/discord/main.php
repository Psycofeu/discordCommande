<?php

namespace psycofeu\discord;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;

class main extends PluginBase
{
    use SingletonTrait;
    protected function onLoad(): void
    {
        self::setInstance($this);
    }

    protected function onEnable(): void
    {
        $this->getLogger()->notice("discordCMD enable | by Psycofeu");
        $this->getServer()->getCommandMap()->register("", new discord_commande());
    }
    public function getConfigFile(): Config
    {
        return new Config($this->getDataFolder() . "config.yml", Config::YAML);
    }
}