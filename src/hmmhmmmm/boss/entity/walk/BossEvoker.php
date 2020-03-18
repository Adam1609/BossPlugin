<?php

namespace hmmhmmmm\boss\entity\walk;

use revivalpmmp\pureentities\entity\monster\walking\Evoker;
use slapper\entities\SlapperHuman;
use hmmhmmmm\boss\BossData;

use pocketmine\Player;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\entity\Creature;

class BossEvoker extends Evoker{
   public $health = 24;
   
   public function initEntity() : void{
      parent::initEntity();
      if($this->namedtag instanceof CompoundTag){
         if($this->namedtag->hasTag("Boss".$this->getName(), StringTag::class)){
            $name = $this->namedtag->getString("Boss".$this->getName());
            $minDamage = BossData::getMinDamage($name);
            $maxDamage = BossData::getMaxDamage($name);
            $this->setHealth(BossData::getHealth($name));
            $this->health = BossData::getHealth($name);
            $this->speed = BossData::getSpeed($name);
            $this->setMinDamage($minDamage);
            $this->setMaxDamage($maxDamage);
            $this->setScale(BossData::getScale($name));
         }
      }
   }
  
   public function getMaxHealth(): int{
      if($this->namedtag instanceof CompoundTag){
         if($this->namedtag->hasTag("Boss".$this->getName(), StringTag::class)){
            if(BossData::isBoss($this->namedtag->getString("Boss".$this->getName()))){
               return BossData::getHealth($this->namedtag->getString("Boss".$this->getName()));
            }else{
               return $this->health;
            }
         }else{
            return $this->health;
         }
      }else{
         return $this->health;
      }
   }
   
   public function entityBaseTick(int $tickDiff = 1): bool{
      if($this->namedtag instanceof CompoundTag){
         $hasUpdate = parent::entityBaseTick($tickDiff);
         if($this->namedtag->hasTag("Boss".$this->getName(), StringTag::class)){
            $name = $this->namedtag->getString("Boss".$this->getName());
            if(BossData::isBoss($name)){
               $this->setNameTag($name." §c(".$this->getHealth()."/".$this->getMaxHealth().")");
               $this->setNameTagAlwaysVisible(true);
               $this->setNameTagVisible(true);
               if($this->isOnFire()){
                  $this->extinguish();
               }
               return $hasUpdate;
            }else{
               return parent::entityBaseTick($tickDiff);
            }
         }else{
            return parent::entityBaseTick($tickDiff);
         }
      }else{
         return parent::entityBaseTick($tickDiff);
      }
   }
   
   public function targetOption(Creature $creature, float $distance) : bool{
      if(!($creature instanceof SlapperHuman)){
         return parent::targetOption($creature, $distance);
      }
      return false;
   }
   
}