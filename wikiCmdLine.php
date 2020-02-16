<?php

// wikiCmdLine.php

include("wikiCore.php");

// --------------------------------------------------------------------------------------
// testing
// --------------------------------------------------------------------------------------

// items
// -----
//batchItems();

//list($page,$lucy_img_id) = itemPage("Steelsilk Cloak");
//list($page,$lucy_img_id) = itemPage("Claymore");
//list($page,$lucy_img_id) = itemPage("Small Lantern");
//list($page,$lucy_img_id) = itemPage("Bronze Spear");
//echo $page;

// npc
// ---
//batchNPCs();

//list($page,$npc_img_link) = npcPage("A wulfware lonewolf",false);
//list($page,$npc_img_link) = npcPage("efreeti lord djarn",false);
//list($page,$illiaImgLink) = npcPage("ambassador dvinn",false);
//list($page,$illiaImgLink) = npcPage("Kafia Ratsbone",false);
//list($page,$illiaImgLink) = npcPage("a diseased shark",false);
//echo $page;

//list($page,$name,$imglink) = npcPageByID(5086,36051);
//echo $page;

// spells
// ------
//batchSpells();

//echo spellPage("Pendril's Animation");
//echo spellPage("Emissary of Thule");
//echo spellPage("Psalm of Purity");

// faction
// -------
echo factionPage("Othmir");
//batchFactions();

// quest
// -----
//list($page,$npc_img_link) = questPage("Aenia and Behroe");
//echo $page;

// bulk edits on wiki
// ------------------
//wikiDoBulkEdit("Items","ADD_ITEM_ZONECAT","Adding zone categories to items for DynamicZoneList functionality.");
//wikiDoBulkEdit("Spells","ADD_SPELLNAME_TAG","Adding spellname tag for AuctionTracker functionality.");
//wikiDoBulkEdit("Quests","ADD_QUEST_CATS","Adding class and start zone categories to quests.");
//wikiDoBulkEdit("NPCs","LINK_NPC_FACTIONS","Linking NPC factions.");
//wikiDoBulkEdit("Factions","LINK_FACTION_NPCS","Linking all NPCs on faction pages.");
//wikiDoBulkEdit("NPCs","ADD_NPC_ZONECAT","Adding zone categories to NPCs.");
//wikiDoBulkEdit("Spells","LINK_SPELL_MERCHANTS","Linking spell where_to_obtain merchants.");
//wikiDoBulkEdit("Items","REMOVE_ITEM_SLOTS","Removing 'Slot X, Type X' labels from items.");

// local
// -----
//runRegex();
//getItemNameLen();
//parseAuctionLog();

?>