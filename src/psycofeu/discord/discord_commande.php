<?php

namespace psycofeu\discord;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\permission\DefaultPermissions;

class discord_commande extends Command
{
    public function __construct()
    {
        parent::__construct("discord", main::getInstance()->getConfigFile()->get("discord_description"), "/discord", ["ds"]);
        $this->setPermission(DefaultPermissions::ROOT_USER);
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $sender->sendMessage(main::getInstance()->getConfigFile()->get("discord_message"));
    }
}