<?php

declare(strict_types=1);

namespace RoMo\NightVision;

use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\plugin\PluginBase;

class NightVision extends PluginBase implements Listener{
    protected function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onLogin(PlayerLoginEvent $event) : void{
        $event->getPlayer()->getEffects()->add(new EffectInstance(VanillaEffects::NIGHT_VISION(), 1000000, 255, false));
    }

    public function onRespawn(PlayerRespawnEvent $event) : void{
        $event->getPlayer()->getEffects()->add(new EffectInstance(VanillaEffects::NIGHT_VISION(), 1000000, 255, false));
    }
}