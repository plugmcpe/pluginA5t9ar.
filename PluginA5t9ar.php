<?php

namespace pluginA5t9ar;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\text Format as Color;
use pocketmine\command\Command;
use pocketmine\Command\CommandSender;

Class Mini extends PluginBase{

public function OnEnable(){
  $this->getLogger()->info(Color::GREEN."A5t9arPlugin is Enable");

public function OnDisable(){
$this->getLogger()->info(Color::RED."A5t9arPlugin is Disable");


public function OnCommand(command $sender, Command $cmd, $label, array, $args) {
     switch ($cmd->getName()) {
           case "g1"
                     
                      $sender->sendMassage(Color::YELLOW."$name your are Creative now");
                                         $sender->getPlayer->getGamemode()->setGamemode(setgamemode1)



public function OnCommand(command $sender, Command $cmd, $label, array, $args) {
      switch ($cmd->getName()) {
               case "g0"

                                     $sender->sendMassage(Color::YELLOW."$name your are Survival now");
                                                          $sender->getPlayer->getGamemode()->setGamemode(setGamemode0)


                        public function OnCommand(command $sender, Command $cmd, $label, array, $args) {
                                          switch ($cmd->getName()) {
                                                     case "g2"
                                          $sender->sendMassage(Color::YELLOW."$name your are Adv now");
                                                           $sender->getPlayer->getGamemode()->setGamemode(setGamemode2)
    


}

