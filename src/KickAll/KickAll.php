<?php

namespace KickAll;


use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;


class KickAll extends PluginBase
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::AQUA."by Martin77Epic enabled");
    }
    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::AQUA."by Martin77Epic enabled");
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
    {
        switch ($command->getName()){
            case "kickall":
                if ($sender->hasPermission(m77e.kickall)){
                    $sender->sendMessage(TextFormat::GREEN."Kicked all players!");
                    foreach ($this->getServer()->getOnlinePlayers() as $onlinePlayers);
                    $onlinePlayers->getServer()->getPlayer()->kick();
                    return true;


                } else {
                    $sender->sendMessage(TextFormat::RED."No Permission!");
                    return true;
                }
        }
    }

}