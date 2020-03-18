<?php

namespace hmmhmmmm\boss\data\lang;

class English{

   public static function init(): array{
      return [
         "reset" => false,
         "version" => 1,
         "notfound.plugin" => "§cThis plugin will not work, Please install the plugin %1",
         "notfound.libraries" => "§cLibraries %1 not found, Please download this plugin to as .phar",
         "plugininfo.name" => "§fName plugin %1",
         "plugininfo.version" => "§fVersion %1",
         "plugininfo.author" => "§fList of creators %1",
         "plugininfo.description" => "§fDescription of the plugin. §eis a plugin free. If you redistribute it, please credit the creator. :)",
         "plugininfo.facebook" => "§fFacebook %1",
         "plugininfo.youtube" => "§fYoutube %1",
         "plugininfo.website" => "§fWebsite %1",
         "plugininfo.discord" => "§fDiscord %1",
         "boss.death.message1" => "Player §a%1 §fhas kill boss §e%2 §fand has award §b%3",
         "boss.death.message2" => "In §b%1 §fboss §e%2 §fwill respawn",
         "boss.spawn" => "Boss §e%1 [%2] §fhas spawn!",
         "boss.respawninfo" => "§b%1\n§fwill spawn in\n§a%2",
         "command.consoleError" => "§cSorry: commands can be typed only in the game.",
         "command.permissionError" => "§cSorry: You cannot type this command.",
         "command.sendHelp.empty" => "§eYou can see more commands by typing /boss help",
         "command.info.usage" => "/boss info",
         "command.info.description" => "§fCredit of the plugin creator",
         "command.help.usage" => "/boss help",
         "command.help.description" => "§fHelp",
         "command.create.usage" => "/boss create <NameTheBoss> <Monster> <Health> <Damage>",
         "command.create.description" => "§fCreate a boss",
         "command.create.error1" => "§cTry: %1",
         "command.create.error2" => "§cBoss %1 already exists",
         "command.create.error3" => "§cMonster not found %1",
         "command.create.complete" => "§aBoss %1 monster %2 create successfully",
         "command.remove.usage" => "/boss remove <BossName>",
         "command.remove.description" => "§fRemove boss",
         "command.remove.error1" => "§cTry: %1",
         "command.remove.error2" => "§cBoss not found %1",
         "command.remove.complete" => "§aBoss %1 delete successfully",
         "command.respawn.usage" => "/boss respawn <BossName>",
         "command.respawn.description" => "§fRespawn boss",
         "command.respawn.error1" => "§cTry: %1",
         "command.respawn.error2" => "§cBoss not found %1",
         "command.respawn.complete" => "§aIn %1 boss %2 will respawn",
         "command.setrespawn.usage" => "/boss setrespawn <BossName> <Time>",
         "command.setrespawn.description" => "§fSetRespawn boss",
         "command.setrespawn.error1" => "§cTry: %1",
         "command.setrespawn.error2" => "§cBoss not found %1",
         "command.setrespawn.complete" => "§aIn %1 boss %2 will respawn",
         "command.slapper_respawn.usage" => "/boss slapper_respawn <BossName>",
         "command.slapper_respawn.description" => "§fCreate Slapper Respawn Boss",
         "command.slapper_respawn.error1" => "§cTry: %1",
         "command.slapper_respawn.error2" => "§cBoss not found %1",
         "form.menu.button1" => "§aCreate a boss",
         "form.menu.button2" => "§eCreate boss-object",
         "form.create.input1" => "Name the boss",
         "form.create.input2" => "Respawn Time (second)",
         "form.create.input3" => "Death Respawn Time (second)",
         "form.create.input4" => "Health",
         "form.create.input5" => "Speed walk/fly",
         "form.create.input6" => "Scale",
         "form.create.input7" => "Min Damage",
         "form.create.input8" => "Max Damage",
         "form.create.input9" => "Message Drop",
         "form.create.input10" => "Command Drop",
         "form.create.error1" => "§cAn error has occurred\n§e<%1> Need to put",
         "form.create.error2" => "§cAn error has occurred\n§e<%1> Required and please write in numbers",
         "form.edit.button1" => "Edit boss",
         "form.edit.button2" => "Set Respawn",
         "form.edit.button3" => "Respawn",
         "form.edit.button4" => "Create Slapper Respawn",
         "form.edit.button5" => "§c[Remove boss]",
         "form.edit2.complete" => "§aBoss %1 has edit successfully",
         "form.remove.content" => "§fAre you sure? To remove boss §a%1",
         "form.remove.button1" => "§aOk",
         "form.remove.button2" => "§cCancel",
         "utils.sendtime.msgday" => "d.",
         "utils.sendtime.msghours" => "h.",
         "utils.sendtime.msgminutes" => "m.",
         "utils.sendtime.msgseconds" => "s.",
         "utils.makeslapper.complete" => "§aCreate Slapper respawn successfully"
      ];
   }
   
}