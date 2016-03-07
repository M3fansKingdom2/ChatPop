<?php
namespace ChatPop;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\Listener;
use pocketmine\level\sound\GhastSound;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{
    
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
public function onChat(PlayerChatEvent $e){
foreach($this->getServer()->getOnlinePlayers() as $ponl){
$ponl->getLevel()->addSound(new GhastSound($ponl->getLocation()),[$ponl], array($ponl));
}
}
}
