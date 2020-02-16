<?php

/*************************************************

p99wiki - scraper (wikiCore.php)
Copyright (C) 2013 Dylan Nelson (dnelson@destinati.com)
last updated: Jan 2, 2013

* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, version 3. This license is available
* in its entirety at <http://www.gnu.org/licenses/>.

* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.

*************************************************/

$classicZones = array(// ANTONICA
                  "Befallen"                   => "Befallen",
                  "Blackburrow"                => "Blackburrow",
                  "Cazic-Thule"                => "Cazic Thule",
                  "Clan RunnyEye"              => "Clan Runnyeye",
                  "Commonlands"                => "Commonlands",
                  "East Commonlands"           => "East Commonlands",
                  "East Freeport"              => "Freeport",
                  "East Karana"                => "Eastern Plains of Karana",
                  "Erud's Crossing"            => "Erud's Crossing",
                  "Everfrost Peaks"            => "Everfrost Peaks",
                  "Gorge of King Xorbb (Beholder's Maze)" => "Beholder's Maze",
                  "Grobb"                      => "Grobb",
                  "Halas"                      => "Halas",
                  "High Keep"                  => "Highpass Keep",
                  "Highpass Hold"              => "Highpass Hold",
                  "Innothule Swamp"            => "Innothule Swamp",
                  "Kithicor Forest"            => "Kithicor Forest",
                  "Lair of the Splitpaw"       => "Splitpaw Lair",
                  "Lake Rathetear"             => "Lake Rathetear",
                  "Lavastorm Mountains"        => "Lavastorm Mountains",
                  "Lower Guk"                  => "Lower Guk",
                  "Misty Thicket"              => "Misty Thicket",
                  "Mountains of Rathe"         => "Rathe Mountains",
                  "Nagafen's Lair (Solusek B)" => "Nagafen's Lair",
                  "Najena"                     => "Najena",
                  "Nektulos Forest"            => "Nektulos Forest",
                  "Neriak Commons"             => "Neriak",
                  "Neriak Foreign Quarter"     => "Neriak",
                  "Neriak Third Gate"          => "Neriak",
                  "North Freeport"             => "Freeport",
                  "North Karana"               => "Northern Karana",
                  "North Qeynos"               => "Qeynos",
                  "North Ro"                   => "Northern Desert of Ro",
                  "Oasis of Marr"              => "Oasis of Marr",
                  "Ocean of Tears"             => "Ocean of Tears",
                  "Oggok"                      => "Oggok",
                  "Permafrost Keep"            => "Permafrost",
                  "Qeynos Catacombs"           => "Qeynos Aqueducts",
                  "Qeynos Hills"               => "Qeynos Hills",
                  "Rivervale"                  => "Rivervale",
                  "Solusek's Eye (Solusek A)"  => "Solusek's Eye",
                  "South Karana"               => "Southern Karana",
                  "South Qeynos"               => "Qeynos",
                  "South Ro"                   => "Southern Desert of Ro",
                  "Surefall Glade"             => "Surefall Glade",
                  "Temple of Solusek Ro"       => "Temple of Solusek Ro",
                  "The Arena"                  => "The Arena",
                  "The Feerrott"               => "The Feerrott",
                  "Upper Guk"                  => "Upper Guk",
                  "West Commonlands"           => "West Commonlands",
                  "West Freeport"              => "Freeport",
                  "West Karana"                => "Western Plains of Karana",
                  
                  // ODUS
                  "Erudin"                          => "Erudin",
                  "Erudin Palace"                   => "Erudin",
                  "Kerra Isle"                      => "Kerra Island",
                  "Paineel"                         => "Paineel",
                  "Toxxulia Forest"                 => "Toxxulia Forest",
                  
                  // FAYDWER
                  "Ak'Anon"                => "Ak'Anon",
                  "Butcherblock Mountains" => "Butcherblock Mountains",
                  "Castle Mistmoore"       => "Mistmoore Castle",
                  "Crushbone"              => "Crushbone",
                  "Dagnor's Cauldron"      => "Dagnor's Cauldron",
                  "Estate of Unrest"       => "The Estate of Unrest",
                  "Greater Faydark"        => "Greater Faydark",
                  "Kedge Keep"             => "Kedge Keep",
                  "Lesser Faydark"         => "Lesser Faydark",
                  "North Kaladim"          => "Kaladim",
                  "Northern Felwithe"      => "Felwithe",
                  "South Kaladim"          => "Kaladim",
                  "Southern Felwithe"      => "Felwithe",
                  "Steamfont Mountains"    => "Steamfont Mountains",
                  
                  // PLANES
                  "Plane of Fear"          => "Plane of Fear",
                  "Plane of Hate"          => "Plane of Hate",
                  "Plane of Sky"           => "Plane of Sky"
                  );
                  
$kunarkZones = array("Burning Woods"             => "Burning Woods",
                     "Chardok"                   => "Chardok",
                     "City of Mist"              => "City of Mist",
                     "Crypt of Dalnir"           => "Crypt of Dalnir",
                     "Dreadlands"                => "Dreadlands",
                     "East Cabilis"              => "Cabilis",
                     "Emerald Jungle"            => "Emerald Jungle",
                     "Field of Bone"             => "Field of Bone",
                     "Firiona Vie"               => "Firiona Vie",
                     "Frontier Mountains"        => "Frontier Mountains",
                     "Howling Stones (Charasis)" => "Howling Stones",
                     "Kaesora"                   => "Kaesora",
                     "Karnor's Castle"           => "Karnor's Castle",
                     "Kurn's Tower"              => "Kurn's Tower",
                     "Lake of Ill Omen"          => "Lake of Ill Omen",
                     "Mines of Nurga"            => "Mines of Nurga",
                     "Old Sebilis"               => "Old Sebilis",
                     "Skyfire Mountains"         => "Skyfire Mountains",
                     "Swamp of No Hope"          => "Swamp of No Hope",
                     "Temple of Droga"           => "Temple of Droga",
                     "The Overthere"             => "The Overthere",
                     "Timorous Deep"             => "Timorous Deep",
                     "Trakanon's Teeth"          => "Trakanon's Teeth",
                     "Veeshan's Peak"            => "Veeshan's Peak",
                     "Warsliks Wood"             => "Warsliks Woods",
                     "West Cabilis"              => "Cabilis",
                     "Ruins of Old Paineel (The Hole)" => "The Hole", // Odus, post-Kunark
                     );
                     
$veliousZones = array("Cobalt Scar"                      => "Cobalt Scar",
                      "Crystal Caverns"                  => "Crystal Caverns",
                      "Dragon Necropolis"                => "Dragon Necropolis",
                      "Eastern Wastes"                   => "Eastern Wastes",
                      "Great Divide"                     => "Great Divide",
                      "Iceclad Ocean"                    => "Iceclad Ocean",
                      "Icewell Keep"                     => "Icewell Keep",
                      "Kael Drakkel"                     => "Kael Drakkel",
                      "Kerafyrm's Lair (Sleeper's Tomb)" => "Kerafyrm's Lair",
                      "Plane of Growth"                  => "Plane of Growth",
                      "Plane of Mischief"                => "Plane of Mischief",
                      "Siren's Grotto"                   => "Siren's Grotto",
                      "Skyshrine"                        => "Skyshrine",
                      "Temple of Veeshan"                => "Temple of Veeshan",
                      "The Wakening Land"                => "The Wakening Land",
                      "Thurgadin"                        => "Thurgadin",
                      "Tower of Frozen Shadow"           => "Tower of Frozen Shadow",
                      "Velketor's Labyrinth"             => "Velketor's Labyrinth",
                      "Western Wastes"                   => "Western Wastes",
                      "Stonebrunt Mountains"            => "Stonebrunt Mountains", // Odus, post-Velious
                      "The Warrens"                     => "The Warrens", // Odus, post-velious
                      "The Jaggedpine Forest"           => "Jaggedpine Forest", //Antonica, post-velious
                      );
                      
$emuZoneNames = array("BlackBurrow"             => "Blackburrow", //"oldblackburrow"
                      "Bloody Kithicor"         => "Kithicor Forest", //"oldkithicor"
                      "Cabilis East"            => "East Cabilis",
                      "Cabilis West"            => "West Cabilis",
                      "Cobaltscar"              => "Cobalt Scar", 
                      "Gorge of King Xorbb"     => "Beholder's Maze",
                      "HighKeep"                => "High Keep",
                      "Neriak - 3rd Gate"       => "Neriak Third Gate",
                      "Neriak - Commons"        => "Neriak Commons",
                      "Neriak - Foreign Quarter" => "Neriak Foreign Quarter",
                      "North Desert of Ro"      => "North Ro", //new?
                      "South Desert of Ro"      => "South Ro", //new?
                      "The Castle of Mistmoore" => "Mistmoore Castle",
                      "The Ruins of Sebilis"    => "Old Sebilis",
                      "The Burning Wood"        => "Burning Woods",
                      "The City of Thurgadin"   => "Thurgadin",
                      "The Crypt of Dalnir"     => "Dalnir",
                      "The Permafrost Caverns"  => "Permafrost",
		      "The Ruins of Old Guk"    => "Lower Guk");
                      
$crysZones = array("Felwithe"          => "Felwithe",
                   "Neriak - 3rd Gate" => "Neriak",
                   "Neriak - Commons"  => "Neriak",
                   "Northern Plains of Karana" => "Northern Karana");
                   
$multiZones = array("Freeport", "Felwithe", "Neriak", "Kaladim", "Qeynos", "Erudin", "Cabilis");

$classNames = array('BRD' => 'Bard',
                    'CLR' => 'Cleric',
                    'DRU' => 'Druid',
                    'ENC' => 'Enchanter',
                    'MAG' => 'Magician',
                    'MNK' => 'Monk',
                    'NEC' => 'Necromancer',
                    'PAL' => 'Paladin',
                    'RNG' => 'Ranger',
                    'ROG' => 'Rogue',
                    'SHM' => 'Shaman',
                    'SHD' => 'Shadow Knight',
                    'WAR' => 'Warrior',
                    'WIZ' => 'Wizard');
                    
$raceNames = array('BAR' => 'Barbarian',
                   'ELF' => 'Wood Elf',
                   'ERU' => 'Erudite',
                   'HIE' => 'High Elf',
                   'DEF' => 'Dark Elf',
                   'DWF' => 'Dwarf',
                   'HEF' => 'Half Elf',
                   'HFL' => 'Halfling',
                   'HUM' => 'Human',
                   'GNM' => 'Gnome',
                   'IKS' => 'Iksar',
                   'OGR' => 'Ogre',
                   'TRL' => 'Troll');
                    
$slotNames = array('ARMS'      => 'Arms',
                   'BACK'      => 'Back',
                   'CHEST'     => 'Chest',
                   'EAR'       => 'Ear',
                   'FACE'      => 'Face',
                   'FEET'      => 'Feet',
                   'FINGER'    => 'Fingers',
                   'HANDS'     => 'Hands',
                   'HEAD'      => 'Head',
                   'LEGS'      => 'Legs',
                   'NECK'      => 'Neck',
                   'SHOULDERS' => 'Shoulders',
                   'WAIST'     => 'Waist',
                   'WRIST'     => 'Wrist',
                   'PRIMARY'   => 'Primary',
                   'SECONDARY' => 'Secondary',
                   'RANGE'     => 'Range',
                   'AMMO'      => 'Ammo');
                   
$skillNames = array('1H Blunt',
                    '2H Blunt',
                    '1H Slashing',
                    '2H Slashing',
                    'Piercing',
                    '2H Piercing',
                    'Hand to Hand',
                    'Archery',
                    'Throwing');
                    
$bardInstrumentNames = array('Percussion Instrument', //btw slot and stats/wt
                             'Stringed Instrument',
                             'Wind Instrument',
                             'Brass Instrument',
                             'Singing',
                             'All Instrument Types');
                             
$craftStrings = array("Formerly crafted via alchemy."        => "Alchemy",
                      "Formerly crafted via jewelcraft."     => "Jewelcrafting",
                      "Formerly crafted via jewelry making." => "Jewelcrafting",
                      "Formerly crafted via research."       => "Research",
                      "Formerly crafted via smithing."       => "Blacksmithing",
                      "Formerly crafted via baking."         => "Baking",
                      "Formerly crafted via brewing."        => "Brewing"
                      );
                      
$craftNames = array("Research"       => "Research",
                    "Tailoring"      => "Tailoring",
                    "Smithing"       => "Blacksmithing",
                    "Alchemy"        => "Alchemy",
                    "Baking"         => "Baking",
                    "Jewelcraft"     => "Jewelcrafting",
                    "Brewing"        => "Brewing",
                    "Fletching"      => "Fletching",
                    "Poisonmaking"   => "Poison Making",
                    "Pottery"        => "Pottery",
                    "Tinkering"      => "Tinkering",
                    "Non-Tradeskill" => "Non-Tradeskill",
                    "Fishing"        => "Fishing");
                    
$emuCraftNames = array("Alchemy"        => "Alchemy",
                       "Baking"         => "Baking",
                       "Blacksmithing"  => "Blacksmithing",
                       "Brewing"        => "Brewing",
                       "Fishing"        => "Fishing",
                       "Fletching"      => "Fletching",
                       "Jewelry_making" => "Jewelcrafting",
                       "Poison_making"  => "Poison Making",
                       "Pottery"        => "Pottery",
                       "Research"       => "Research",
                       "Tailoring"      => "Tailoring",
                       "Tinkering"      => "Tinkering");
											 
$craftContainers = array("Alchemy"      => "Medicine Bag",
                         "Smithing"     => "Forge",
			"Tailoring"    => "Sewing Kit",
			"Tailoring"    => "Loom",
			"Baking"       => "Oven",
			"Jewelcraft"   => "Jeweler's Kit",
			"Brewing"      => "Brew Barrel",
			"Fletching"    => "Fletching Kit",
			"Poisonmaking" => "Mortar and Pestle",
			"Pottery"      => "Kiln",
			"Pottery"      => "Pottery Wheel",
			"Tinkering"    => "Toolboxes");
                    
$questNamesMulti = array("\(Badge #"                              => "Qeynos Badge Quests",
                         "Symbol of Cazic Thule"                  => "Cazic Thule Symbol Quests",
                         "Innoruuk (.*?)"                         => "Innoruuk Symbol Quests",
                         "Tribunal (.*?)"                         => "Tribunal Symbol Quests",
                         "Tunare (.*?)"                           => "Tunare Symbol Quests",
                         "Symbol of Rallos Zek"                   => "Rallos Zek Symbol Quests",
                         "Bertoxxulous (.*?)"                     => "Bertoxxulous Symbol Quests",
                         "Brell Serilis (.*?)"                    => "Brell Serilis Symbol Quests",
                         "Necromancer (.*?) Rank"                 => "Necromancer Skullcap Quests",
                         "(Black|Blue|Orange|Purple|Red|White|Yellow) Sash" => "Monk Sash Quests",
                         "Monk (.*?) Headband"                    => "Monk Headband Quests",
                         "Shackle of (.*?)"                       => "Monk Shackle Quests",
                         "Crusader's Test of"                     => "Crusader's Tests",
                         "Crusaders of Greenmist"                 => "Crusader's Tests",
                         "Warrior Pike #(.*?)"                    => "Warrior Pike Quests",
                         "Shaman Skull Quest (.*?)"               => "Shaman Skull Quests",
                         "Coldain Ring #(.*?)"                    => "Coldain Ring Quests",
                         "Coldain Shawl #(.*?)"                   => "Coldain Prayer Shawl Quests",
                         "Incandescent (.*?)"                     => "Incandescent Armor Quests",
                         "Ivy Etched (.*?)"                       => "Ivy Etched Armor Quests",
                         "Crafted (.*?)"                          => "Crafted Armor Quests",
                         "Chestplate of the Constant"             => "Armor of the Priest Quests",
                         "Greaves of the Penitent"                => "Armor of the Priest Quests",
                         "Vambraces of the Fervent"               => "Armor of the Priest Quests",
                         "Gauntlets of the Ardent"                => "Armor of the Priest Quests",
                         "Boots of the Reliant"                   => "Armor of the Priest Quests",
                         "Bracers of the Reverent"                => "Armor of the Priest Quests",    
                         "(.*?) of Ro"                            => "Armor of Ro Quests",
                         "Darkforge (.*?)"                        => "Darkforge Armor Quests",
                         "Totemic (.*?)"                          => "Totemic Armor Quests",
                         "ShadowBound (.*?)"                      => "Shadowbound Armor Quests",
                         "Shadowbound (.*?)"                      => "Shadowbound Armor Quests",
                         "Robe of Enshroudment"                   => "Shadowbound Armor Quests",
                         "Trooper Scale (.*?)"                    => "Trooper Scale Armor Quests",
                         "Dreadscale (.*?)"                       => "Dreadscale Armor Quests",
                         "Scaled Mystic (.*?)"                    => "Scaled Mystic Armor Quests",       
                         "Bard Lambent"                           => "Lambent Armor Quests",
                         "Going Postal (.*?)"                     => "Going Postal");
                 
$questNamesSingle = array("Bone Chips (Qeynos)"                    => "Bone Chips Qeynos",
                          "Bone Chips (Kaladim)"                   => "Bone Chips Kaladim",
                          "Bone Chips (Felwithe)"                  => "Bone Chips Felwithe",
                          "Zimel's Blades (Quest for SoulFire)"    => "Zimel's Blades (SoulFire)",
                          "Brain Bite (Firiona Vie)"               => "Brain Bite (Good)",
                          "Brain Bite (The Overthere)"             => "Brain Bite (Evil)",
                          "Illusion: Iksar"                        => "Illusion: Iksar Quest",
                          "Call of Flames"                         => "Call of Flame Quest");
                           
$factionNames = array("Kerra Island"     => "Kerra Island (Faction)",
                      "Mayong Mistmoore" => "Mayong Mistmoore (Faction)",
                      "King Xorbb"       => "King Xorbb (Faction)",
                      "Rallos Zek"       => "Rallos Zek (Faction)",
                      "Veeshan"          => "Veeshan (Faction)",
                      "Karana"           => "Karana (Faction)",
                      "Evil Eye"         => "Evil Eye (Faction)",
                      "Lizard Man"       => "Lizard Man (Faction)",
                      "Pixie"            => "Pixie (Faction)",
                      "Trakanon"         => "Trakanon (Faction)",
                      "Drusella Sathir"  => "Drusella Sathir (Faction)",
		      "Venril Sathir"    => "Venril Sathir (Faction)",
                      "Najena"           => "Najena (Faction)",
                      "Clan Runnyeye"    => "Clan Runnyeye (Faction)",
                      "Goblin"           => "Goblin (Faction)", // TODO: OVERZEALOUS PROBLEM (check all links)
                      "Orc"              => "Orc (Faction)",
                      "Temple of Solusek Ro"    => "Temple Of Sol Ro",
                      "Temple of Sol Ro"        => "Temple Of Sol Ro",
                      "Phinigel Autropos"       => "Phinigel Autropos (Faction)",
                      "Coalition of Trade Folk" => "Coalition of Tradefolk",
                      "Faydark's Champions"     => "Faydarks Champions",
                      "Anti-mage"               => "Anti-Mage",
                      "Circle of Unseen Hands"  => "Circle Of Unseen Hands",
                      "Bloodsabres"             => "Bloodsabers",
		      "Da Bashers"              => "DaBashers",
		      //VELIOUS
		      "King Tormax"             => "King Tormax (Faction)",
		      "Dain Frostreaver IV"     => "Dain Frostreaver IV (Faction)",
		      "Zlandicar"               => "Zlandicar (Faction)"		      
		      );
                             
$skipIDs = array(30361,  // Blue Diamond Electrum Earring [non-enchanted]
                 30362,  // Golden Blue Diamond Pendant (non-enchanted)
                 30363,  // Platinum Blue Diamond Tiara (non-enchanted)
                 6359,   // Stein of Moggok (new)
                 50906,  // Djarn's Amethyst Ring (new)
                 1683,   // Celestial Fists (wrong, not epic)
                 13935,  // wrong Squad Ring
		 13089,  // wrong Cup of Flour
                 17832,  // Karana's Tear (PoP)
		 10037,  // Diamond (quest)
                 );
                 
$skipNPCIDs = array(14160,   //ancient cyclops with no spawn points
                    88010,   //guardian of Xalgoz (want Xalgoz)
                    88013,   //...
                    102099,  //Venril Sathir remains
                    83240,    //"Old Hangman"
			  2906,2907,2115,3932,6084 //,34107,68150 //bad results for "Kif"
                    );
                 
$flagExclusionList = array('Flurry',
                           'Rampage',
                           'See Invis Undead',
                           'Findable',
                           'Trackable');

$idCutoffs = array("Zone"     => 125,    //+157 (Jaggedpine Forest) +286 (Southern Felwithe) //alla IDs
                   "NPC"      => 7101,
                   "NPCSafe"  => 23000,
                   "Quest"    => 1295,   //+4251 (Tormax's Head - Dwarves)
                   "QuestVel" => 815,    //rough kun-vel transition
                   "Item"     => 7089,
                   "Faction"  => 225,    //+275
                   "ItemSafe" => 24000,  //safe estimate, better than nothing
                   "Recipe"   => 0); 
			 
$itemIDOk = array(62737,62738,62739,62739,62740,62741,62742,62743,62744,62745,62746, //Small Plate/Steel
			54127,56140); //Small Plate/Steel

// --------------------------------------------------------------------------------------
// item - lucy
// --------------------------------------------------------------------------------------

function getItemNameLen()
{
    $itemlistFile = "itemlist.txt";
		$maxLen = 0;
		
    $lines = file($itemlistFile);
		
		foreach ($lines as $line) {
        $tLine = explode(",",$line);
        //check for comma in name
        if (count($tLine) == 4) {
            $tLine = array($tLine[0],$tLine[1] . "," . $tLine[2],$tLine[3]);
        }        
        
        if (count($tLine) == 3) {
						$lucyID   = $tLine[0];
						$lucyName = $tLine[1];
							
            if (substr($tLine[1],0,1) == "\"") {
              $lucyID   = $tLine[0];
              $lucyName = substr($tLine[1],1,-1);
            }


        }
				$len = strlen($lucyName);
				if ($len > $maxLen) {
						$maxLen = $len;
						print $maxLen . " - " . $lucyName . "\n";
				}
		}
		
		print "\nmaxLen: $maxLen\n\n";
}

function getLucyID($targetItem)
{                     
    global $skipIDs;

    $itemlistFile = "itemlist.txt";
    $lucyID = 0;
    
    $lines = file($itemlistFile);
    
    foreach ($lines as $line)
    {
        $tLine = explode(",",$line);
        
        //check for comma in name
        if (count($tLine) == 4) {
            $tLine = array($tLine[0],$tLine[1] . "," . $tLine[2],$tLine[3]);
            //echo $tLine[0] . "_" . $tLine[1] . "_" . $tLine[2] . "\n";
        }        
        
        if (count($tLine) == 3) {
            // bad IDs for identically named items (jewelry)
            if (in_array($tLine[0],$skipIDs)) {
                continue;
            }
            if (strcasecmp(substr($tLine[1],1,-1),$targetItem) == 0) {
              $lucyID   = $tLine[0];
              $lucyName = substr($tLine[1],1,-1);
              return array($lucyID,$lucyName);
            }
            if (strcasecmp($tLine[1],$targetItem) == 0) {
              $lucyID   = $tLine[0];
              $lucyName = $tLine[1];
              return array($lucyID,$lucyName);
            }
        }

    }
    
    return 0;
}

function getLucyHTML($itemName)
{
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";
    
    // get lucy cookie
    $lucyAddress = "http://lucy.allakhazam.com/index.html?setcookie=1";
    $ch = curl_init($lucyAddress);
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieJar);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    $lucyHTML = curl_exec($ch);
		
    // load lucy webpage
    list($lucyID,$lucyName) = getLucyID($itemName);
    $lucyAddress = "http://lucy.allakhazam.com/item.html?id=" . $lucyID . "&setcookie=1";
    
    if (!$lucyID) {
      //echo "Skipping: [" . $itemName . "] (no Lucy ID).\n";
      $fSkip = fopen("items.skip.txt",'a');
      fwrite($fSkip,"# $itemName ?(1 links)\n");
      fclose($fSkip);
      return 0;
    } else {
      $padStr = str_pad(" ",30-strlen($itemName));
      echo "(" . $itemName . ") $padStr Lucy ID: " . $lucyID . "  <br>\n";
    }
    
    print "http://lucy.allakhazam.com/item.html?id=" . $lucyID . "  <br>\n";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$lucyAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $lucyHTML = curl_exec($ch);
		
    if (!$lucyHTML) {
    	return 0;
    }

    return $lucyHTML;
}

function getLucyImgID($lucyHTML) {
    // extract
    $statBlockStart = "src=\"http:\/\/everquest.allakhazam.com\/pgfx\/item_";
    $statBlockEnd   = ".png";
    $regex = '/' . $statBlockStart . '(.*?)' . $statBlockEnd . '/s';
    
    $ret = preg_match($regex, $lucyHTML, $lucyImgID);
    
    if ($ret) {
        return $lucyImgID[1];
    } else {
        return 0;
    }
}

function getStatBlock($lucyHTML) {
    // extract
    $statBlockStart = "class=\"shotdata\" valign=\"top\">";
    $statBlockEnd   = "<\/td><\/tr>";
    $regex = '/' . $statBlockStart . '(.*?)' . $statBlockEnd . '/s';
    
    $ret = preg_match($regex, $lucyHTML, $statBlock);
    
    // format
    $statBlock = preg_replace("{(<br[^>]*>\s*)+}","<br>\n",$statBlock);
    $statBlock = strip_tags($statBlock[1],"<br>");
    
    $statBlock = str_replace("This item can be used in tradeskills.<br>\n","",$statBlock);
    
    // revert non-classic tags
    $statBlock = str_replace("NO TRADE","NO DROP",$statBlock);
    $statBlock = str_replace("PLACEABLE","",$statBlock);
    
    if (substr($statBlock,0,8) == "\n  <br>\n") {
        $statBlock = substr($statBlock,8);
    }
    
    // non classic races and classes
    $statBlock = str_replace(" BER","",$statBlock);
    $statBlock = str_replace(" BST","",$statBlock);
    
    $statBlock = str_replace(" FRG","",$statBlock);
    $statBlock = str_replace(" DRK","",$statBlock);
    $statBlock = str_replace(" VAH","",$statBlock);    
    
    // non classic stats
    $statBlock = preg_replace("/ Dmg Bonus: [0-9]{1,3}/","",$statBlock);
    $statBlock = preg_replace("/Backstab DMG: [0-9]{1,3}<br>\n/","",$statBlock);
    $statBlock = preg_replace("/Focus: (.*?)<br>\n/","",$statBlock);
    $statBlock = preg_replace("/  ENDUR: (.*?)<br>\n/","<br>\n",$statBlock);
    
    // non classic additional info
    $statBlock = preg_replace("/Slot (.*?), Type (.*?)<br>\n/","",$statBlock);
    
    return trim($statBlock); 
}

function getClassList($statBlock) {
    
    global $classNames;
                    
    $classList = array();
    
    if (strpos($statBlock, "Class: ALL except")) {
        $regex = '/Class: ALL except (.*?)<br>/s';
        $ret = preg_match($regex, $statBlock, $exceptClasses);
        
        if ($ret) {
            $exceptClasses = " ".$exceptClasses[1];
        
            foreach ($classNames as $classAbv => $className) {
                if (!strpos($exceptClasses,$classAbv)) {
                    $classList[] = $className;
                }
            }
        }
    } elseif (strpos($statBlock, "Class: ALL<br>")) {
        foreach ($classNames as $classAbv => $className) {
            $classList[] = $className;
        }
    } else {
        $regex = '/Class: (.*?)<br>/s';
        $ret = preg_match($regex, $statBlock, $Classes);
        
        // only false for: containers
        if ($ret) {
            $Classes = " ".$Classes[1];
            
            foreach ($classNames as $classAbv => $className) {
                if (strpos($Classes,$classAbv)) {
                    $classList[] = $className;
                }
            }
        }
    }
    return $classList;
}
 
function getSlotList($statBlock) {
    
    global $slotNames;
    global $skillNames;
    global $bardInstrumentNames;
                    
    $slotList = array();
    
    //Slot:
    $regex = '/Slot: (.*?)<br>/s';
    $ret = preg_match($regex, $statBlock, $Slots);
    if ($ret) {
        $Slots = " ".$Slots[1];
        
        foreach ($slotNames as $slotAbv => $slotName) {
            if (strpos($Slots,$slotAbv)) {
                $slotList[] = $slotName;
            }
        }
    }
    else
    {
        // no Slot: listed? treat as Inventory Item
        $slotList[] = "Inventory Items";
    }
    
    //Skill:
    $regex = '/Skill: (.*?)<br>/s';
    $ret = preg_match($regex, $statBlock, $Skills);
    if ($ret) {
        $Skills = " ".$Skills[1];
        
        foreach ($skillNames as $skill) {
            if (strpos($Skills,$skill)) {
                $slotList[] = $skill;
            }
        }
    }
    
    //Bard Instruments (rough)
    foreach ($bardInstrumentNames as $instrument) {
        if (strpos($statBlock,$instrument)) {
            $slotList[] = "Bard Instrument";
        }
    }
    
    return $slotList;
}

// --------------------------------------------------------------------------------------
// item - alla
// --------------------------------------------------------------------------------------

function getAllaHTML($lucyHTML)
{
    // extract alla link
    $statBlockStart = "<a href=\"http:\/\/everquest.allakhazam.com\/db\/item.html\?item=";
    $statBlockEnd   = "\">Allakhazam's Entry";
    $regex = '/' . $statBlockStart . '(.*?)' . $statBlockEnd . '/s';
    
    $ret = preg_match($regex, $lucyHTML, $allaItemID);
    
    $allaAddress =  "http://everquest.allakhazam.com/db/item.html?item=" . $allaItemID[1];
    print $allaAddress . "  <br>\n";
    
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";
    
    // load alla webpage
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$allaAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $allaHTML = curl_exec($ch);
		
    if (!$allaHTML) {
    	return 0;
    }

    return $allaHTML;
}

function getDropList($allaHTML)
{
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;
    
    $regex = '/<div id=\"drops\">(.*?)<\/ul><\/div>/s';   
    $ret = preg_match($regex, $allaHTML, $dropBlock);

    if ($ret) {
        $dropBlock = strip_tags($dropBlock[1],"<ul><li>");    
        $dropSplit = explode("</ul>",$dropBlock);
        
        $dropList = array();
        
        foreach ($dropSplit as $block) {
            $tSplit = explode("<ul>",$block);
            $zname = $tSplit[0];
            
            //only add drops from zones we know (classic, kunark, velious)
            if (array_key_exists($zname,$classicZones) || 
                array_key_exists($zname,$kunarkZones) ||
                array_key_exists($zname,$veliousZones)) {
                
                $regex = '/<li>(.*?)<\/li>/s';   
                $ret = preg_match_all($regex, $tSplit[1], $npcNames);
        
                $npcList = array();
                
                //trim whitespace and exclude The Fabled mobs
                foreach ($npcNames[1] as $npc) {
                    if (strpos($npc,"The Fabled") === false) {
                        $npcList[] = trim($npc);
                    }
                }
		    
		    //add
		    $dropList[$zname] = $npcList;
            }
        }
    
      return $dropList;
    } else {
        return 0;
    }
}

function getQuestList($allaHTML)
{
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;
    global $classNames;
    global $idCutoffs;
    
    $questList = array();
    
    // <div id="quest"> format
    $regex = '/<div id=\"quest\">(.*?)<\/ul><\/div>/s';   
    $ret = preg_match($regex, $allaHTML, $questBlock);
    
    if ($ret) {
        $questBlock = strip_tags($questBlock[1],"<ul><li><a>");    
        $questSplit = explode("</ul>",$questBlock);
        
        foreach ($questSplit as $block) {
            $tSplit = explode("<ul>",$block);
            $zname = $tSplit[0];
            
            //only add quests from zones we know (classic, kunark, velious)
            if (array_key_exists($zname,$classicZones) || 
                array_key_exists($zname,$kunarkZones) ||
                array_key_exists($zname,$veliousZones)) {
                
                $regex = '/<li><a href=\"\/db\/quest\.html\?quest=(.*?)\">(.*?)<\/a><\/li>/s';   
                $ret = preg_match_all($regex, $tSplit[1], $questNames);
                
                //trim whitespace
                foreach ($questNames[2] as $i => $quest) {
                  $questID = $questNames[1][$i];
                  if ($questID <= $idCutoffs["Quest"]) {
                     $questList[$zname] = $quest;
                  } else {
                    print "WARNING: Excluding quest: " . $quest . " (" . $questID . ")  <br>\n";
                  }
                }
            }
        }
    } 
    
    // This item is the result of a quest.
    $regex = '/This item is the result of a quest.<br>(.*?)<\/ul>/s';   
    $ret = preg_match($regex, $allaHTML, $questBlock);    
    
    if ($ret) {
        $questList["?"] = trim(strip_tags($questBlock[1]));
    }  
    
    // some quest name formatting
    foreach ($questList as $key => $quest)
    {
      list($questName,$questLink) = getQuestName($quest);
      
      $questList[$key] = $questLink;
    }
    
    return $questList;
}

function getCraftList($allaHTML)
{
    global $craftStrings;
    global $craftNames;
                          
    // (1) check for old recipe messages
    $regex = '/<table class=\"datatable\"(.*?)<div id=\"end\">/s';   
    $ret = preg_match($regex, $allaHTML, $craftBlock);
    
    $craftBlock = strip_tags($craftBlock[1]);
    
    $craftList = array();
    
    if ($ret) {
        foreach ($craftStrings as $string => $skillName) {
            if(strpos($craftBlock,$string) !== false) {
                $craftList[$skillName] = "?";
            }
        }
    }
    
    // (2) check for craft formatted lists
    $regex = '/<b id=\"crafted\">Crafted:(.*?)<hr size=\"1\">/s';
    $ret = preg_match($regex, $allaHTML, $craftBlock);
    
    if ($ret) {
        $craftBlock = strip_tags($craftBlock[1]);
        //echo $craftBlock;
        
        foreach ($craftNames as $craftName => $wikiCraftName) {
            if (strpos($craftBlock,"(".$craftName)) {
                // find trivial level
                $regex = '/\(' . $craftName . ', (.*?) trivial\)/s';
                $ret = preg_match($regex, $craftBlock, $trivBlock);
                
                if ($ret) {
                     $trivialLevel = trim($trivBlock[1]);
                } else {
                     $trivialLevel = "?";  
                }
                
                $craftList[$wikiCraftName] = $trivialLevel;
            }
        }
    }
    
    // (3) generic crafted message
    //$regex = '/This item is crafted by players./s';
    //$ret = preg_match($regex, $allaHTML, $craftBlock);
    
    return $craftList;
}

function getForagedList($allaHTML)
{
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;
                        
    $forageList = array();		
		
		// check for foraged in zone list
		$regex = '/Found in:<ul>(.*?)<\/ul>/';
		$ret = preg_match($regex, $allaHTML, $zonesBlock);
		if ($ret) {
			$zonesBlock = $zonesBlock[0];
			
			$regex = '/<li><a href=\"\/db\/zone\.html\?zstrat=(.*?)\">(.*?)<\/a><\/li>/';
			$ret = preg_match_all($regex, $zonesBlock, $zonesList);
			
			if ($ret) {
				$zonesList = $zonesList[2];

				foreach ($zonesList as $zname) {
					if (array_key_exists($zname,$classicZones) || 
							array_key_exists($zname,$kunarkZones) ||
							array_key_exists($zname,$veliousZones)) {
							
					list($zonePagename,$zoneLink,$zHeader,$zFooter) = getZoneName($zname);
					$forageList[] = $zoneLink;
							
					}
				} // foreach
			} // ret
		} // ret
    
    if (count($forageList) == 0)
			$forageList[] = "?";
    
    return $forageList;
}

function getAllaRecipe($allaHTML)
{
  global $craftContainers;
	global $craftNames;
	
	// check for recipe links on page
	$regex = '/<li><a href=\"\/db\/recipe\.html\?recipe=(.*?)\">(.*?)<\/a>/';
	$ret = preg_match_all($regex, $allaHTML, $block);
	
	if (!$ret) {
		return -1;
	}
	
	$rArr = array();
	
	// loop over all recipe links, follow them and get html
	foreach ($block[1] as $recipeID) {
		$allaAddress =  "http://everquest.allakhazam.com/db/recipe.html?recipe=" . $recipeID;
		print " Retrieving recipe ID = " . $recipeID . "  <br>\n";
		
		$userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
		$cookieJar = "cookie.txt";
		
		// load alla webpage
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
		curl_setopt($ch, CURLOPT_URL,$allaAddress);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_AUTOREFERER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$recipeHTML = curl_exec($ch);
		
		if (!$recipeHTML) {
			print " WARNING: Failed to retrieve recipe details.  <br>\n";
			continue;
		}
		
		// get recipe page subset with details
		$regex = "/<table cellpadding=\"0\" class=\"db-page\">(.*?)<\/table>/s";
		$ret = preg_match($regex, $recipeHTML, $block);
		
		if (!$ret) {
			print " WARNING: Failed to parse recipe details.  <br>\n";
			continue;
		}
		
		// return
		$detailsStr = "";
		
		// get "Creates" (Yield)
		$start = strpos($block[0],"Creates</h2>");
		$end   = strpos($block[0],"Ingredients</h2>");
		
		$cHTML = substr($block[0],$start,$end-$start);
		
		$regex = "/\s+(\d?) x\s+<a href=\"(.*?)\">(.*?)\s+<\/a><\/div>/";
		$ret = preg_match($regex, $cHTML, $cBlock);
		
		$detailsStr .= "** '''Yield: " . $cBlock[3] . "''' x" . $cBlock[1] . "\n";
		
		// get "Skill" (just for container link)
		$regex = "/Skill:\s+(.*?)<br>/";
		$ret = preg_match($regex,$block[0],$sBlock);
		
		if (!$ret) {
		  print " WARNING: Failed to find tradeskill!  <br>\n";
		  continue;
		}
		  
		$skill = $sBlock[1];
		if (!array_key_exists($skill,$craftContainers)) {
		  print " WARNING: UNRECOGNIZED TRADESKILL IN RECIPE ($skill)!  <br>\n";
			continue;
		}

		// add container string
		$regex = "/<a href=\"\/db\/containers\.html\?container=(.*?)\">(.*?)<\/a>/";
		$ret = preg_match($regex,$block[0],$contBlock);
		
		//print_r($contBlock);
		
		if ($ret) {
		  // if container string is in $craftContainers, include normal link
			if (in_array($contBlock[2],$craftContainers)) {
			  $detailsStr .= "** In [[" . $craftContainers[$skill] . "]]:\n";
			} else {
			  // if not, use good link for this skill and add container name to link
				$detailsStr .= "** In [[" . $craftContainers[$skill] . "|" . trim($contBlock[2]) . "]]:\n";
		  }
		} else {
		  $detailsStr .= "** In [[" . $craftContainers[$skill] . "]]:\n";
		}
		
		// check for strings corresponding to additional (portable) containers
		$stringList = array("Small Sewing Kit","Large Sewing Kit","Deluxe Sewing Kit","Feir'Dal Sewing Kit","Vale Sewing Kit");
		//TODO
		//TODO
		//TODO
		
		// change tradeskill name to match wiki convention
		$skill = $craftNames[$skill];		
		
		// get "Ingredients" (Components)
		$start = strpos($block[0],"Ingredients</h2>");
		
		$iHTML = substr($block[0],$start);
		
		$regex = "/<div><img (.*?)\/item_(.*?)\.png\" class=\"zam-icon eq itemicon \">\s+(\d?) x\s+<a href=\"(.*?)\">(.*?)<\/a>(.*?)<\/div>/s";
		$ret = preg_match_all($regex,$iHTML,$iBlock);
		
		foreach ($iBlock[5] as $i => $itemName) {
			// clean itemname
			$itemLink = strip_tags($itemName);
			$itemLink = str_replace("[","(",$itemLink); //qualifiers
			$itemLink = str_replace("]",")",$itemLink);
			
			$itemLink = "[[" . $itemLink . "]]";
			$smIcon = "{{SmIcon|" . trim($iBlock[2][$i]) . "}} ";
			
			// remove "Summoned" for Flask of Water (not supposed to work in smithing recipes)
			if ($itemLink == "[[Flask of Water]]")
			  $iBlock[6][$i] = str_replace(", Summoned","",$iBlock[6][$i]);
			
			// insert line
			$detailsStr .= ":: " . $smIcon . $iBlock[3][$i] . " x " . $itemLink . $iBlock[6][$i] . "\n";
		}
		
		// insert this tradeskill and details string into the return array
	  $rArr[$skill] = $detailsStr;
	}
	
  return $rArr;
}

function getGMList($allaHTML)
{    
    $gmList = array();
    
    // simple check for alla's gm item string
    $regex = '/Given out in a GM event./s';   
    $ret = preg_match($regex, $allaHTML, $gmBlock);
    
    if ($ret) {
        $gmList[] = "Given out in a GM event.";
    }

    return $gmList;
}

function getZoneName($zone)
{
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;
    global $crysZones;
    global $multiZones;
    global $emuZoneNames;
    
    $zonePagename = "";
    $zHeader      = "";
    $zFooter      = "";
    $zoneLink     = "";
    
    // emu naming
    if (array_key_exists($zone,$emuZoneNames)) {
      //print "  Replaced EmuZone: $zone => " . $emuZoneNames[$zone] . " <br>\n";
      $zone = $emuZoneNames[$zone];
    }
    if (!array_key_exists($zone,$classicZones) && !in_array($zone,$classicZones) &&
        !array_key_exists($zone,$kunarkZones)  && !in_array($zone,$kunarkZones) &&
        !array_key_exists($zone,$veliousZones) && !in_array($zone,$veliousZones) &&
        substr($zone,0,4) == "The ") {
          //print "  Replaced EmuZone: $zone => " . substr($zone,4) . " <br>\n";
          $zone = substr($zone,4);
    }
    
    // classic zone
    if (array_key_exists($zone,$classicZones)) {
        $zonePagename = $classicZones[$zone];
        $zHeader      = "";
        $zFooter      = "";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    if (in_array($zone,$classicZones)) {
        $zonePagename = $zone;
        $zHeader      = "";
        $zFooter      = "";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    
    // kunark zone
    if (array_key_exists($zone,$kunarkZones)) {
        $zonePagename = $kunarkZones[$zone];
        $zHeader      = "";
        $zFooter      = "";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    if (in_array($zone,$kunarkZones)) {
        $zonePagename = $zone;
        $zHeader      = "";
        $zFooter      = "";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    
    // velious zone
    if (array_key_exists($zone,$veliousZones)) {
        $zonePagename = $veliousZones[$zone];
        //$zHeader      = "{{VeliousGray|"; //comment out for spells
        //$zFooter      = "}}";
        $zHeader = "";
        $zFooter = "";
        //$zoneLink     = $zHeader . "[[" . $zonePagename . "|" . $zHeader . $zone . $zFooter . "]]";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    if (in_array($zone,$veliousZones)) {
        $zonePagename = $zone;
        $zHeader      = "";
        $zFooter      = "";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    
    // crys naming
    if (array_key_exists($zone,$crysZones)) {
        $zonePagename = $crysZones[$zone];
        $zHeader      = "";
        $zFooter      = "";
        $zoneLink     = "[[" . $zonePagename . "]]";
    }
    
    if ($zonePagename != "" && $zonePagename != $zone && in_array($zonePagename,$multiZones)) {
        $zoneLink = "[[" . $zonePagename . "|" . $zone . "]]";
    }

    return array($zonePagename,$zoneLink,$zHeader,$zFooter);
}

function getFactionName($faction)
{
  global $factionNames;
  
  $factionName = $faction;
  $factionLink = "";
  
  foreach ($factionNames as $f1 => $f2) {
    if (strpos($faction,$f1) !== false && 
        !strpos($faction,"of Cleaving Tooth") &&
	!strpos($faction,"of Mountain Death") &&
	!strpos($faction,"of Fire Peak") &&
	substr($faction,0,8) != "Pickclaw" ) {
      $factionName = $f2;
      print "  Replaced Faction: $f1 => $f2 <br>\n";
    }
  }
  
  if ($factionName != $faction) {
    $factionLink = "[[" . $factionName . "|" . $faction . "]]";
  } else {
    $factionLink = "[[" . $factionName . "]]";
  }
  
  return array($factionName,$factionLink);
}

function getQuestName($quest)
{
  global $questNamesSingle;
  global $questNamesMulti;
  global $classNames;
  
  $questName = $quest;
  $questLink = "";
  
  // check if quest name exactly matches some itemName, in which case append "Quest" (wiki pagename syntax)
  list($lucyID,$lucyName) = getLucyID($quest);
  if ($lucyID) {
      $questName = $quest . " Quest";
      print "  Renamed Quest: $quest => $questName <br>\n";
  }
  
  // check questNamesSingle
  foreach ($questNamesSingle as $q1 => $q2) {
    if (strpos($quest,$q1) !== false) {
      $questName = $q2;
      print "  Replaced Quest: $q1 => $q2 <br>\n";
    }
  }
  
  // check questNamesMulti
  foreach ($questNamesMulti as $q1 => $q2) {
    $regex = '/' . $q1 . '/';
    $ret = preg_match($regex,$quest,$block);
    
    if ($ret) {
      $questName = $q2 . '|' . $quest;
      print "  Replaced Quest: $quest => $questName <br>\n";
    }
  }
  
  // rename "Class Epic: xxx" to "Class Epic Quest"
  foreach ($classNames as $classAbv => $className) {
      if (strpos($quest,$className . " Epic:") !== false) {
          $questName = $className . " Epic Quest";
      }
  }
  // different className syntax for SK
  if (strpos($quest,"Shadowknight Epic:") !== false) {
      $questName = "Shadow Knight Epic Quest";
  }    
  
  //rename PoS quests
  foreach ($classNames as $classAbv => $className) {
      if (strpos($quest,$className . " Test of ") !== false) {
          $questName = $className . " Plane of Sky Tests|" . $quest;
      }
  }
  // different className syntax for SK
  if (strpos($quest,"Shadowknight Test of ") !== false) {
      $questName = "Shadow Knight Plane of Sky Tests|" . $quest;
  }
  
  // make link
  $questLink = "[[" . $questName . "]]";
  
  return array($questName,$questLink);
}

// --------------------------------------------------------------------------------------
// item - emu
// --------------------------------------------------------------------------------------

function getEmuItemID($npcName)
{
    global $skipIDs;

    $userAgent = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12";
    $cookieJar = "cookie.txt";
    
    $search_url = "http://mqemulator.net/items.php?iname=" . str_replace(" ","+",$npcName);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$search_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $emuHTML = curl_exec($ch);
    
    //check for empty result
    if (strpos("No results match your search<br>",$emuHTML))
    {
        return 0;
    }
    
    //check for single (direct) result
    $regex = "/<input type='hidden' name='id' value='(.*?)'>/";
    if (preg_match($regex, $emuHTML, $directResult)) {
        $regex = "/<title>MQEmulator\.net \&bull; Item - (.*?)<\/title>/";
        if (preg_match($regex, $emuHTML, $titleResult)) {
            return array($directResult[1],$titleResult[1]);
        }
    }
    
    //enumerate search results
    //<td class='forum'><a href='npc.php?id=32076'>The Fabled Efreeti Lord Djarn</a></td>
    $regex = '/<td class=\'forum\'><a href=\'item.php\?id=(.*?)\'>(.*?)<\/a><\/td>/s';   
    $ret = preg_match_all($regex, $emuHTML, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $names = $srcBlock[2];
        
        // just one result
        if (count($IDs) == 1) {
            return $IDs[0];
        }
        
        $Items   = array();
        
        //multiple results:
        foreach ($IDs as $i => $ID) {
            //remove any "Fabled" results
            if (strpos($names[$i]," Fabled ") === false && !in_array($IDs[$i],$skipIDs)) {
                //add to keeper array
                $Items[$IDs[$i]]   = $names[$i];
            }
        }
        
        //pick lowest remaining ID
        if (count($Items) == 0) { return 0; }
        
        if (count($Items) >= 1) {
            if (count($Items) > 1 ) { 
                echo "  WARNING: Multiple Emu Item IDs, picking min: <br>\n";
            }
            $i = min(array_keys($Items));
            return array($i, $Items[$i]);
        }
        
    } else {
        return 0;
    }

}

function getMerchantList($emuHTML)
{
  $emuNPCIDCutoff = 185000; //~150k is Luclin, but Jaggedpine at ~180k
  global $veliousZones;
  
    //extract sold by section
    $blockStart = "<table class='forum' id='result5' style='display: none;'>";
    $blockEnd = "<table class='forum' id='result6' style='display: none;'>";
    
    $block = substr($emuHTML,strpos($emuHTML,$blockStart));
    $block = substr($block,0,strpos($block,$blockEnd));
    
    $merchantList = array();
    
    //split into each item in this table
    if (!preg_match_all("/<tr class='highlight'>(.*?)<\/tr>/s",$block,$soldBlocks)) {
        echo "  --ERROR-- 6  <br>\n";
    }
        
    foreach ($soldBlocks[1] as $soldBlock) {
        if (!preg_match("/nowrap><a href='zone\.php\?name=(.*?)'>(.*?)<\/a><\/td>/",$soldBlock,$merchZone)) {
            echo "  --ERROR-- 7  <br>\n";
        }
        if (!preg_match("/<a href='npc\.php\?id=(.*?)'>(.*?)<\/a><\/td>/",$soldBlock,$merchName)) {
            echo "  --ERROR-- 8  <br>\n";
        }  
        if (!preg_match("/<a href='map\.php\?zoneid=(.*?)'>(.*?)<\/a><\/td>/",$soldBlock,$merchLoc)) {
            echo "  --ERROR-- 9  <br>\n";
        }  
        
        //only add merchants from zones we know (classic, kunark, velious)
        list($zonePagename,$zoneLink,$zHeader,$zFooter) = getZoneName($merchZone[2]);
        
        if ($zonePagename) {
          
          // flag velious as gray for now
          $velTag = "   ";
          if (in_array($zonePagename,$veliousZones)) {
            $velTag = "Vel";
          }
          
          // check for # in merchant name
          if (substr($merchName[2],0,1) == "#")
            $merchName[2] = substr($merchName[2],1);
            
          // exclude revamped Freeport area zones with emu ID cut
          if ($merchName[1] >= $emuNPCIDCutoff) {
            print "WARNING: Skipping non-classic soldby merchant: " . $merchName[2] . " (ID=" . $merchName[1] . " Zone=" . $merchZone[2] . ")  <br>\n";
            continue;
          }
      
          $addString = "{{ItemWhereRow" . $velTag . 
                            "| " . str_pad($zoneLink,34) . 
                            "| " . str_pad("[[" . $merchName[2] . "]]",30) . 
                            "| " . str_pad("",14) .
                            "| " . str_pad($merchLoc[2],10) . 
                            " }}\n";
                            
          if (count($merchantList) && $addString == $merchantList[count($merchantList)-1]) {
              print "WARNING: Skipping duplicate soldby merchant: " . $merchName[2] . " (LOC=" . $merchLoc[2] . " Zone=" . $merchZone[2] . ")  <br>\n";
              continue;
          }
                            
          $merchantList[] = $addString;
        } 
    }
    
    return $merchantList;
}


function getRecipeList($emuHTML)
{  
  global $emuCraftNames;
  
    //extract sold by section
    $blockStart = "<table class='forum' id='result3' style='display: none;'>";
    $blockEnd = "<table class='forum' id='result4' style='display: none;'>";
    
    $block = substr($emuHTML,strpos($emuHTML,$blockStart));
    $block = substr($block,0,strpos($block,$blockEnd));
    
    $recipeList = array();
    
    //split into each item in this table
    if (!preg_match_all("/<tr class='highlight'>(.*?)<\/tr>/s",$block,$soldBlocks)) {
        echo "  --ERROR-- 10  <br>\n";
    }
        
    foreach ($soldBlocks[1] as $soldBlock) {
        if (!preg_match("/nowrap><a href='recipe\.php\?id=(.*?)'>(.*?)<\/a><\/td>/",$soldBlock,$recipeName)) {
            echo "  --ERROR-- 11  <br>\n";
        }
        if (!preg_match("/nowrap>([\w]*)<\/a><\/td>/",$soldBlock,$tradeskillName)) {
            echo "  --ERROR-- 12  <br>\n";
        }  
        if (!preg_match("/nowrap>(\d+)<\/td>/",$soldBlock,$trivLevel)) {
            echo "  --ERROR-- 13  <br>\n";
        }  
        
        //print " -- " . $recipeName[2] . " -- " . $tradeskillName[1] . " -- " . $trivLevel[1] . " \n";
        $tsName = trim($tradeskillName[1]);
				
        if (array_key_exists($tsName,$emuCraftNames)) {
          $tsStr = "* [[" . $emuCraftNames[$tsName] . "]]\n";
          
          // filter out bad trivials and add uniquely
          if (!in_array($tsStr,$recipeList) && $trivLevel[1] != 0 && $trivLevel[1] <= 255) {
            $recipeList[$tsName] = $tsStr;
          }
        } else {
          print "WARNING: Unknown emu tradeskill: " . $tsName . "  <br>\n";
        }
    }
    
    return $recipeList;
}

// --------------------------------------------------------------------------------------
// item
// --------------------------------------------------------------------------------------

function readWantedPageList($filename)
{
    $lines = file($filename);
    $itemList = array();
    
    foreach ($lines as $line)
    {
        // check for Special:WantedPages copy+pasted formated (# Itemname (X links))
        if (substr($line,0,1) == "#") {
            $itemList[] = substr($line,2,strpos($line,"?(")-3);
        } else {
            $itemList[] = trim($line);
        }
    }
    
    return $itemList;
}

function writeItemPage($itemName,$statBlock,$classList,$slotList,$lucy_img_id,
                       $dropList,$questList,$craftList,$merchantList,$recipeList,
                       $allaRecipeList,$bookText,$gmList,$foraged)
{
    global $veliousZones, $multiZones;

    // itembox
    // -------
    $itemPage = "<onlyinclude><includeonly><div class=\"hbdiv\">[[" . $itemName . "]]<span class=\"hb\">{{Itembox\n";
    $itemPage .= "|itemname    = $itemName\n";
    $itemPage .= "|lucy_img_ID = $lucy_img_id\n";
    $itemPage .= "|statsblock  = \n";
    
    // statblock
    $itemPage .= $statBlock;
    
    // itembox footer
    $itemPage .= "\n}}</span></div></includeonly></onlyinclude>\n";    
    
    // itempage
    // --------
    $itemPage .= "{{Itempage\n";
    $itemPage .= "|notes       = \n";
    $itemPage .= "|itemname    = $itemName\n";
    $itemPage .= "|lucy_img_ID = $lucy_img_id\n";
    $itemPage .= "|statsblock  = \n";
    
    // statblock
    $itemPage .= $statBlock;
    $itemPage .= "\n";
    
    // npc drop
    if ($dropList) {
        $itemPage .= "|dropsfrom = \n\n";
        foreach ($dropList as $zone => $npcNames) {

            list($zonePagename, $zoneLink, $zHeader, $zFooter) = getZoneName($zone);

            //add VeliousGray modifier
		//$velFlag = "";
            //if (array_key_exists($zone,$veliousZones)) {
		//  $zoneLink = "{{VeliousGray|" . $zoneLink . "}}";
		//  $velFlag = "
		
            $itemPage .= $zoneLink . "\n\n";
            foreach ($npcNames as $npc) {
                if ($zHeader) {
                    $itemPage .= "* [[" . $npc . "|". $zHeader . $npc . $zFooter . "]]\n";
                } else {
                    $itemPage .= "* [[" . $npc . "]]\n";
                }
            }
            $itemPage .= "$zFooter\n";
        }
        
    }
    
    // related quests
    if ($questList) {
        $itemPage .= "|relatedquests = \n\n";
        foreach ($questList as $zone => $questLink)
            $itemPage .= "* " . $questLink . "\n";

        $itemPage .= "\n";
    }
    
    // player crafted
    if ($craftList) {
        $itemPage .= "|playercrafted = \n\n";
        foreach ($craftList as $skill => $trivialLevel) {
				  // add tradeskill and trivial (from eqemu)
		      if (!$trivialLevel)
					  $trivialLevel = "?";
						
          $itemPage .= "* [[$skill]] (Trivial: $trivialLevel)\n";
					
          // check if we have a matched recipe contents from alla
					if (array_key_exists($skill,$allaRecipeList))
						$itemPage .= $allaRecipeList[$skill] . "\n";
        }
        $itemPage .= "\n";
    }
    
    // used in recipes
    if ($recipeList) {
      $itemPage .= "|recipes = \n\n";
      
      foreach ($recipeList as $tsName => $recipe) {
			  // add tradeskill and trivial (from eqemu)
        $itemPage .= $recipe;
				
				// check if we have matched details
				$itemPage .= "** Recipe name(s)? (Trivial: ?)\n";
			}

      $itemPage .= "\n";
    }
		
		// foraged in
		if ($foraged) {
			$itemPage .= "|foraged = \n\n";
			
			foreach ($foraged as $forageLoc)
				$itemPage .= "* " . $forageLoc . "\n";
				
			$itemPage .= "\n";
		}
    
    // merchant sold
    if ($merchantList) {
      $itemPage .= "|soldby = \n\n";
      
      $itemPage .= "{{ItemWhereTable|\n";
      foreach ($merchantList as $merchRow)
        $itemPage .= $merchRow;

      $itemPage .= "}}\n\n";
    }
    
    // book contents
    if ($bookText) {
      $itemPage .= "|bookcontents = \n\n";
      $itemPage .= $bookText;
      $itemPage .= "\n";
    }
    
    // GM event item / GM only item
    if ($gmList) {
        $itemPage .= "|gmitem = \n\n";
        foreach ($gmList as $gmString) {
            $itemPage .= "* $gmString\n";
        }
        $itemPage .= "\n";
    }
    
    // end itempage template
    $itemPage .= "}}\n\n";
    
    // categories
    if (count($slotList) == 1 && $slotList[0] == "Inventory Items") {
      $itemPage .= "[[Category:Inventory Items]]\n";
    } else {
      foreach ($classList as $class) {
          $itemPage .= "[[Category:$class Equipment]]\n";
      }
      foreach ($slotList as $slot) {
          $itemPage .= "[[Category:$slot]]\n";
      }
    }
    
    if ($merchantList) {
      $itemPage .= "[[Category:Vendor Sold]]\n";
    }
    if ($craftList) {
      $itemPage .= "[[Category:Player Crafted]]\n";
    }
    if ($recipeList) {
      $itemPage .= "[[Category:Tradeskill Ingredient]]\n";
    }
    if ($bookText) {
      $itemPage .= "[[Category:Book]]\n";
    }
		if ($foraged) {
			$itemPage .= "[[Category:Foraged]]\n";
		}
		
		$maxNumZonesToAdd = 3;
    if ($dropList && count($dropList) <= $maxNumZonesToAdd) {
        foreach ($dropList as $zone => $npcNames) {
						// format zone name and add as category
            list($zonePagename, $zoneLink, $zHeader, $zFooter) = getZoneName($zone);
						
						// check for multizones
						if ($zonePagename != "" && !in_array($zonePagename,$multiZones))
						  $itemPage .= "[[Category:" . $zonePagename . "]]\n"; // get spelling convention on wiki
						if ($zonePagename != "" && in_array($zonePagename,$multiZones))
						  $itemPage .= "[[Category:" . $zone . "]]\n"; // keep multizones (e.g. "West Freeport")
        }
    }
    
    return $itemPage;
}

function writeXMLFile($xmlFile, $itemNames, $pages)
{
     //$template = simplexml_load_file('templateItem.xml');
     // set page properties
     //$template->page[0]->title = "Test Test";
     
    $headerStr = <<<HEADER_STR
<mediawiki xmlns="http://www.mediawiki.org/xml/export-0.3/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.mediawiki.org/xml/export-0.3/ http://www.mediawiki.org/xml/export-0.3.xsd" version="0.3" xml:lang="en">
  <siteinfo>
    <sitename>Project 1999 Wiki</sitename>
    <base>http://wiki.project1999.org/index.php/Main_Page</base>
    <generator>MediaWiki 1.15.3</generator>
    <case>first-letter</case>
    <namespaces>
      <namespace key="-2">Media</namespace>
      <namespace key="-1">Special</namespace>
      <namespace key="0" />
      <namespace key="1">Talk</namespace>
      <namespace key="2">User</namespace>
      <namespace key="3">User talk</namespace>
      <namespace key="4">Project 1999 Wiki</namespace>
      <namespace key="5">Project 1999 Wiki talk</namespace>
      <namespace key="6">File</namespace>
      <namespace key="7">File talk</namespace>
      <namespace key="8">MediaWiki</namespace>
      <namespace key="9">MediaWiki talk</namespace>
      <namespace key="10">Template</namespace>
      <namespace key="11">Template talk</namespace>
      <namespace key="12">Help</namespace>
      <namespace key="13">Help talk</namespace>
      <namespace key="14">Category</namespace>
      <namespace key="15">Category talk</namespace>
    </namespaces>
  </siteinfo>
HEADER_STR;

    // write header
    fwrite($xmlFile, $headerStr);
    
    date_default_timezone_set('UTC');
    $datetime = date("Y-m-d") . "T" . date("H:i:s") . "Z";
    
    // write item pages
    for ($i = 0; $i < count($itemNames); $i++) {
        
        // check for skipped (non-items)
        if ($pages[$i]) {
            echo "xml write page: " . $itemNames[$i] . "\n";
            fwrite($xmlFile,"  <page>\n");
            fwrite($xmlFile,"    <title>" . $itemNames[$i] . "</title>\n");
            fwrite($xmlFile,"    <revision>\n");
            fwrite($xmlFile,"      <timestamp>" . $datetime . "</timestamp>\n");        
            fwrite($xmlFile,"      <text xml:space=\"preserve\">" . htmlentities($pages[$i]) . "</text>\n");
            fwrite($xmlFile,"    </revision>\n");
            fwrite($xmlFile,"  </page>\n");
        }
    }

    // write footer
    fwrite($xmlFile, "</mediawiki>");
}

function itemPage($itemName) {
    // load Lucy page
    $lucyHTML    = getLucyHTML($itemName);
    list($emuID,$lucyName) = getLucyID($itemName);
    
    if ($lucyHTML) {
        // parse Lucy page
        $lucy_img_id = getLucyImgID($lucyHTML);
        $statBlock   = getStatBlock($lucyHTML);
        $classList   = getClassList($statBlock);
        $slotList    = getSlotList($statBlock);
        
        // load Allakhazam page
        $allaHTML    = getAllaHTML($lucyHTML);
        
        // check for wrong item page
        if (strpos($allaHTML,"<span class=\"metanote\">[non-enchanted]</span>") !== false) {
            echo "\n\nERROR: NON-ENCHANTED [" . $itemName . "] [lucyID=" . getLucyID($itemName) . "]\n\n";
            exit;
        }
        
        // parse Allakhazam page
        $dropList    = getDropList($allaHTML);
        $questList   = getQuestList($allaHTML);
        $craftList   = getCraftList($allaHTML);
        $gmList      = getGMList($allaHTML);
	
        $merchantList = array();
				$emuHTML = "";
        if (strpos($allaHTML,"<b id=\"merchReg\">Merchants:</b>") !== false) {
          //list($emuID,$emuItemName) = getEmuItemID($itemName);
           //lucy ID and EMU ID for items agree?
          $emuHTML      = getEmuHTML($emuID, "Item");
          $merchantList = getMerchantList($emuHTML);
        }
        
        $recipeList = array();
        if (strpos($allaHTML,"<br/>Recipe list - Premium only.<br/>") !== false) {
				  if (!$emuHTML)
					  $emuHTML = getEmuHTML($emuID, "Item");
          $recipeList = getRecipeList($emuHTML);
				}
					
				$allaRecipeList = getAllaRecipe($allaHTML);
	
        $bookText = "";
        if (strpos($allaHTML,"<b id=\"bktxt\">Book Text:</b>") !== false)
          $bookText = "Unknown.\n";
				
				$foraged = 0;
				if (strpos($allaHTML,"This item is found by foraging.") !== false )
					$foraged = getForagedList($allaHTML);
        
        // write single item page (Wiki format)
        $itemPage = writeItemPage($lucyName,$statBlock,$classList,$slotList,$lucy_img_id,
                                  $dropList,$questList,$craftList,$merchantList,$recipeList,
                                  $allaRecipeList,$bookText,$gmList,$foraged);
                                  
        return array($itemPage,$lucy_img_id);
    }
    else
    {
        return array(0,0);
    }
}

function batchItems()
{
    //Snoopy for img DL/UP
    include "./Snoopy.class.php";
    $snoopy = new Snoopy;
        
    $itemNames = readWantedPageList("items.txt");
    
    $imgLinks = array();
    $itemPages = array();
    
    for ($i = 0; $i < count($itemNames); $i++) {
        list($itemPage,$lucy_img_id) = itemPage($itemNames[$i]);
        
        // check for skipped (non-items)
        if ($lucy_img_id) {
            $itemPages[] = $itemPage;
            $imgLinks[] = "http://everquest.allakhazam.com/pgfx/item_" . $lucy_img_id . ".png\n";
        } else {
            $itemPages[] = 0;
        }
    }
    
    // write image links file
    $imgLinkFile = fopen("imglinks.txt",'w');
    foreach ($imgLinks as $imgLink) {
        fwrite($imgLinkFile, $imgLink);
    }
    fclose($imgLinkFile);
    
    // batch download & re-upload images to wiki
    $tmpDir = "c:\\php\\images\\";
    $imgPaths = batchImageDownload($imgLinks,$snoopy,$tmpDir);
    batchImageUpload($imgPaths);
    
    // write XML
    $xmlFile = fopen("import.xml",'w');
    writeXMLFile($xmlFile, $itemNames, $itemPages);
    fclose($xmlFile);
}

// --------------------------------------------------------------------------------------
// npc - illia
// --------------------------------------------------------------------------------------

function getIlliaID($npcName,$exact)
{
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;

    global $skipNPCIDs;
    
    $userAgent = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12";
    $cookieJar = "cookie.txt";
    
    //$search_url = "http://eqbeastiary.allakhazam.com/search.shtml?name=" . str_replace(" ","+",$npcName); // old
    $search_url = "http://everquest.allakhazam.com/db/npclist.html?name=" . str_replace(" ","+",$npcName);
		
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$search_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $illiaHTML = curl_exec($ch);
    
    //check for empty result
    //if (strpos("<h2>Nothing Found</h2>",$illiaHTML)) // old
		if (strpos("No results found for the criteria provided",$illiaHTML))
    {
        return 0;
    }
    
    //enumerate search results
		
		// OLD: syntax
		/*
    <a href="search.shtml?id=3445">the froglok king</a></td> 
    <a href="search.shtml?id=2075">an avenging caitiff [<i>Castle Mistmoore</i>]</a></td><td standardistaTableSortingInnerText="30">30 -  30</td><td>Monster</td><td><a href="/search.shtml?zone=63">Castle Mistmoore</a></td></tr>
    $regex = '/<a href=\"search.shtml\?id=(.*?)\">(.*?)<\/a><\/td>(.*?)<a href=\"\/search.shtml\?zone=(.*?)\">(.*?)<\/a><\/td>/s'; 
		*/
		
		// NEW: syntax
		/*
		 <tr class="dr">
      <td standardistatablesortinginnertext="Baobob Miller" class="nobr">
        <img src="//zam.zamimg.com/i/icon-picture.gif" width="7" height="9" hspace="7" border="0" alt="Picture Included">
        <b><a href="/db/npc.html?id=2981">Baobob Miller</a></b>
        
      </td>
      <td standardistatablesortinginnertext="25">25 - 25</td>
      <td>Quest NPC</td>
      <td>Qeynos Hills</td>
    </tr>
		*/
		$regex = '/<a href=\"\/db\/npc\.html\?id=(.*?)\">(.*?)<\/a>/s';
    $ret = preg_match_all($regex, $illiaHTML, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $names = $srcBlock[2];
        //$zones = $srcBlock[5];

        // just one result
        if (count($IDs) == 1) {
            //check for [zone name]
            if (strpos($names[0],"[") && strpos($names[0],"]")) {
                $names[0] = substr($names[0],0,strpos($names[0],"[")-1);
            }
            return array($IDs[0],$names[0]);
        }
        
        $NPCs   = array();
        
        //multiple results:
        foreach ($IDs as $i => $ID) {
            //remove any "Fabled" results, and restrict to known zones
            if ((strpos($names[$i]," Fabled ") === false) && (strpos($names[$i]," pet") == false && !in_array($IDs[$i],$skipNPCIDs)) /*&& 
                (array_key_exists($zones[$i],$classicZones) || 
                array_key_exists($zones[$i],$kunarkZones) ||
                array_key_exists($zones[$i],$veliousZones))*/
                ) {
                //add to keeper array, check for [zone name]
                if (strpos($names[$i],"[") && strpos($names[$i],"]")) {
                    $names[$i] = substr($names[$i],0,strpos($names[$i],"[")-1);
                }
								if (($exact && $names[$i] == $npcName) || !$exact)
								  $NPCs[$IDs[$i]] = $names[$i];
            }
        }
        
        //pick lowest remaining ID
        if (count($NPCs) == 0) { return 0; }
        
        if (count($NPCs) >= 1) {
            if (count($NPCs) > 1 ) { 
                echo "  WARNING: Multiple Illia IDs, picking min:\n";
            }
            $i = min(array_keys($NPCs));
            return array($i, $NPCs[$i]);
        }
        
    } else {
        return 0;
    }
}

function getEmuID($npcName,$exact)
{
    global $skipNPCIDs;
    
    //note: this ID good with the following websites:
    //http://www.allakabor.com/smf/index.php?action=eqnpc&id=$ID (Al'Kabor Server, seems scraped from PEQ)
    //http://axclassic.com/~tdayin/TRinfo/npc.php?id=$ID (AXClassic DB Viewer)
    //http://mqemulator.net/npc.php?id=$ID (PEQ DB Viewer)
    
    $userAgent = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12";
    $cookieJar = "cookie.txt";
    
    $search_url = "http://mqemulator.net/npcs.php?name=" . str_replace(" ","+",$npcName);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$search_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $emuHTML = curl_exec($ch);
    
    //check for empty result
    if (strpos("No results match your search<br>",$emuHTML))
    {
        return 0;
    }
    
    //check for single (direct) result
    $regex = "/<input type='hidden' name='id' value='(.*?)'>/";
    if (preg_match($regex, $emuHTML, $directResult)) {
        $regex = "/<title>MQEmulator\.net \&bull;  - (.*?)<\/title>/";
        if (preg_match($regex, $emuHTML, $titleResult)) {
            return array($directResult[1],$titleResult[1]);
        }
    }
    
    //enumerate search results
    //<td class='forum'><a href='npc.php?id=32076'>The Fabled Efreeti Lord Djarn</a></td>
    $regex = '/<td class=\'forum\'><a href=\'npc.php\?id=(.*?)\'>(.*?)<\/a><\/td>/s';   
    $ret = preg_match_all($regex, $emuHTML, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $names = $srcBlock[2];
        
        // just one result
        if (count($IDs) == 1) {
            return $IDs[0];
        }
        
        $NPCs   = array();
        
        //multiple results:
        foreach ($IDs as $i => $ID) {
            //remove any "Fabled" results
            if (strpos($names[$i]," Fabled ") === false && !in_array($IDs[$i],$skipNPCIDs)) {
                //add to keeper array
								if (($exact && $names[$i] == $npcName) || !$exact)
                  $NPCs[$IDs[$i]] = $names[$i];
            }
        }
        
        //pick lowest remaining ID
        if (count($NPCs) == 0) { return 0; }
        
        if (count($NPCs) >= 1) {
            if (count($NPCs) > 1 ) { 
                echo "  WARNING: Multiple Emu IDs, picking min: <br>\n";
            }
            $i = min(array_keys($NPCs));
            return array($i, $NPCs[$i]);
        }
        
    } else {
        return 0;
    }

}

function getIlliaHTML($illiaID)
{
    //$illiaAddress =  "http://eqbeastiary.allakhazam.com/search.shtml?id=" . $illiaID; // old
		$illiaAddress = "http://everquest.allakhazam.com/db/npc.html?id=" . $illiaID;
    print $illiaAddress . "  <br>\n";
    
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";
    
    // load illia webpage
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$illiaAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $illiaHTML = curl_exec($ch);
		
    if (!$illiaHTML) {
    	return 0;
    }
    
    //strip down to relevant part
    
    // extract
    $blockStart = "<div class=\"mobDisplay\">";
    $blockEnd   = "Report a correction";
    $regex = '/' . $blockStart . '(.*?)' . $blockEnd . '/s';
    
    $ret = preg_match($regex, $illiaHTML, $illiaBlock);
    
    if ($ret) {
        return $illiaBlock[1];
    } else {
        return 0;
    }
}

function getIlliaIMGLink($illiaHTML)
{
    // extract
    $blockStart = "<img src=\"";
    $blockEnd   = "\" alt=\"Screenshot\" id=\"ssMainPic\"\>";
    $regex = '/' . $blockStart . '(.*?)' . $blockEnd . '/s';
    
    $ret = preg_match($regex, $illiaHTML, $illiaImgLink);

    if ($ret) {
        return $illiaImgLink[1];
    } else {
        return 0;
    } 
}

function getIlliaDescription($illiaHTML)
{    
    // match regex
    $blockStart = "id=\"ssMainPic\"><br><br>(.*?)<\/div><\/div><p>";
    $blockEnd   = "<\/p><div class=\"wiki\-cats\">";
    $regex = '/' . $blockStart . '(.*?)' . $blockEnd . '/s';
    
    $ret = preg_match($regex, $illiaHTML, $illiaDescription);

    // try <p> on upper line
    if (!$ret) {
    $blockStart = "id=\"ssMainPic\"><br><br>(.*?)<p>";
    $blockEnd   = "<\/p><div class=\"wiki\-cats\">";
    $regex = '/' . $blockStart . '(.*?)' . $blockEnd . '/s';
    
    $ret = preg_match($regex, $illiaHTML, $illiaDescription);
    }
    
    if ($ret) {
        //check for blank description
        if (strlen($illiaDescription[2] == 0)) {
            return "Description needed.";
        }
        if ( strpos($illiaDescription[2],"<",1) && strpos($illiaDescription[2],">",1) ) {
            return "Description needed.";
        } else {
            return trim($illiaDescription[2]);
        }
    } else {
        return "Description needed.";
    } 
}

function getIlliaRelatedQuests($illiaHTML)
{
  global $idCutoffs;
  
  $blockStart = "http:\/\/everquest\.allakhazam\.com\/db\/quest\.html\?quest=(.*?)\">";
  $blockEnd   = "<\/a>";
  $regex = '/' . $blockStart . '(.*?)' . $blockEnd . '/';
  
  $ret = preg_match_all($regex, $illiaHTML, $illiaQuests);
  
  if ($ret) {
    $questList = array();
    
    foreach ($illiaQuests[2] as $i => $quest) {
      $questID = $illiaQuests[1][$i];
      
      if ($questID <= $idCutoffs["Quest"]) {
        list($questName,$questLink) = getQuestName($quest);
        $questList[] = $questLink;
      } else {
          print "WARNING: Excluding quest: " . $quest . " (" . $questID . ")  <br>\n";
      }
    }
    
    return $questList;
  } else {
    return 0;
  } 
}

function getIlliaGoodsSold($illiaHTML)
{
  global $idCutoffs;
  global $itemIDOk;
  
  $regex = '/<b>Goods sold(.*?):<\/b>(.*?)<div class="mobzones">/s';
  $ret = preg_match($regex, $illiaHTML, $illiaBlock);
  
  if ($ret) {
    $regex = "/<a href=\"http:\/\/everquest\.allakhazam\.com\/db\/item\.html\?item=(.*?)\">"
             . "(.*?) alt=\"icon\"> (.*?)<\/a>(\s*?)<i>(.*?)<\/i>/s";
             
    $ret = preg_match_all($regex,$illiaBlock[0],$illiaGoodsSold);
    
    if ($ret) {
      $goodsList = array();
      
      foreach ($illiaGoodsSold[1] as $i => $itemID) {
        $itemName  = $illiaGoodsSold[3][$i];
        $itemPrice = $illiaGoodsSold[5][$i];
        
        if (substr($itemName,0,6) == "Spell:") {
          $itemLink = "[[" . substr($itemName,7) . "|" . $itemName . "]]";
        } else if (substr($itemName,0,5) == "Song:") {
          $itemLink = "[[" . substr($itemName,6) . "|" . $itemName . "]]";
        } else {
          $itemLink = "{{:" . $itemName . "}}";
        }
        
        if ($itemID <= $idCutoffs["ItemSafe"] || in_array($itemID,$itemIDOk)) {
          if ($itemPrice != "")
            $goodsList[] = str_pad($itemLink,40) . "<span class='ddp'>(" . $itemPrice . ")</span>"; 
          else
            $goodsList[] = str_pad($itemLink,40); 
        } else {
          print "WARNING: Excluding item: " . $itemName . " (" . $itemID . ")  <br>\n";
        }
      }
      
      return $goodsList;
    }
  } else {
    return 0;
  }

}

function getEmuHTML($emuID, $type="NPC")
{
    if ($type == "NPC") 
      $emuAddress =  "http://mqemulator.net/npc.php?id=" . $emuID;
    if ($type == "Item")
      $emuAddress =  "http://mqemulator.net/item.php?id=" . $emuID;
      
    print $emuAddress . "  <br>\n";
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";

    // load emu webpage
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$emuAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $emuHTML = curl_exec($ch);
		
    if (!$emuHTML) {
    	return 0;
    }
    
    // extract relevant part
    $emuBlock = substr($emuHTML,strpos($emuHTML,"div class='rbox_main'>"));
    $emuBlock = substr($emuBlock,0,strpos($emuBlock,"<tr><td class='footer'>"));
    
    // if NPC, get some of the new subpages and add on
    if ($type == "NPC")
    {
      $emuAddress = "http://mqemulator.net/npc.php?id=" . $emuID . "&view=spawnlocations";

      // load emu webpage
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
      curl_setopt($ch, CURLOPT_URL,$emuAddress);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
      curl_setopt($ch, CURLOPT_FAILONERROR, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_AUTOREFERER, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      $emuHTML = curl_exec($ch);

      if ($emuHTML)
	$emuBlock = $emuBlock . substr($emuHTML,strpos($emuHTML,"div class='rbox_main'>"));

      $emuAddress = "http://mqemulator.net/npc.php?id=" . $emuID . "&view=itemdropodds";

      // load emu webpage
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
      curl_setopt($ch, CURLOPT_URL,$emuAddress);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
      curl_setopt($ch, CURLOPT_FAILONERROR, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_AUTOREFERER, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      $emuHTML = curl_exec($ch);

      if ($emuHTML)
	$emuBlock = $emuBlock . substr($emuHTML,strpos($emuHTML,"div class='rbox_main'>"));
    }
    
    return $emuBlock;
}

function getStatsBox($emuName, $npcName, $emuHTML)
{
    global $flagExclusionList;
    global $raceNames;
    $tagLen = 19;
    
    //create stats box
    $statsBox = "";
    if( strlen($emuName) ) {
      $statsBox .= str_pad("| name",$tagLen) . " = " . $emuName . "\n";
    } else {
      $statsBox .= str_pad("| name",$tagLen) . " = " . $npcName . "\n";
    }
    
    //race, class, level, agro radius, run speed
    if (preg_match('/Race:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $race = trim($regMatch[1]);
        if (in_array($race,$raceNames)) {
            $statsBox .= str_pad("| race",$tagLen) . " = [[" . trim($regMatch[1]) . "]]\n";
        } else {
            $statsBox .= str_pad("| race",$tagLen) . " = " . trim($regMatch[1]) . "\n";
        }
    } else {
      $statsBox .= str_pad("| race",$tagLen) . " = ?\n";
    }
    if (preg_match('/Class:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        if (substr(trim($regMatch[1]),0,2) == "GM") {
	    $statsBox .= str_pad("| class",$tagLen) . " = GM [[" . substr(trim($regMatch[1]),3) . "]]\n";
	    $class = "GM";
	  } else {
          $statsBox .= str_pad("| class",$tagLen) . " = [[" . trim($regMatch[1]) . "]]\n";
	    $class = trim($regMatch[1]);
	  }
    } else {
      $statsBox .= str_pad("| class",$tagLen) . " = ?\n";
    }
    
    if (preg_match('/Level:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| level",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| level",$tagLen) . " = ?\n";
    }
    if (preg_match('/Agro Radius:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| agro_radius",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| agro_radius",$tagLen) . " = ?\n";
    }
    if (preg_match('/Run Speed:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| run_speed",$tagLen) . " = " . trim($regMatch[1]) . "\n\n";
    } else {
      $statsBox .= str_pad("| run_speed",$tagLen) . " = ?\n\n";
    }
    
    //zone, spawn chance and loc
    if (preg_match_all("/<a href='zone\.php\?name=(.*?)' title='(.*?)'>(.*?)<\/a>/s", $emuHTML, $regMatch) ) {
        $zones = array_unique($regMatch[3]);
        
        //map eqemu zone names to wiki zone names
        foreach ($zones as $i => $zone) {
          list($zonePagename,$zoneLink,$zHeader,$zFooter) = getZoneName($zone);
          $zones[$i] = $zoneLink;
        }
        $statsBox .= str_pad("| zone",$tagLen) . " = " . implode(", ",$zones) . "\n";
    } else {
      $statsBox .= str_pad("| zone",$tagLen) . " = {{:UNKNOWN}}\n";
    }
    if (preg_match_all("/<td class='forum' nowrap>(.*?)&nbsp;&nbsp;<img/s", $emuHTML, $regMatch) ) {
        $locs = array_unique($regMatch[1]);
        
        $spawns = array();
        
        foreach ($locs as $loc) {
	    if (substr($loc,0,1) != "(")
	      continue;
	      
            $subsetHTML = substr($emuHTML,strpos($emuHTML,$loc),50);
            $ret = preg_match('/nowrap>(.*?)\%<\/td>/', $emuHTML, $regMatch);
            if ($ret && $class != "Shopkeeper" && $class != "GM") {
              $spawns[] = $regMatch[1] . "% @ " . $loc . "";
            }
            if ($ret && ($class == "Shopkeeper" || $class == "GM")) {
              $spawns[] = "" . $loc . "";
            }
        }
        
        $statsBox .= str_pad("| location",$tagLen) . " = " . implode(", ",$spawns) . "\n\n";
    } else {
      $statsBox .= str_pad("| location",$tagLen) . " = ?\n\n";
    }		
    
    //defensive stats
    if (preg_match('/AC:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| AC",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| AC",$tagLen) . " = ?\n";
    }
    if (preg_match('/HP:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| HP",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| HP",$tagLen) . " = ?\n";
    }
    if (preg_match('/HP Regen:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| HP_regen",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| HP_regen",$tagLen) . " = ?\n";
    }
    if (preg_match('/Mana Regen:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| mana_regen",$tagLen) . " = " . trim($regMatch[1]) . "\n\n";
    } else {
      $statsBox .= str_pad("| mana_regen",$tagLen) . " = ?\n\n";
    }

    //offensive stats
    if (preg_match('/Attacks per round:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| attacks_per_round",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| attacks_per_round",$tagLen) . " = ?\n";
    }
    if (preg_match('/Attack speed:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| attack_speed",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| attack_speed",$tagLen) . " = ?\n";
    }
    if (preg_match('/Damage per hit:(.*?)<br>/s', $emuHTML, $regMatch) ) {
        $statsBox .= str_pad("| damage_per_hit",$tagLen) . " = " . trim($regMatch[1]) . "\n";
    } else {
      $statsBox .= str_pad("| damage_per_hit",$tagLen) . " = ?\n";
    }
    
    //stats and resists (meaningless from PEQ DB, just scaled from level)
    //if (preg_match('/STR:(.*?)<br>/s', $emuHTML, $regMatch) ) {
    //    $statsBox .= "| stats = " . trim($regMatch[1]) . "\n";
    //}
    //if (preg_match('/MAGIC:(.*?)<br>/s', $emuHTML, $regMatch) ) {
    //    $statsBox .= "| resistlevel = " . trim($regMatch[1]) . "\n";
    //}
    
    //special/flags
    $regex = "/<img src='http:\/\/mqemulator.net\/images\/check1\.png' valign='middle'> (.*?)<br>/";
    if (preg_match_all($regex, $emuHTML, $regMatch)) {
        $flags = array();
            
        foreach ($regMatch[1] as $flag) {
            if (!in_array($flag,$flagExclusionList)) {
                $flags[] = $flag;
            }
        }

        if (!count($flags)) {
            $flags[] = "None";
        }
        
        $statsBox .= str_pad("| special",$tagLen) . " = " . implode(", ",$flags) . "\n";
    } else {
      $statsBox .= str_pad("| special",$tagLen) . " = ?\n";
    }
    
    $statsBox .= "\n";
    
    return $statsBox;
}

function getNPCDropListNew($emuHTML)
{
  $dropList = array();

  // get drop names
  $regex = '/<a style=\"font-weight: bold; color:0000BB;\" href=\"item\.php\?id=(.*?)\">(.*?)</s';
  $ret = preg_match_all($regex, $emuHTML, $drops);
  
  if (!$ret)
    return 0;
    
  $dropNames = $drops[2];
  
  // get drop probabilities (overall)
  $probs = substr($emuHTML,strpos($emuHTML,"Overall Drop Rate:"));
  $probs = substr($probs,strpos($probs,"data: ["));
  $probs = substr($probs,8,strpos($probs,"]")-1-8);
  $probs = trim($probs);
  if (substr($probs,-1) == ",")
    $probs = substr($probs,0,strlen($probs)-1);
    
  $probs = split(",",$probs);
  
  if (count($probs) != count($dropNames)) {
    echo "  Error: Drop names and prob mismatch.<br>";
    return 0;
  }
  
  foreach ($dropNames as $k => $itemName) {
    //rarity string
    //$totProb = $prob[1]/100 * $mult[1] * $itemProb[1]/100;
    $totProb = $probs[$k] / 100;
    $totProbStr = vsprintf("%3.1f",$probs[$k]);
    
    if ($totProb >= 1.0) {
      $rarity = "Always";
    } elseif ($totProb < 1.0 && $totProb >= 0.5) {
      $rarity = "Common";
    } elseif ($totProb < 0.5 && $totProb >= 0.25) {
      $rarity = "Uncommon";
    } elseif ($totProb < 0.25 && $totProb >= 0.05) {
      $rarity = "Rare";
    } elseif ($totProb < 0.05) {
      $rarity = "Ultra Rare";
    }
		    
    //return None if this is a post-classic loot table
    if ($itemName == "Semi Precious Stone Chunk") { //"Kyv" table
      return 0;
    }
										
    if (substr($itemName,0,6) == "Spell:") {
      $itemLink = "[[" . substr($itemName,7) . "|" . $itemName . "]]";
    } else if (substr($itemName,0,5) == "Song:") {
      $itemLink = "[[" . substr($itemName,6) . "|" . $itemName . "]]";
    } else {
      $itemLink = "{{:" . $itemName . "}}";
    }
		    
    //only link items that already exist on the wiki
    //$itemCheck = wikiPageExists("http://wiki.project1999.org/index.php/" . 
    //                            str_replace(" ","_",$itemName[2]));
                                         
    //if ($itemCheck) {
    $dropList[] = str_pad($itemLink,35) . "<span class='drare'>(" . $rarity . 
      ")</span> <span class='ddb'>[Overall: " . $totProbStr. "%]</span>";  
   }
   
   return $dropList;
}

function getNPCDropList($emuHTML)
{    
    //extract drops section
    $blockStart = "<table class='forum' id='result3' style='display: none;'>";
    $blockEnd = "<table class='forum' id='result4' style='display: none;'>";
    $regex = '/' . $blockStart . '(.*?)' . $blockEnd . '/s';
    
    $ret = preg_match($regex, $emuHTML, $dropSubSec);
    
    if ($ret) {
        //split into each table
        $tableStart = "<tr><td class='forum'><b>Drop Table: ";
        $tableEnd   = "<br><br><br>";
        $regex = '/' . $tableStart . '(.*?)' . $tableEnd . '/s';
        
        $ret = preg_match_all($regex, $dropSubSec[1], $dropTables);
        
        $dropList = array();
        
        //get table prob, mult, and item list
        foreach ($dropTables[1] as $i => $dropTable) {
            $tableNum = substr($dropTable,0,1);
            
            if ($tableNum != ($i+1)) {
                echo "  --ERROR-- 0\n";
            }
            
            if (!preg_match("/Probability: (.*?)\%/",$dropTable,$prob)) {
                echo "  --ERROR-- 1\n";
            }
            if (!preg_match("/Multiplier: (.*?)<\/b>/",$dropTable,$mult)) {
                echo "  --ERROR-- 2\n";
            }
            
            //split into each item in this table
            if (!preg_match_all("/<tr class='highlight'>(.*?)<\/tr>/s",$dropTable,$itemBlocks)) {
                echo "  --ERROR-- 3\n";
            }
            
            foreach ($itemBlocks[1] as $itemBlock) {
                if (!preg_match("/nowrap><b>(.*?)\%<\/b> <\/td>/",$itemBlock,$itemProb)) {
                    echo "  --ERROR-- 4\n";
                }
                if (!preg_match("/<a href='item\.php\?id=(.*?)'> (.*?)<\/a><\/td>/",$itemBlock,$itemName)) {
                    echo "  --ERROR-- 5\n";
                }  
                
                //rarity string
                $totProb = $prob[1]/100 * $mult[1] * $itemProb[1]/100;
                if ($totProb >= 1.0) {
                    $rarity = "Always";
                } elseif ($totProb < 1.0 && $totProb >= 0.5) {
                    $rarity = "Common";
                } elseif ($totProb < 0.5 && $totProb >= 0.25) {
                    $rarity = "Uncommon";
                } elseif ($totProb < 0.25 && $totProb >= 0.05) {
                    $rarity = "Rare";
                } elseif ($totProb < 0.05) {
                    $rarity = "Ultra Rare";
                }
		    
								//return None if this is a post-classic loot table
								if ($itemName[2] == "Semi Precious Stone Chunk") { //"Kyv" table
													return 0;
										}
										
								if (substr($itemName[2],0,6) == "Spell:") {
									$itemLink = "[[" . substr($itemName[2],7) . "|" . $itemName[2] . "]]";
								} else if (substr($itemName[2],0,5) == "Song:") {
									$itemLink = "[[" . substr($itemName[2],6) . "|" . $itemName[2] . "]]";
								} else {
									$itemLink = "{{:" . $itemName[2] . "}}";
								}
		    
                //only link items that already exist on the wiki
                //$itemCheck = wikiPageExists("http://wiki.project1999.org/index.php/" . 
                //                            str_replace(" ","_",$itemName[2]));
                                         
                //if ($itemCheck) {
                    $dropList[] = str_pad($itemLink,35) . "<span class='drare'>(" . $rarity . 
                                  ")</span> <span class='ddb'>[" . $tableNum . "] " .
                                   $mult[1] . "x ". $prob[1] . "% (" . $itemProb[1] . "%)</span>";  
                //} else {
                //    $dropList[] = str_pad("" . $itemName[2],35) . " <span class='drare'>(" . $rarity . 
                //                   ")</span> <span class='ddb'>[" . $tableNum . "] " .
                 //                  $mult[1] . "x ". $prob[1] . "% (" . $itemProb[1] . "%)</span>";           
                //}
            }
        }
        
        return $dropList;
    } else {
        return 0;
    } 
}

function getFactions($emuHTML)
{
    //get faction hits: subsection
    $factionContent = "";
    
    if (preg_match("/<b>Faction Hits:<\/b><br>(.*?)<\/table>/s",$emuHTML,$regMatch))
    {
        $factionContent = $regMatch[1];
    }
    
    $regex = "/<a href='faction\.php\?id=(.*?)'>(.*?)<\/a> <i style='color(.*?)'>\((.*?)\)<\/i>/s";
    
    if (preg_match_all($regex, $factionContent, $regMatch)) {
        $factions = $regMatch[2];
        $adjusts  = $regMatch[4];
        
        $factionAdjusts = array();
        
        foreach ($factions as $i => $faction) {
          list($fname,$flink) = getFactionName($faction);
          $factionAdjusts[$flink] = $adjusts[$i];
        }
    } else {
        //if (strpos($emuHTML,"No faction hits.") !== false) {
          $factionAdjusts = 0;
        //}
    }
    
    return $factionAdjusts;
}

function writeNPCPage($npcName, $illiaImgLink, $description, $relatedQuests, $goodsSold,
                      $statsBox, $dropList, $factionAdjusts, $emuID, $illiaID, $emuHTML)
{
    if (strpos($statsBox," = [[Shopkeeper]]") !== false) {
      $NPCPage = "{{MerchantPage\n\n";
    } else {
      $NPCPage = "{{Namedmobpage\n\n";
    }
    
    //screenshot image
    $imgExtension = explode(".",$illiaImgLink);
    $imgExtension = $imgExtension[count($imgExtension)-1];
    $imgName = "npc_" . str_replace(" ","_",strtolower($npcName)) . "." . $imgExtension;
    
    $NPCPage .= "| imagefilename     = " . $imgName . "\n\n";
    
    //IDs
    $NPCPage .= "| emu_id            = " . $emuID . "\n";
    $NPCPage .= "| illia_id          = " . $illiaID . "\n\n";
    
    //stats box
    $NPCPage .= $statsBox;
    
    //description
    $NPCPage .= "| description = " . $description . "\n";
    
    //known loot or goods sold (namedmob/merchant)
    if (strpos($statsBox," = [[Shopkeeper]]") === false) {
      //known loot
      $NPCPage .= "\n| known_loot = \n\n";
      
      if ($dropList) {
          foreach ($dropList as $i => $drop) {
              if ($i == 0) {
                  $NPCPage .= "<ul><li>  " . $drop . "\n";
              } else {
                  $NPCPage .= "</li><li> " . $drop . "\n";
              }
          }
          $NPCPage .= "</li></ul>\n";
      } else {
          $NPCPage .= "* None\n";
      }
    } else {
      //goods sold
      $NPCPage .= "\n| items_sold = \n\n";
      
      if ($goodsSold) {
          foreach ($goodsSold as $i => $good) {
              if ($i == 0) {
                  $NPCPage .= "<ul><li>  " . $good . "\n";
              } else {
                  $NPCPage .= "</li><li> " . $good . "\n";
              }
          }
          $NPCPage .= "</li></ul>\n";
      } else {
          $NPCPage .= "* None\n";
      }
    }
    
    //factions and opposing factions
    if ($factionAdjusts) {
        $NPCPage .= "\n| factions = \n\n";
        $fCount = 0;
        foreach ($factionAdjusts as $flink => $adjust) {
            //if we loose faction these are the NPCs pro factions
            if ($adjust < 0) {
                $NPCPage .= "* " . $flink . " <span class='profac'>(" . $adjust . ")</span>\n";
                $fCount++;
            }
        }
        if (!$fCount) {
            $NPCPage .= "* None\n";
        }
         
        $NPCPage .= "\n| opposing_factions = \n\n";  
        $fCount = 0;
        foreach ($factionAdjusts as $flink => $adjust) {
            //if we gain faction these are the NPCs opposing factions
            if ($adjust > 0) {
                $NPCPage .= "* " . $flink . " <span class='oppfac'>(" . $adjust . ")</span>\n";
                $fCount++;
            }
        }
        if (!$fCount) {
            $NPCPage .= "* None\n";
        }
        
    } else {
        $NPCPage .= "\n| factions = \n\n";
        $NPCPage .= "* None\n";
	$NPCPage .= "\n| opposing_factions = \n\n";
	$NPCPage .= "* None\n";
    }
    
    //related quests
    if ($relatedQuests) {
        $NPCPage .= "\n| related_quests = \n\n";
        
        foreach ($relatedQuests as $questLink) {
            $NPCPage .= "* " . $questLink . "\n";
        }
    } else {
        $NPCPage .= "\n| related_quests = \n\n";
        $NPCPage .= "* None\n";
    }
    
    $NPCPage .= "\n}}\n\n";
    
    //categories
    if (preg_match_all("/<a href='zone\.php\?name=(.*?)'>(.*?)<\/a>/s", $emuHTML, $regMatch) ) {
        $zones = array_unique($regMatch[2]);
        
        //map eqemu zone names to wiki zone names
        foreach ($zones as $i => $zone) {
            list($zonePagename,$zoneLink, $zHeader,$zFooter) = getZoneName($zone);
            
            //preserve unique city zones for bestiary categories
            if (strpos($zone,"East") !== false && strpos($zonePagename,"East") === false) 
              { $zonePagename = "East " . $zonePagename; }
            if (strpos($zone,"West") !== false && strpos($zonePagename,"West") === false) 
              { $zonePagename = "West " . $zonePagename; }
							
            if (strpos($zone,"Northern") !== false && strpos($zonePagename,"Northern") === false) 
              { $zonePagename = "Northern " . $zonePagename; }   
            if (strpos($zone,"Southern") !== false && strpos($zonePagename,"Southern") === false) 
              { $zonePagename = "Southern " . $zonePagename; }
							
            if (strpos($zone,"North") !== false && strpos($zonePagename,"North") === false) 
              { $zonePagename = "North " . $zonePagename; }   
            if (strpos($zone,"South") !== false && strpos($zonePagename,"South") === false) 
              { $zonePagename = "South " . $zonePagename; }
							
            if (strpos($zone,"Foreign Quarter") !== false && strpos($zonePagename,"Foreign Quarter") === false) 
              { $zonePagename = $zonePagename . " Foreign Quarter"; }
            if (strpos($zone,"Commons") !== false && strpos($zonePagename,"Commons") === false) 
              { $zonePagename = $zonePagename . " Commons"; }
            if (strpos($zone,"3rd Gate") !== false && strpos($zonePagename,"3rd Gate") === false) 
              { $zonePagename = $zonePagename . " Third Gate"; }
							
            if (strpos($zone,"Palace") !== false && strpos($zonePagename,"Palace") === false) 
              { $zonePagename = $zonePagename . " Palace"; }		
							
            $NPCPage .= "[[Category:" . $zonePagename . "]]\n";
        }
        $NPCPage .= "\n";
    } else {
      $NPCPage .= "[[Category:PUT_ZONENAME_HERE]]\n";
    }
    
    return $NPCPage;
}

function npcPage($npcName,$exact)
{
    // get Illia ID and Emu ID
    list($illiaID,$illiaName) = getIlliaID($npcName,$exact);
    list($emuID,$emuName)     = getEmuID($npcName,$exact);
    
    if ($illiaName != $emuName) {
        echo "ERROR: Name mismatch ($illiaName) ($emuName).<br>\n";
    }
    if (!$illiaID)
      echo "ERROR: Could not find NPC on Illia DB (check spelling)..<br>\n";
    if (!$emuID)
      echo "ERROR: Could not find NPC on Emu DB (check spelling)..<br>\n";

    echo "[$illiaID] [$emuID] $npcName ($illiaName).<br>\n";
    
    // load Illia page
    $illiaHTML    = getIlliaHTML($illiaID);
    $emuHTML      = getEmuHTML($emuID);
    
    if ($illiaHTML && $emuHTML) {
        // parse Illia page
        $illiaImgLink  = getIlliaIMGLink($illiaHTML);
        $description   = getIlliaDescription($illiaHTML);
        $relatedQuests = getIlliaRelatedQuests($illiaHTML);
        $goodsSold     = getIlliaGoodsSold($illiaHTML);
				
        // parse emu page
        $statsBox       = getStatsBox($emuName, $npcName, $emuHTML);
				
        if (!$goodsSold) {
          $dropList     = getNPCDropListNew($emuHTML);
        } else {
          $dropList     = array(); //empty
        }
        $factionAdjusts = getFactions($emuHTML);
        
        $npcPage = writeNPCPage($illiaName, $illiaImgLink, $description, $relatedQuests, $goodsSold,
                                $statsBox, $dropList, $factionAdjusts, $emuID, $illiaID, $emuHTML);
        
        return array($npcPage,$illiaImgLink);
    }

    return array('Error: Failed to make page.',0);
}

function npcPageByID($illiaID,$emuID)
{
    // load pages
    $illiaHTML    = getIlliaHTML($illiaID);
    $emuHTML      = getEmuHTML($emuID);
    
    // grab the name
    $regex = "/<h1>(.*?) &nbsp;/";
    $ret = preg_match($regex, $illiaHTML, $nameBlock);
    $npcName = trim($nameBlock[1]);
    
    echo "[$illiaID] [$emuID] $npcName.<br>\n";
    
    if ($illiaHTML && $emuHTML) {
        // parse Illia page
        $illiaImgLink  = getIlliaIMGLink($illiaHTML);
        $description   = getIlliaDescription($illiaHTML);
        $relatedQuests = getIlliaRelatedQuests($illiaHTML);
        $goodsSold     = getIlliaGoodsSold($illiaHTML);
				
        // parse emu page
        $statsBox       = getStatsBox($npcName, $npcName, $emuHTML);
				
        if (!$goodsSold) {
          $dropList     = getNPCDropListNew($emuHTML);
        } else {
          $dropList     = array(); //empty
        }
        $factionAdjusts = getFactions($emuHTML);
        
        $npcPage = writeNPCPage($npcName, $illiaImgLink, $description, $relatedQuests, $goodsSold,
                                $statsBox, $dropList, $factionAdjusts, $emuID, $illiaID, $emuHTML);
        
        return array($npcPage,$npcName,$illiaImgLink);
    }

    return array('Error: Failed to make page.',0);
}

function batchNPCs()
{
    //Snoopy for img DL/UP
    include "./Snoopy.class.php";
    $snoopy = new Snoopy;
        
    $npcNames = readWantedPageList("npcs.txt");
    
    $imgLinks = array();
    $npcPages = array();
    $fNames   = array();
    
    for ($i = 0; $i < count($npcNames); $i++) {
        list($npcPage,$illiaImgLink) = npcPage($npcNames[$i]);
        
        // check for skipped (non-items)
        if ($illiaImgLink) {
            $npcPages[] = $npcPage;
            $imgLinks[] = $illiaImgLink;
        } else {
            $npcPages[] = 0;
        }
        
        //make image filename for save
        $imgExtension = explode(".",$illiaImgLink);
        $imgExtension = $imgExtension[count($imgExtension)-1];
        $fNames[] = "npc_" . str_replace(" ","_",strtolower($npcNames[$i])) . "." . $imgExtension;
    }
    
    // batch download & re-upload images to wiki
    $tmpDir = "c:\\php\\images\\";
    $imgPaths = batchImageDownload($imgLinks,$snoopy,$tmpDir,$fNames);
    batchImageUpload($imgPaths);
    
    // write XML
    $xmlFile = fopen("import.npc.xml",'w');
    writeXMLFile($xmlFile, $npcNames, $npcPages);
    fclose($xmlFile);
}

// --------------------------------------------------------------------------------------
// spell - lucy alkabor + lucy eqpc + alla + crys
// --------------------------------------------------------------------------------------

function getAlkaborHTML($spellName)
{
    // get page link
    $spelllistFile = "lucy_alkabor_index.html";
    
    $lines = file_get_contents($spelllistFile);
    
    // <a href="http://lucy.alkabor.com/spell_6.html">Ignite Blood</a><br>
    $regex = "/<a href=\"(.*?)\">" . $spellName . "<\/a><br>/i";
    $ret = preg_match($regex, $lines, $block);
    
    //try ' to ` switch if not found
    if (!$ret) {
        $regex = "/<a href=\"(.*?)\">" . str_replace("'","`",$spellName) . "<\/a><br>/";
        $ret = preg_match($regex, $lines, $block);
    }
    //try : to blank switch if not found
    if (!$ret) {
        $regex = "/<a href=\"(.*?)\">" . str_replace(":","",$spellName) . "<\/a><br>/";
        $ret = preg_match($regex, $lines, $block);
    }
    
    if ($ret) {
        $alkaborAddress = $block[1];
    } else { 
        echo "ERROR: Spell not found on AlKabor index.";
        return 0;
    }
    
    // load webpage
    print $alkaborAddress . "  <br>\n";
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$alkaborAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $alkaborHTML = curl_exec($ch);
    
    if (!$alkaborHTML) {
    	return 0;
    } else {
        return $alkaborHTML;
    }
}

function getCrysSpellHTML($spellName)
{
    $userAgent = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12";
    $cookieJar = "cookie.txt";
    
    $search_url = "http://crys.org/everquest/spells/spell_search.asp?Spell+Name=" . 
                  str_replace(" ","+",$spellName);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$search_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $crysSpellHTML = curl_exec($ch);
    
    //check for empty result
    if (strpos("Sorry there seems to be no spells containing",$crysSpellHTML))
    {
        return 0;
    }
    
    //enumerate search results
    //<a href="spell_details.asp?Spell+Name++ID=992"><font face="Times New Roman" size="4">
    //Kelin's Lucid Lullaby
    //</font></a></td>
    $regex = '/<a href="spell_details.asp\?Spell\+Name\+\+ID=(.*?)"><font face="Times New Roman" size="4">\s+' . 
             $spellName . '\s+<\/font>/i';   
    $ret = preg_match($regex, $crysSpellHTML, $srcBlock);

    if ($ret) {
        $ID   = $srcBlock[1];
        
        //retrieve HTML
        $crysSpellAddress = "http://crys.org/everquest/spells/spell_details.asp?Spell+Name++ID=" . $ID;
        print $crysSpellAddress . "  <br>\n";
        
        // load webpage    
        $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
        $cookieJar = "cookie.txt";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($ch, CURLOPT_URL,$crysSpellAddress);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $crysSpellHTML = curl_exec($ch);
        
        if (!$crysSpellHTML) {
        	return 0;
        } else {
            return $crysSpellHTML;
        }
        
    } else {
        return 0;
    } 
}

function getLucySpellHTML($alkaborHTML)
{
    //get link from alkabor html
    $regex = "/<a href=\"http:\/\/lucy.allakhazam.com\/spell\.html\?id=(.*?)\">EQPC Lucy's page for this spell<\/a>/s";

    $ret = preg_match($regex, $alkaborHTML, $block);
    
    if ($ret) {
        $lucySpellAddress = "http://lucy.allakhazam.com/spell.html?id=" . $block[1];
    } else { 
        echo "ERROR: Lucy spell page link not found on Alkabor page.";
        return 0;
    }
    
    // get lucy cookie
    print $lucySpellAddress . "  <br>\n";
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";
    
    $lucyAddress = "http://lucy.allakhazam.com/";
    $ch = curl_init($lucyAddress);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieJar);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $lucyHTML = curl_exec($ch);    
    
    // load webpage    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$lucySpellAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $lucySpellHTML = curl_exec($ch);
    
    if (!$lucySpellHTML) {
    	return 0;
    } else {
        return $lucySpellHTML;
    }
}

function spellPage($spellName)
{
    global $classNames;
    
    $spellPage = "";
        
    //get html
    $alkaborHTML   = getAlkaborHTML($spellName);
    //$allaSpellHTML = getAllaSpellHTML($alkaborHTML);
    $lucySpellHTML = getLucySpellHTML($alkaborHTML);
    $crysSpellHTML = getCrysSpellHTML($spellName);
    
    // header
    // ------
    $spellPage .= "{{Spellpage|\n\n";
		
		$spellPage .= "| spellname = " . $spellName . "\n";
    
    //TODO SPELLICON (LUCY) - transform to A,B,...
    if (preg_match('/src="http:\/\/lucy\.allakhazam\.com\/gfx\/gem_(.*?).png/s', $lucySpellHTML, $regMatch) ) {

        //cut off trailing 'b'
        if (substr($regMatch[1],-1) == "a" || substr($regMatch[1],-1) == "b" ||
            substr($regMatch[1],-1) == "c" || substr($regMatch[1],-1) == "d") {
            $regMatch[1] = substr($regMatch[1],0,strlen($regMatch[1])-1);
        }
        
        //transform to A,B,...
        $spelliconFile = "spellicons.txt";
        $spellicon = "";
        
        $lines = file($spelliconFile);
        
        foreach ($lines as $line)
        {
            $tLine = explode(" = ",$line);
            
            if ($tLine[0] == $regMatch[1]) {
                $spellicon = substr($tLine[1],0,1);
            }
        }
    
        //add
        $spellPage .= "| spellicon = " . $spellicon . "\n";
    }
    if (preg_match('/Game Description:<\/a><\/td>(.*?)<td width="80%" class="spelldata">(.*?)<\/td>/s', $lucySpellHTML, $regMatch) ) {
        $spellPage .= "| description = " . $regMatch[2] . "\n";
    }
    
    // classes
    // -------
    $spellPage .= "\n| classes = \n\n";
    
    //get class/level list from alkabor
    if (preg_match('/>Classes<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $classes = trim($regMatch[1]);
    }
    
    if ($classes == "None") {
        //npc spell, get caster list from alla
        $spellPage .= "This spell is cast by NPCs only.\n";
    
    } else {
        //pc spell
        $splitList = explode(",",$classes);
        foreach ($splitList as $classLevel) {
            list($class,$level) = explode("/",trim($classLevel));
            
            if ($level <= 60 && array_key_exists($class,$classNames)) {
                $spellPage .= "* [[" . $classNames[$class] . "]] - Level " . $level . "\n";
            }
        }
    }
    
    // items
    // -----
    
    if (preg_match_all('/<a href=\"\/item\.html\?id=(.*?)\">(.*?)<\/a>/s', $lucySpellHTML, $regMatch) )
    {
        $items = $regMatch[2];
        
        //check for Spell: (scrolls), do not include
        $scrollCount = 0;
        foreach ($items as $item) {
            if (strpos($item,"Spell:") !== false || strpos($item,"Song:") !== false) {
                $scrollCount++;
            }
        }
        
        //write section if we have at least 1 non-scroll item
        if ($scrollCount < count($items)) {
            $spellPage .= "\n| items_with_effect = \n\n<ul>";
            foreach ($items as $item) {
                if (strpos($item,"Spell:") === false && strpos($item,"Song:") === false) {
                    $spellPage .= "<li> {{:" . $item . "}}\n</li>";
                }
            }
            $spellPage .= "</ul>\n";
        } //else {
          //  $spellPage .= "\n| items_with_effect = \n\n* None\n";
       // }
    }   
    
    // slots (spell effects)
    $spellPage .= "\n| slots = \n\n";
    
		for ($i = 1; $i < 15; $i++) {
			if (preg_match('/>' . $i . '<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
					$spellPage .= "{{SpellSlotRow | " . $i . " | " . strip_tags(trim($regMatch[1])) . " }}\n";
			}
		}
    
    if (preg_match('/Skill:<\/td>(.*?)<td width="30%">(.*?)<\/td>/s', $lucySpellHTML, $regMatch) ) {
        $spellPage .= "\n| skill = [[Skill " . $regMatch[2] . " | " . $regMatch[2] . "]]\n";
    } else {
        $spellPage .= "\n| skill = \n";
		}

    if (preg_match('/>Mana<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| mana = " . trim($regMatch[1]) . "\n";
    }
    if (preg_match('/>Range to Target<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| range = " . trim($regMatch[1]) . "\n";
    } else {
        $spellPage .= "| range =  \n";
    }
    if (preg_match('/>Casting Time<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| casting_time = " . trim($regMatch[1]) . "\n";
    }
    if (preg_match('/>Fizzle Time<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| fizzle_time = " . trim($regMatch[1]) . "\n";
    }    
    if (preg_match('/>Recast Time<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| recast_time = " . trim($regMatch[1]) . "\n";
    }
    if (preg_match('/>Duration<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| duration = " . trim($regMatch[1]) . "\n";
    }
    if (preg_match('/>Target Type<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| target_type = " . trim($regMatch[1]) . "\n";
    }
    if (preg_match('/>Spell Type<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| spell_type = " . trim($regMatch[1]) . "\n";
    }
    if (preg_match('/>Resist<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $spellPage .= "| resist = " . trim($regMatch[1]) . "\n";
    }
    
    // reagent, focus ("other")
    $reagent = "";
    $focus   = "";
    
    if (preg_match('/>Reagent<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $reagent = "* '''Reagent:''' " . trim(strip_tags($regMatch[1]));
    }
    if (preg_match('/>Focus<\/td><td>(.*?)<\/td>/s', $alkaborHTML, $regMatch) ) {
        $focus = "* '''Focus:''' " . trim(strip_tags($regMatch[1]));
    }
    
    if (strlen($reagent) || strlen($focus))
        $spellPage .= "\n| other = ";
    if (strlen($reagent)) 
        $spellPage .= "\n" . $reagent;
    if (strlen($focus))
        $spellPage .= "\n" . $focus;
    if (strlen($reagent) || strlen($focus))
        $spellPage .= "\n\n";
    
    // cast on messages
    if (preg_match('/Cast on you:<\/td>(.*?)<td width="80%" class="spelldata">(.*?)<\/td>/s', $lucySpellHTML, $regMatch) ) {
        $spellPage .= "\n| msg_cast_on_you = " . $regMatch[2] . "\n";
    } else {
        $spellPage .= "\n| msg_cast_on_you =  \n";
    }
    if (preg_match('/Cast on other:<\/td>(.*?)<td width="80%" class="spelldata">(.*?)<\/td>/s', $lucySpellHTML, $regMatch) ) {
        $spellPage .= "| msg_cast_on_other = " . $regMatch[2] . "\n";
    } else {
        $spellPage .= "| msg_cast_on_other =  \n";
    }
    if (preg_match('/Wears off:<\/td>(.*?)<td width="80%" class="spelldata">(.*?)<\/td>/s', $lucySpellHTML, $regMatch) ) {
        $spellPage .= "| msg_wears_off = " . $regMatch[2] . "\n";
    } else {
        $spellPage .= "| msg_wears_off =  \n";
    }
    
    // where to obtain
    // ---------------
    //purchase merchant list (crys)
    if (!strpos($crysSpellHTML,"If you know of a place this spell can be purchased please email"))
    {
        $regex = '/<td width="20%"><font color="#000000" face="Times New Roman" size="4">\s+(.*?)\s+' . 
                 '<\/font><\/td>\s+' . 
                 '<td width="40%"><font color="#000000" face="Times New Roman" size="4">\s+(.*?)\s+' .
                 '<\/font><\/td>\s+' .
                 '<td width="25%"><font color="#000000" face="Times New Roman" size="4">\s+(.*?)\s+' .
                 '<\/font><\/td>\s+' .
                 '<td width="15%"><font color="#000000" face="Times New Roman" size="4">(.*?)\n(.*?)' .
                 '<\/font><\/td>/';
                 
        $ret = preg_match_all($regex, $crysSpellHTML, $block);
        
        if ($ret)
        {
						$spellPage .= "\n| where_to_obtain = \n\n";
						$spellPage .= "{{SpellWhereTable|\n";
						
            $zones = $block[1];
            $NPCs  = $block[2];
            $areas = $block[3];
            $locs1 = $block[4];
            $locs2 = $block[5];
            
            $skipCount = 0;
            
            foreach ($zones as $i => $zone)
            {
                //fix space in $locs2
                if (substr($locs2[$i],-2) == " )") {
                    $locs2[$i] = substr($locs2[$i],0,strlen($locs2[$i])-2) . ")";
                }
                
                //only add zones we recognize
                list($zonePagename, $zoneLink, $zHeader, $zFooter) = getZoneName($zones[$i]);
                
                if ($zoneLink)
                {
                    if (($i+$skipCount) % 2) {
                      $spellPage .= "{{SpellWhereRow  | " . $zoneLink . " | " . $NPCs[$i] . " | " . 
                                    $areas[$i] . " | " . trim($locs1[$i]) . trim($locs2[$i]) . " }}\n";
                    } else {
                      $spellPage .= "{{SpellWhereRowB | " . $zoneLink . " | " . $NPCs[$i] . " | " . 
                                    $areas[$i] . " | " . trim($locs1[$i]) . trim($locs2[$i]) . " }}\n";  
                    }
                } else {
                    if (strpos($zones[$i],"Plane of Knowledge") ||
                        strpos($zones[$i],"Shadow Haven") ||
                        strpos($zones[$i],"Shar Vahl") )
                    echo " WARNING: Excluding zone: " . $zones[$i] . "    <br>\n";
                    $skipCount++;
                }
            }
            $spellPage .= "}}\n\n";
        }
    }
    elseif (strpos($crysSpellHTML,"Level 50+") && strpos($crysSpellHTML,"Kunark"))
    {
		    $spellPage .= "\n| where_to_obtain = \n\n";
        //kunark 50+ mob drop
        $spellPage .= "* Kunark Level 50+ Mob Drop\n\n";
    }
    elseif (strpos($crysSpellHTML,"Level 50+") && strpos($crysSpellHTML,"Velious"))
    {
		    $spellPage .= "\n| where_to_obtain = \n\n";
        //velious 50+ mob drop
        $spellPage .= "* Velious Level 50+ Mob Drop\n\n";
    }
    elseif (!strpos($crysSpellHTML,"If you know of a quest for this spell please"))
    {
		    $spellPage .= "\n| where_to_obtain = \n\n";
        //quest?
        $spellPage .= "* This spell is obtained via a quest. (which one?)\n\n";
    }
    
    //research(ed)?
    $lines = file("spellresearch.txt");
    
    foreach ($lines as $line)
    {
        if (strpos($line,$spellName))
            //research?
            $spellPage .= "* This spell is crafted with the [[Skill Research|Research Skill]].\n\n";
    }
    
    $spellPage .= "}}\n";
		
		if (strpos($spellPage,"This spell is cast by NPCs only."))
		  $spellPage .= "\n[[Category:NPC Only Spells]]\n";
    
    return $spellPage;
}

function batchSpells()
{
    $spellNames = readWantedPageList("spells.txt");
    
    $spellPages = array();
    
    for ($i = 0; $i < count($spellNames); $i++) {
        $spellPage = spellPage($spellNames[$i]);
        
        if ($spellPage) {
            echo $spellNames[$i] . "\n";
            $spellPages[] = $spellPage;
        }
        else
            echo " SKIPPED ---- " . $spellNames[$i] . " ----\n";
    }
    
    // write XML
    $xmlFile = fopen("import.spell.xml",'w');
    writeXMLFile($xmlFile, $spellNames, $spellPages);
    fclose($xmlFile);
}

// --------------------------------------------------------------------------------------
// faction - alla
// --------------------------------------------------------------------------------------

function getAllaFactionHTML($factionName)
{
    // get page link
    $factionlistFile = "alla_factions_index.html";
    
    $lines = file_get_contents($factionlistFile);
      
    if (is_numeric($factionName)) {
      //return name of corresponding faction
      //$allaAddress = "http://eqbestiary.allakhazam.com/db/faction.html?faction=" . $factionName;
      
      $regex = "/<a href=\"\/db\/faction\.html\?faction=" . $factionName . "\">(.*?)<\/a>/i";
      $ret = preg_match($regex, $lines, $block);
      
      if ($ret) {
        return trim($block[1]);
      } else {
        return "";
      }
      
    } else {  
      
      $regex = "/<a href=\"(.*?)\">" . $factionName . "<\/a>/i";
      $ret = preg_match($regex, $lines, $block);
      
      //try ' to ` switch if not found
      if (!$ret) {
          $regex = "/<a href=\"(.*?)\">" . str_replace("'","`",$factionName) . "<\/a><br>/";
          $ret = preg_match($regex, $lines, $block);
      }
      
      if ($ret) {
          $allaAddress = "http://eqbeastiary.allakhazam.com" . $block[1];
      } else { 
          echo "ERROR: Faction not found on Alla index.\n";
          return 0;
      }
    }
    
    // load webpage
    print $allaAddress . "  <br>\n";
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$allaAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $allaHTML = curl_exec($ch);
    
    if (!$allaHTML) {
    	return 0;
    } else {
      // grab subset
      $regex = "/<h1 style=\"margin-top:0\">(.*?)Click here to report a correction/s";
      $ret = preg_match($regex, $allaHTML, $block);
      
      if ($ret) {
        return $block[0];
      } else {
        print "ERROR: Faction page not found on alla.\n";
        return 0;
      }
    }
}

function factionPage($factionName)
{    
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;
    global $classNames;
    global $idCutoffs;
    
    //alla ajax item request format
    //http://eqbeastiary.allakhazam.com/cluster/ihtml.pl?ajax=1;item=683
    
    $factionPage = "";
        
    //get html
    $allaHTML   = getAllaFactionHTML($factionName);
   
    //header
    $factionPage .= "{{Factionpage|\n\n";
   
    //description
    $regex = "/<\/h1>(.*?)<hr style=\"margin-top:14px\"/s";
    $ret = preg_match($regex, $allaHTML, $block);
    
    if ($ret) {
      $factionPage .= "| description = " . trim($block[1]) . "\n";
    } else {
      $factionPage .= "| description = Description needed.\n";
    }
    
    //get subsets for each list
    $endZonesRaise = strpos($allaHTML, "</ul>");
    $zonesRaiseSubset = substr($allaHTML, 0, $endZonesRaise);
    
    $endZonesLower = strpos($allaHTML, "</ul>", $endZonesRaise+1);
    $zonesLowerSubset = substr($allaHTML, $endZonesRaise, $endZonesLower);
    
    $endMobsRaise = strpos($allaHTML, "</ul>", $endZonesLower+1);
    $mobsRaiseSubset = substr($allaHTML, $endZonesLower, $endMobsRaise-$endZonesLower);
    
    $endQuestsRaise = strpos($allaHTML, "</ul>", $endMobsRaise+1);
    $questsRaiseSubset = substr($allaHTML, $endMobsRaise, $endQuestsRaise-$endMobsRaise);
    
    $endMobsLower = strpos($allaHTML, "</ul>", $endQuestsRaise+1);
    $mobsLowerSubset = substr($allaHTML, $endQuestsRaise, $endMobsLower-$endQuestsRaise);
    
    $endQuestsLower = strpos($allaHTML, "</ul>", $endMobsLower+1);
    $questsLowerSubset = substr($allaHTML, $endMobsLower, $endQuestsLower-$endMobsLower);
    
    
    $validZonesFlag = 0;
    
    //zones (raise)
    //-----
    $factionPage .= "\n| zones_raise = \n\n";
    
    $regex = "/<li><a href=\"http:\/\/everquest\.allakhazam\.com\/db\/npclist\.html\?zone=(.*?)\">(.*?)<\/a><\/li>/";
    $ret = preg_match_all($regex, $zonesRaiseSubset, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $zones = $srcBlock[2];
        
        foreach ($IDs as $i => $ID) {
          //verify ID cutoffs
          if ($ID > $idCutoffs["Zone"] && $ID != 157 && $ID != 286 && (array_key_exists($zones[$i],$classicZones) ||  //286=northern felwithe split 
                                          array_key_exists($zones[$i],$kunarkZones) ||
                                          array_key_exists($zones[$i],$veliousZones))) {
            print "ERROR: Zone (raise) ID above cutoff but exists in zonelist. " . $ID . " -- " . $zones[$i];
            exit;
          }
          if ($ID < $idCutoffs["Zone"] && !(array_key_exists($zones[$i],$classicZones) || 
                                          array_key_exists($zones[$i],$kunarkZones) ||
                                          array_key_exists($zones[$i],$veliousZones))) {
            print "ERROR: Zone (raise) ID below cutoff but does not exist in zonelist. " . $ID . " -- " . $zones[$i];
            exit;
          }
              
          //keep
          if (($ID < $idCutoffs["Zone"] || $ID == 157 || $ID == 286) && (array_key_exists($zones[$i],$classicZones) || 
                                          array_key_exists($zones[$i],$kunarkZones) ||
                                          array_key_exists($zones[$i],$veliousZones))) {
                                            
					    
	    $validZonesFlag = 1;
	    
            list($zonePagename, $zoneLink, $zHeader, $zFooter) = getZoneName($zones[$i]);
            
            //if (in_array($zonePagename,$veliousZones))
            //  $zoneLink = "{{VeliousGray| " . $zoneLink . " }}";
              
            $factionPage .= "* " . $zoneLink . "\n";
          } else {
            print "Skipped (raise) zone: " . $zones[$i] . "\n";
          }
        }
    }
    
    //zones (lower)
    //-----
    $factionPage .= "\n| zones_lower = \n\n";
    
    $regex = "/<li><a href=\"http:\/\/everquest\.allakhazam\.com\/db\/npclist\.html\?zone=(.*?)\">(.*?)<\/a><\/li>/";
    $ret = preg_match_all($regex, $zonesLowerSubset, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $zones = $srcBlock[2];
        
        foreach ($IDs as $i => $ID) {
          //verify ID cutoffs
          if ($ID > $idCutoffs["Zone"] && $ID != 157 && $ID != 286 && (array_key_exists($zones[$i],$classicZones) ||  //286=northern felwithe split
                                          array_key_exists($zones[$i],$kunarkZones) ||
                                          array_key_exists($zones[$i],$veliousZones))) {
            print "ERROR: Zone (lower) ID above cutoff but exists in zonelist. " . $ID . " -- " . $zones[$i];
            exit;
          }
          if ($ID < $idCutoffs["Zone"] && !(array_key_exists($zones[$i],$classicZones) || 
                                          array_key_exists($zones[$i],$kunarkZones) ||
                                          array_key_exists($zones[$i],$veliousZones))) {
            print "ERROR: Zone (lower) ID below cutoff but does not exist in zonelist. " . $ID . " -- " . $zones[$i];
            exit;
          }
              
          //keep
          if (($ID < $idCutoffs["Zone"] || $ID == 157 || $ID == 286) && (array_key_exists($zones[$i],$classicZones) || 
                                          array_key_exists($zones[$i],$kunarkZones) ||
                                          array_key_exists($zones[$i],$veliousZones))) {
                                            
            list($zonePagename, $zoneLink, $zHeader, $zFooter) = getZoneName($zones[$i]);
            
	    $validZonesFlag = 1;
	    
            //if (in_array($zonePagename,$veliousZones))
            //  $zoneLink = "{{VeliousGray| " . $zoneLink . " }}";
            
            $factionPage .= "* " . $zoneLink . "\n";
          } else {
            print "Skipped (lower) zone: " . $zones[$i] . "\n";
          }
        }
    }
    
    if (!$validZonesFlag) {
      print "\n ----- FACTION SKIPPED (" . $factionName . ") -----\n\n";
      return 0;
    }
 
    //quests (raise)
    //------
    $factionPage .= "\n| quests_raise = \n\n";
    
    $regex = "/<li><a href=\"http:\/\/everquest\.allakhazam\.com\/db\/quest\.html\?quest=(.*?)\">(.*?)<\/a><\/li>/";
    $ret = preg_match_all($regex, $questsRaiseSubset, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $quests = $srcBlock[2];
        
        foreach ($IDs as $i => $ID) {             
          //keep, quest name formatting
          if ($ID < $idCutoffs["Quest"]) {
            list($questName,$questLink) = getQuestName($quests[$i]);
            
            //if ($ID > $idCutoffs["QuestVel"]) {
            //  $questLink = "{{VeliousGray| " . $questLink . " }}";
            //}
            
            $factionPage .= "* " . $questLink . "\n";
          } else {
            print "Skipped (raise) quest: " . $quests[$i] . "\n";
          }
        }
    }    
    
    //quests (lower)
    //------
    $factionPage .= "\n| quests_lower = \n\n";  
    
    $regex = "/<li><a href=\"http:\/\/everquest\.allakhazam\.com\/db\/quest\.html\?quest=(.*?)\">(.*?)<\/a><\/li>/";
    $ret = preg_match_all($regex, $questsLowerSubset, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $quests = $srcBlock[2];
        
        foreach ($IDs as $i => $ID) {             
          //keep, quest name formatting
          if ($ID < $idCutoffs["Quest"]) {
            list($questName,$questLink) = getQuestName($quests[$i]);
            
            //if ($ID > $idCutoffs["QuestVel"]) {
            //  $questLink = "{{VeliousGray| " . $questLink . " }}";
            //}
            
            $factionPage .= "* " . $questLink . "\n";
          } else {
            print "Skipped (lower) quest: " . $quests[$i] . "\n";
          }
        }
    }    

    //mobs (raise)
    //----
    $factionPage .= "\n| mobs_raise = \n\n";
    
    $regex = "/<li><a href=\"\/db\/npc\.html\?id=(.*?)\">(.*?)<\/a>/";
    $ret = preg_match_all($regex, $mobsRaiseSubset, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $mobs  = $srcBlock[2]; 
      
        foreach ($IDs as $i => $ID) {
	
          if ($ID > $idCutoffs["NPC"]) {
            print "  Skipped Mob: " . $mobs[$i] . "\n";
            continue;
          }
          
          // replace zone prefixes
          $mobs[$i] = str_replace("steamfont - ","",$mobs[$i]);
          $mobs[$i] = str_replace("freeporteast - ","",$mobs[$i]);
          $mobs[$i] = str_replace("freeportwest - ","",$mobs[$i]);
          $mobs[$i] = str_replace("grobb 1.0 - ","",$mobs[$i]);
          $mobs[$i] = str_replace("innothuleswamp 1.0 - ","",$mobs[$i]);   
          $mobs[$i] = str_replace("nektulosforest 1.0 - ","",$mobs[$i]);  
          
          // get illia/alla mob page
          $illiaHTML = getIlliaHTML($ID);

          // get habitat (zone)
          $regex = "/<div class=\"mobzones\"><b>Known Habitats<\/b>:(.*?)<\/div>/";
          $ret = preg_match($regex, $illiaHTML, $block);
          
          $habitat = "?";
          
          if ($ret) {
            $regex = "/<a href=\"http:\/\/everquest\.allakhazam\.com\/db\/zone\.html\?zstrat=(.*?)\">(.*?)<\/a>/";
            $ret = preg_match($regex, $block[1], $srcBlock);
            
            if ($ret) {
              $habitat = trim($srcBlock[2]);
              
              if ($habitat == "Mob Graveyard") {
                $habitat = "?";
              }
            }
          }

          // decide whether or not to link
          $regex = "/<div class=\"mobtype\"><em>(.*?)<\/em><\/div>/";
          $ret = preg_match($regex, $illiaHTML, $block);
          
          if ($ret) {
            $mobtype = trim($block[1]);
          } else {
            $mobtype = "REGEX FAILED";
          }
          
          //mobtype check, construct string
          $mobStr = "";
          
          if ($mobtype == "Monster" || $mobtype == "Raid Encounter" || $mobtype == "Animal") {
            //OLD: must have known loot check to link
            //if (strpos($illiaHTML,"<div class=\"mobitems\"><b>Known Loot:</b>") !== false) {
            //  $mobStr = "[[" . $mobs[$i] . "]]  <span class='fmz'>(" . $habitat . ")</span>";
            //} else {
            //  $mobStr = $mobs[$i] . " <span class='fmz'>(" . $habitat . ")</span>";
            //}
	    
	    //NEW: always link
	    $mobStr = "[[" . $mobs[$i] . "]]  <span class='fmz'>(" . $habitat . ")</span>";
	    
          } elseif ($mobtype == "Quest NPC" || $mobtype == "Merchant" || $mobtype == "NPC, Non-Quest" || $mobtype == "Banker" ||
                    $mobtype == "Undead" || $mobtype == "Summoned" || $mobtype == "Plant" || strpos($mobtype,"Guildmaster") !== false) {
            $mobStr = "[[" . $mobs[$i] . "]] <span class='fmz'>(" . $habitat . " - " . $mobtype . ")</span>";
          } elseif ($mobtype == "Guard") {
            $mobStr = "[[" . $mobs[$i] . "]] <span class='fmz'>(" . $habitat . ")</span>";
          } else {
            print "  UNKNOWN Mob Type: " . $mobs[$i] . " (" . $mobtype . ")\n";
            exit;
          }
          
          //OLD: era check
          //if (in_array($habitat,$veliousZones)) {
          //  $mobStr = "<span class='grayout'> " . $mobStr . " </span>";
          //}
          
          $factionPage .= "* " . $mobStr . "\n";
      }
    }
    
    //mobs (lower)
    //----
    $factionPage .= "\n| mobs_lower = \n\n";  
    
    $regex = "/<li><a href=\"\/db\/npc\.html\?id=(.*?)\">(.*?)<\/a>/";
    $ret = preg_match_all($regex, $mobsLowerSubset, $srcBlock);

    if ($ret) {
        $IDs   = $srcBlock[1];
        $mobs  = $srcBlock[2]; 
      
        foreach ($IDs as $i => $ID) {
	
          if ($ID > $idCutoffs["NPC"]) {
            print "  Skipped Mob: " . $mobs[$i] . "\n";
            continue;
          }
          
          // replace zone prefixes
          $mobs[$i] = str_replace("steamfont - ","",$mobs[$i]);
          $mobs[$i] = str_replace("freeporteast - ","",$mobs[$i]);
          $mobs[$i] = str_replace("freeportwest - ","",$mobs[$i]);
          $mobs[$i] = str_replace("grobb 1.0 - ","",$mobs[$i]);
          $mobs[$i] = str_replace("innothuleswamp 1.0 - ","",$mobs[$i]);   
          $mobs[$i] = str_replace("nektulosforest 1.0 - ","",$mobs[$i]);  
          
          // get illia/alla mob page
          $illiaHTML = getIlliaHTML($ID);

          // get habitat (zone)
          $regex = "/<div class=\"mobzones\"><b>Known Habitats<\/b>:(.*?)<\/div>/";
          $ret = preg_match($regex, $illiaHTML, $block);
          
          $habitat = "?";
          
          if ($ret) {
            $regex = "/<a href=\"http:\/\/everquest\.allakhazam\.com\/db\/zone\.html\?zstrat=(.*?)\">(.*?)<\/a>/";
            $ret = preg_match($regex, $block[1], $srcBlock);
            
            if ($ret) {
              $habitat = trim($srcBlock[2]);
            }
          }

          // decide whether or not to link
          $regex = "/<div class=\"mobtype\"><em>(.*?)<\/em><\/div>/";
          $ret = preg_match($regex, $illiaHTML, $block);
          
          if ($ret) {
            $mobtype = trim($block[1]);
          } else {
            $mobtype = "REGEX FAILED";
          }
          
          //mobtype check, construct string
          $mobStr = "";
          
          if ($mobtype == "Monster" || $mobtype == "Raid Encounter" || $mobtype == "Animal") {
            //OLD: must have known loot check
            //if (strpos($illiaHTML,"<div class=\"mobitems\"><b>Known Loot:</b>") !== false) {
            //  $mobStr = "[[" . $mobs[$i] . "]]  <span class='fmz'>(" . $habitat . ")</span>";
            //} else {
            //  $mobStr = $mobs[$i] . " <span class='fmz'>(" . $habitat . ")</span>";
            //}
	    
	    //NEW: always link
	    $mobStr = "[[" . $mobs[$i] . "]]  <span class='fmz'>(" . $habitat . ")</span>";
          } elseif ($mobtype == "Quest NPC" || $mobtype == "Merchant" || $mobtype == "NPC, Non-Quest" || $mobtype == "Banker" ||
                    $mobtype == "Undead" || $mobtype == "Summoned" || $mobtype == "Plant" || strpos($mobtype,"Guildmaster") !== false) {
            $mobStr = "[[" . $mobs[$i] . "]] <span class='fmz'>(" . $habitat . " - " . $mobtype . ")</span>";
          } elseif ($mobtype == "Guard") {
            $mobStr = "[[" . $mobs[$i] . "]] <span class='fmz'>(" . $habitat . ")</span>";
          } else {
            print "  UNKNOWN Mob Type: " . $mobs[$i] . " (" . $mobtype . ")\n";
            exit;
          }
          
          //OLD: era check
          //if (in_array($habitat,$veliousZones)) {
          //  $mobStr = "<span class='grayout'> " . $mobStr . " </span>";
          //}
          
          $factionPage .= "* " . $mobStr . "\n";
        }
    }

   $factionPage .= "\n}}";
   
   return $factionPage; 
}

function batchFactions()
{
    //$factionNames = readWantedPageList("factions.txt");
    //$factionNames = array("Mayong Mistmoore");
    
    // do range of faction IDs, convert to names
    $factionNames = range(226,445);
    foreach ($factionNames as $i => $factionName) {
      $factionNames[$i] = getAllaFactionHTML($factionName);
      
      print $i+1 . " -- " . $factionNames[$i] . "\n";
    }
 
    $factionPages = array();
    
    for ($i = 0; $i < count($factionNames); $i++) {
      
      if ($factionNames[$i] != "") {
        $factionPage = factionPage($factionNames[$i]);
 
        if ($factionPage) {
          echo "\n\n" . $i+1 . " -- " . $factionNames[$i] . "\n\n";
        }
        
        $factionPages[] = $factionPage;
      } else {
        $factionPages[] = 0;
        echo "\n\n SKIPPED ---- " . $i . " ----\n\n";
      }
    }
    
    // format page titles
    foreach ($factionNames as $i => $factionName) {
      list($fname,$flink) = getFactionName($factionName);
      $factionNames[$i] = $fname;
    }
    
    // write XML
    $xmlFile = fopen("import.faction.xml",'w');
    writeXMLFile($xmlFile, $factionNames, $factionPages);
    fclose($xmlFile);
}

// --------------------------------------------------------------------------------------
// quest - alla
// --------------------------------------------------------------------------------------

function getAllaQuestID($questName)
{    
    $userAgent = "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12";
    $cookieJar = "cookie.txt";
    
    $search_url = "http://everquest.allakhazam.com/search.html?q=" . str_replace(" ","+",$questName);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$search_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $illiaHTML = curl_exec($ch);
    
    //check for empty result
    if (strpos("<h2>Nothing Found</h2>",$illiaHTML))
    {
        return 0;
    }
    
    //enumerate search results
    //<a href="/db/quest.html?quest=642">Tumpy Tonics</a>
    $regex = '/<a href=\"\/db\/quest.html\?quest=(.*?)\">(.*?)<\/a><\/td>/';   
    $ret = preg_match_all($regex, $illiaHTML, $srcBlock);
    
    if ($ret) {
        $IDs   = $srcBlock[1];
        $names = $srcBlock[2];

        // just one result
        if (count($IDs) == 1) {
            return array($IDs[0],$names[0]);
        }
        
        $quests   = array();
        
        //multiple results:
        foreach ($IDs as $i => $ID) {
            //remove any excluded IDs
            $quests[$IDs[$i]]   = $names[$i];
        }
        
        //pick lowest remaining ID
        if (count($quests) == 0) { return 0; }
        
        if (count($quests) >= 1) {
            if (count($quests) > 1 ) { 
                echo "  WARNING: Multiple Alla IDs, picking min:\n";
            }
            $i = min(array_keys($quests));
            return array($i, $quests[$i]);
        }
        
    } else {
        return 0;
    }
}

function getAllaQuestHTML($questID)
{    
    $allaAddress = "http://everquest.allakhazam.com/db/quest.html?quest=" . $questID;
    
    // load webpage
    print $allaAddress . "  <br>\n";
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$allaAddress);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $allaHTML = curl_exec($ch);
    
    if (!$allaHTML) {
    	return 0;
    } else {
      // grab subset
      $regex = "/<h1 style=\"margin-top:0\">(.*?)Send a Correction/s";
      $ret = preg_match($regex, $allaHTML, $block);
      
      if ($ret) {
        return $block[0];
      } else {
        print "ERROR: Quest page not found on alla.\n";
        return 0;
      }
    }
 
  
}

function questPage($questName)
{    
    global $classicZones;
    global $kunarkZones;
    global $veliousZones;
    
    global $classNames;
    global $factionNames;
    global $idCutoffs;
    
    $questPage = "";
        
    //get html
    $allaID     = getAllaQuestID($questName);
    $allaHTML   = getAllaQuestHTML($allaID[0]);
    
    // quest giver
    $regex = "/<b>Who:<\/b><ul(.*?)<\/ul>/";
    $ret = preg_match($regex, $allaHTML, $whoBlock);
    $regex = "/\?id=(.*?)\">(.*?)<\/a>/s";
    $ret = preg_match($regex, $whoBlock[0], $whoNameBlock);

    $whoName = $whoNameBlock[2];
    $npc_img_link = "http://common.allakhazam.com/images/i/d/id" . $whoNameBlock[1] . ".png";
    
    if (!$whoName) {
        print "WARNING: No quest giver found!  <br>\n";
    }
   
    // start zone
    $regex = "/<b>Where:<\/b><ul(.*?)<\/ul>/";
    $ret = preg_match($regex, $allaHTML, $whereBlock);
    $regex = "/\?zstrat=(.*?)\">(.*?)<\/a>/s";
    $ret = preg_match($regex, $whereBlock[0], $whereNameBlock);
    
    list($zonePagenameStart,$zoneLinkStart,$zHeader,$zFooter) = getZoneName($whereNameBlock[2]);

    if (!$zoneLinkStart) {
        print "WARNING: No starting zone found!  <br>\n";
    }
    
    // min level
    $regex = "/<b>Level:<\/b><\/td><td>(.*?)<\/td>/";
    $ret = preg_match($regex, $allaHTML, $levelBlock);
    if (!$ret) {
        print "WARNING: No recommended level found!  <br>\n";
    }
   
    // recommended classes
    $regex = "/<b>Appropriate Classes:<\/b><ul class=\"nospaceul\"><li>(.*?)<\/li><\/ul>/";
    $ret = preg_match($regex, $allaHTML, $classBlock);
    if ($ret) {
        $regex = "/<a href=\"\/db\/classes\.html\?class=(.*?)\">(.*?)<\/a>/";
        $ret = preg_match_all($regex, $classBlock[1], $matches);
        if ($ret) {
            $classList = "";
            $classCats = "";
            foreach ($matches[2] as $match) {
                if (in_array($match,$classNames)) {
                    $classList = $classList . "[[" . $match . "]], ";
                    $classCats = "[[Category:" . $match . " Quests]]\n";
                } else if ($match == "Shadowknight") { //SK single word formatting
                    $classList = $classList . "[[Shadow Knight]], ";
                    $classCats = "[[Category:Shadow Knight Quests]]\n";
                } else {
                    print "WARNING: Skipping class: " . $match . "  <br>\n";
                }
            }
            $classList = substr($classList,0,-2); // cut out last comma
        } else if ($classBlock[1] == "All") {
            $classList = "All";
            $classCats = "[[Category:All Classes Quests]]\n";
        }
    } else {
        print "WARNING: No related classes found!  <br>\n";
        $classList = "?";
    }
    
    // related zones
    $regex = "/<b>Related Zones:<\/b><ul(.*?)<\/ul>/";
    $ret = preg_match($regex, $allaHTML, $zoneBlock);
    if ($ret) {
        $regex = "/<a href=\"\/db\/zone\.html\?zstrat=(.*?)\">(.*?)<\/a>/";
        $ret = preg_match_all($regex, $zoneBlock[1], $matches);
        $relatedZones = "";
        foreach ($matches[2] as $match) {
            list($zonePagename,$zoneLink,$zHeader,$zFooter) = getZoneName($match);
            if ($zoneLink != "") {
                $relatedZones = $relatedZones . $zoneLink . ", ";
            } else {
                print "WARNING: Skipping zone: " . $match . "  <br>\n";
            }
        }
        $relatedZones = substr($relatedZones,0,-2); // cut out last comma
    } else {
        print "WARNING: No related zones found!  <br>\n";
        $relatedZones = "";
    }
    
    // related NPCs
    $regex = "/<b>Related Creatures:<\/b><ul(.*?)<\/ul>/";
    $ret = preg_match($regex, $allaHTML, $npcBlock);
    if ($ret) {
        $regex = "/id=(.*?)\">(.*?)<\/a>/";
        $ret = preg_match_all($regex, $npcBlock[1], $matches);
        $relatedNPCs = "";
        foreach ($matches[2] as $i => $match) {
            //exclude quest giver and above ID cutoff
            if ($match != $whoName && $matches[1][$i] < $idCutoffs["NPCSafe"]) {
                $relatedNPCs = $relatedNPCs . "[[" . $match . "]], ";
            } else {
                print "WARNING: Skipping NPC: " . $match . " (ID=" . $matches[1][$i] . ") <br>\n";
            }
        }
        $relatedNPCs = substr($relatedNPCs,0,-2); // cut out last comma
    } else {
        print "WARNING: No related NPCs found!  <br>\n";
        $relatedNPCs = "";
    }
    
   
    //image link
    $questPage .= "[[File:npc_" . strtolower(str_replace(" ","_",$whoName)) . 
                  ".png|frame|" . $whoName . "]]\n";
   
    //questtoptable
    $questPage .= "{| class=\"questTopTable\"\n";
    $questPage .= "! ''' Start Zone: '''\n";
    $questPage .= "| " . $zoneLinkStart . "\n|-\n";
    $questPage .= "! ''' Quest Giver: '''\n";
    $questPage .= "| [[" . $whoName . "]]\n|-\n";
    $questPage .= "! ''' Minimum Level: '''\n";
    $questPage .= "| " . $levelBlock[1] . "\n|-\n";
    $questPage .= "! ''' Classes: '''\n";
    $questPage .= "| " . $classList . "\n|-\n";
    $questPage .= "! ''' Related Zones: '''\n";
    $questPage .= "| " . $relatedZones . "\n|-\n";
    $questPage .= "! ''' Related NPCs: '''\n";
    $questPage .= "| " . $relatedNPCs . "\n|}\n\n";
    
    
    //reward   
    $regex = "/Rewards:<\/td><\/tr>(.*?)<\/ul>/s";
    $ret = preg_match($regex, $allaHTML, $rewardBlock);
    if ($ret) {
        $regex = "/item=(.*?)\">(.*?)<\/a>/";
        $ret = preg_match_all($regex, $rewardBlock[1], $matches);
        $rewards = "<ul><li>  ";

        if (!$ret) {
            print "WARNING: NO QUEST REWARDS FOUND!  <br>\n";
            $matches = array();
            $matches[2] = array();
            $matches[2][] = "UNKNOWN";
        }

        foreach ($matches[2] as $i => $match) {
            //exclude above ID cutoff
            if ($matches[1][$i] < $idCutoffs["ItemSafe"]) {
						
								// check for Spell: or Song:
								if (substr($match,0,6) == "Spell:") {
									$match = "[[" . substr($match,7) . "|" . $match . "]]";
								} else if (substr($match,0,5) == "Song:") {
									$match = "[[" . substr($match,6) . "|" . $match . "]]";
								} else {
									$match = "{{:" . $match . "}}";
								}
								
                if ($i == 0) {
                    // first reward syntax
                    $rewards .= $match . "\n";
                } else {
                    // second or higher reward syntax
                    $rewards .= "</li><li> " . $match . "\n";
                }
            } else {
                print "WARNING: Skipping reward item: " . $match . " (ID=" . $matches[1][$i] . ") <br>\n";
            }
        }
        // ul li footer
        $rewards .= "</li></ul>\n\n";
    } else {
        $rewards = "Unknown?\n";
        print "WARNING: NO QUEST REWARDS FOUND!  <br>\n";
    }
    
    $questPage .= "== Reward ==\n\n";
    $questPage .= $rewards;
    
    //walkthrough
    $regex = "/<\/span><\/td><\/tr><\/table><\/td>(.*?)<\/td><\/tr><tr>/s";
    $ret = preg_match($regex, $allaHTML, $descBlock);
    if ($ret) {
        $walkthrough = str_replace("<br/>","\n",$descBlock[0]);
        $walkthrough = str_replace("<br>","\n",$walkthrough);
        $walkthrough = strip_tags($walkthrough);
        $walkthrough = trim($walkthrough) . "\n\n";
    } else {
        $walkthrough = "Information needed.\n\n";
        print "WARNING: NO WALKTHROUGH DESCRIPTION FOUND!  <br>\n";
    }
    
    //walkthrough formatting
    
      //indent NPC dialogue
      $walkthrough = str_replace($whoName . " says '",": " . $whoName . " says '",$walkthrough);
      $walkthrough = str_replace($whoName . " says, '",": " . $whoName . " says, '",$walkthrough);
      
      //link factions
      $gb = "/Your faction standing with (.*?) got better./";
      $gb2 = "/Your faction standing with (.*?) could not possibly get any better./";
      $gw = "/Your faction standing with (.*?) got worse./";
      $gw2 = "/Your faction standing with (.*?) could not possibly get any worse./";
      $gbNew = "* Your faction standing with [[$1]] got better.";
      $gwNew = "* Your faction standing with [[$1]] got worse.";
      
      $walkthrough = preg_replace($gb,$gbNew,$walkthrough);
      $walkthrough = preg_replace($gb2,$gbNew,$walkthrough);
      $walkthrough = preg_replace($gw,$gwNew,$walkthrough);
      $walkthrough = preg_replace($gw2,$gbNew,$walkthrough);
      
      //rename factions
      foreach ($factionNames as $oldFacName => $newfac) {
          if (strpos($walkthrough,"[[".$oldFacName."]]") !== false) {
              $newFacNameLink = getFactionName($oldFacName);
              $walkthrough = str_replace("[[" . $oldFacName . "]]",$newFacNameLink[1],$walkthrough);
          } 
      }
      
      //facblock div
      $bOld = "/\* Your faction standing with (.*?)\./";
      $bNew = "<div class=\"facblock\">\n* Your faction standing with $1.\n</div>";
      
      $walkthrough = preg_replace($bOld,$bNew,$walkthrough);
      $walkthrough = preg_replace("/<\/div>\r\n<div class=\"facblock\">\n/s","",$walkthrough);
    
      //missing info request
      $iOld = "Need missing dialogues, current faction hits if any, quest item(s) required, /loc of quest mobs, list of quest rewards.";
      $iNew = "''" . $iOld . "''";

      $walkthrough = str_replace($iOld,$iNew,$walkthrough);
      
      $iOld = "Need /loc of quest-giver, additional quest rewards if any.";
      $iNew = "''" . $iOld . "''";
      
      $walkthrough = str_replace($iOld,$iNew,$walkthrough);

    $questPage .= "== Walkthrough ==\n\n";
    $questPage .= $walkthrough;
    
    //footer
    $questPage .= "[[Category:Quests]]\n";
    $questPage .= "[[Category:" . $zonePagenameStart . "]]\n";
    $questPage .= $classCats;
    
    return array($questPage,$npc_img_link);
}

// --------------------------------------------------------------------------------------
// image upload/download and wiki util
// --------------------------------------------------------------------------------------

function runRegex() // local
{
    //read in
    $filename = "regex.txt";
    $lines = file($filename);
    
    //$test = "<tr><td width='22%'>Leering Corpse</td> and <tr><td width='22%'>Leering Corpse</td>";
    //echo preg_replace('/<tr><td width=\'22%\'>(.*?)<\/td>/','<tr><td width=\'22%\'>[[$1]]</td>',$test);
    
    //regex replacement
    $regex = '/\[\[(.*?)\|/';
    $replacement = '[[';
    //$regex = '/<td width=\'22%\'>(.*?)<\/td>/';
    //$replacement = '<td width=\'22%\'>[[$1]]</td>';
    
    //do regex replace
    foreach ($lines as $i => $line) {
        $lines[$i] = preg_replace($regex, $replacement, $line);
    }
    
    //rewrite out
    $fileout = fopen($filename,'w');
    foreach ($lines as $line) {
        fwrite($fileout, $line);
    }
    fclose($fileout);
}

function parseAuctionLog()
{
		$filename = "auctions.txt";
		$verbose = TRUE;
		
		$savePath = "auctiontracker/";
		
		$itemRenames = array("GEB"                   => "Golden Efreeti Boots",
												 "SSOY"                  => "Short Sword of the Ykesha",
												 "EBCP"                  => "Enameled Black Chestplate",
												 "GSD"                   => "Green Silken Drape",
												 "Bear Skin Potion Bags" => "Bearskin Potion Bag",
												 "HQ Bear skins"         => "High Quality Bear Skin",
												 "HQ Bear Skin"          => "High Quality Bear Skin",
												 "hq bear pelt"          => "High Quality Bear Skin",
												 "Hand Made Backpacks"   => "Hand Made Backpack",
												 "A Dark Reaver"         => "Dark Reaver",
												 "A Shimmering Orb"      => "Shimmering Orb",
												 "Plat Ruby Veil"        => "Platinum Ruby Veil",
												 "jade prod"             => "Jade Chokidai Prod",
												 "bone razor"            => "Bone Razor",
												 "runed bone fork"       => "Runed Bone Fork",
												 "Fire giant toes"       => "Fire Giant Toes",
												 "Charred Guardian shield" => "Charred Guardian Shield",
												 "Kld-hide Boots"        => "Kobold-hide Boots",
												 "An Executioners Axe"   => "Executioner's Axe",
												 "JBoots MQ"             => "Ring of the Ancients",
												 "JBoot MQ"              => "Ring of the Ancients",
												 "jboots mq"             => "Ring of the Ancients",
												 "Journeyman's Boots MQ" => "Ring of the Ancients",
												 "Ring of the Ancients MQ"    => "Ring of the Ancients",
												 "Hammer of the Scourge" => "Blight, Hammer of the Scourge");
												 
		$preReplaces = array("+6 WIS Ring"           => "Platinum Jasper Ring",
												 "+3 WIS Ears"           => "Jasper Gold Earring",
												 "+6 STA Ears"           => "Platinum Bloodstone Earring",
												 "+3 STR Ears"           => "Golden Amber Earring");
												 
		$skipLucyCheck = array("Bearskin Potion Bag",
													 "Minor Conjuration: Air");
		
		$badItemList = array("and","paying");
		
		// load item list
    $itemlistFile = "itemlist_30k.txt";    
    $lines = file($itemlistFile);
		$itemListArr = array();
    
    foreach ($lines as $line) {
        $tLine = explode(",",$line);
        
        //check for comma in name
        if (count($tLine) == 4)
            $tLine = array($tLine[0],$tLine[1] . "," . $tLine[2],$tLine[3]);
        
				//add itemname to list
        if (count($tLine) == 3) {
					if (substr($tLine[1],0,1) == "\"" && substr($tLine[1],-1) == "\"")
							$tLine[1] = substr($tLine[1],1,-1);
					$itemListArr[] = $tLine[1];
        }
    }
		
		$lines = file($filename);
		$rows = array();
		$aucLineCount = 0;
		
		// config
		$tsLen   = strlen("[Thu Sep 16 17:55:22 2010]");
		$hashLen = 8;
		
		$skipAucRegex = "/(PC|WTB|Buying|port|res|rez|Paying|Casino|account|Trade|Trading|bone chips)/i";
		$badItemRegex = "/(selling|WTS|port|WTB|PC|Buying|pp|each|Dose|piece|pair|per ac|Sets|stack|level|lvl|offers|twink|stuff|ea or)/i";
		
		if ($verbose) print "Log file has [" . count($lines) . "] lines.\n\n";
		
		// loop over each line
		for ($i=0; $i < count($lines); $i++)
		//for ($i=0; $i < 5000; $i++)
		{
				if ($i % 1000 == 0) {
						print "$i of " . count($lines) . "\n";
						flush();
				}
						
				$line = $lines[$i];
				
				// prompt skip of non-auctions
				if (strpos($line,"auctions, '") === false)
						continue;
						
				$aucLineCount += 1;
						
				// split timestamp
				$timestamp = substr($line,0,$tsLen);
				$timestamp = substr($timestamp,1,-1);
				$timestamp = strtotime($timestamp);
				
				// split seller
				$line2 = substr($line,$tsLen+1);
				list($seller,$aucMsg) = explode(" auctions, '",$line2);
				$seller = trim($seller);
				
				// auction text
				$aucMsg = trim($aucMsg);
				$aucMsg = substr($aucMsg,0,-1);
				
				foreach ($preReplaces as $search => $replace)
						$aucMsg = str_replace($search,$replace,$aucMsg);
				
				// price modifiers
				$priceMod = 1.0;
				if (strpos($aucMsg," 2 for ") !== false || strpos($aucMsg," two for ") !== false) {
						$aucMsg = str_replace(" 2 for ","",$aucMsg);
						$aucMsg = str_replace(" two for ","",$aucMsg);
						$priceMod = 0.5;
				}
				
				if ($timestamp == "" || $seller == "" || $aucMsg == "") {
						if ($verbose) print 'Error: Blank strings.';
						continue;
				}
				if (preg_match($skipAucRegex,$aucMsg,$block)) {
						//if ($verbose) print "skipAucRegex: $aucMsg\n";
						continue;
				}
						
				// discard e.g. "x20" (can wrongly be interpreted as prices, or in any case price is unknown)
				$regex = "/x\s?\d{1,3}/";
				$ret = preg_match($regex,$aucMsg,$multMatches);
				if ($ret) {
						//if ($verbose) print "multMatch: $aucMsg\n";
						continue;
				}
		
				// parse items
				$regex = "/([-_`\'\sa-zA-Z:]+)[-\s\/,;]([0-9\.k]+)/";
				$ret = preg_match_all($regex,$aucMsg,$matches);
				
				if (!$ret)
						continue;
						
				//print $timestamp . " -- " . $seller . " -- " . $aucMsg . "\n\n";
				
				foreach ($matches[1] as $j => $item) {
						// item name formatting
						$item = preg_replace("/(wts|wtt|wtb|obo|only)/i", "", $item);
						$item = preg_replace("/[\s]+[p|-]+$/i", "", $item);
						$item = trim($item);
						$item = preg_replace("/^['\"p|-]+[\s]+/i", "", $item);
						$item = str_replace("Spell:","",$item);
						$item = trim($item);
						
						// exclude items
						if (preg_match($badItemRegex,$item,$block))
								continue;
						if (in_array($item,$badItemList))
								continue;
								
						// check for junk at beginning/end (alpha characters)
						if (substr($item,0,6) == "------")
								$item = substr($item,6);
						if (substr($item,0,5) == "-----")
								$item = substr($item,5);
						if (substr($item,0,4) == "----")
								$item = substr($item,4);
						if (substr($item,0,3) == "ll " || substr($item,0,3) == ":  " ||
						    substr($item,0,3) == "-  " || substr($item,0,3) == "-- " ||
								substr($item,0,3) == "---")
								$item = substr($item,3);
						if (substr($item,0,2) == "I " || substr($item,0,2) == "x " || substr($item,0,2) == ": " ||
						    substr($item,0,2) == "- " || substr($item,0,2) == "--" || substr($item,0,2) == "s ")
								$item = substr($item,2);
						if (substr($item,0,1) == "-")
								$item = substr($item,1);
								
						if (substr($item,-2) == " X")
								$item = substr($item,0,-2);
						if (substr($item,-1) == "-")
								$item = substr($item,0,-1);
						
						// rename/abbreviations
						if (array_key_exists($item,$itemRenames))
								$item = $itemRenames[$item];
								
						if (strlen($item) <= 3) {
								//if ($verbose) print "Error: Item too short, skipping: $item\n";
								continue;
						}
						
						// price formatting
						$price = $matches[2][$j];
						
						//junk on end
						if (substr($price,-4) == "....")
								$price = substr($price,0,-4);
						if (substr($price,-3) == "...")
								$price = substr($price,0,-3);
						if (substr($price,-2) == "..")
								$price = substr($price,0,-2);
						
						// k=1000
						if (substr($price,-1) == "k") {
								$price = substr($price,0,-1);
								$price *= 1000.0;
						}
						if (!is_numeric($price)) {
								if ($verbose) print "Error: Non-numeric price: $price\n";
								continue;
						}
						$price *= $priceMod;
						
						// plural
						if (substr($item,-1) == "s" && in_array(substr($item,0,-1),$itemListArr))
								$item = substr($item,0,-1);
								
						// "A "
						if (substr($item,0,2) == "A " && in_array(substr($item,2),$itemListArr))
								$item = substr($item,2);
						
						// check item exists in lucy DB
						if (!in_array($item,$skipLucyCheck) && !in_array($item,$itemListArr) && 
						    !in_array("Spell: ".$item,$itemListArr)) {
								if ($verbose) print "Error: No lucy ID: " . $item . "  (" . $price . " pp)\n";
								continue;
						}
						
						// debug output
						//print str_pad($item,32) . " -- " . str_pad($price,6) . " - " . $seller . "\n";
						
						// compute hash and add
						$hash = md5(date('Y-m-d',$timestamp) . $seller . $item . $price);
						$hash = substr($hash,0,$hashLen);

						$rows[$hash] = array($timestamp,$item,$seller,$price);
				}
		}

		if ($verbose)
			print "\nProcessed [" . $i . "] log lines, found [" . $aucLineCount . "] auctions, with [" . 
					count($rows) . "] unique prices.\n";
		
		// form sql insert statement
		$sqlCmd = "REPLACE INTO `rav_auctiontracker` (hash,datetime,itemname,seller,price) VALUES ";
		foreach ($rows as $hash => $row) {
				$sqlCmd .= "('" . $hash . "','" . date("Y-m-d H:m:s",$row[0]) . "','" . addslashes($row[1]) . 
										"','" . addslashes($row[2]) . "','" . addslashes($row[3]) . "'), ";
		}
		$sqlCmd = substr($sqlCmd,0,-2) . ";";
		
		// write sql import file
		//$fSql = fopen("auctions.sql.txt","w");
		//fwrite($fSql,$sqlCmd);
		//fclose($fSql);
		
		// return (sqlCmd,num_lines,num_auctions,num_prices,date_min,date_max)
		//return array($output,$sqlCmd,$i,$aucLineCount,count($rows),$minTS,$maxTS,$saveFilename);

}

function batchImageDownload($imgLinks, $snoopy, $tmpDir, $fNames = 0)
{
    $upImgPaths = array();
    
    foreach ($imgLinks as $i => $imgLink)
    {
        if (!$fNames) {
            //items
            $fname = explode("/pgfx/",$imgLink);
            $fname = trim($fname[1]);
        } else {
            //npcs
            $fname = $fNames[$i];
        }
        
        if (!file_exists($tmpDir . $fname)) {
            $snoopy->fetch(trim($imgLink));
            file_put_contents($tmpDir . $fname, $snoopy->results);
            echo "saved [" . $tmpDir . $fname . "]\n";
            $snoopy->results = '';
            $upImgPaths[] = $tmpDir . $fname;
        } else {
            echo "skip  [" . $tmpDir . $fname . "]\n";
        }
    }
    
    return $upImgPaths;
}

function wikiDoBulkEdit($catName,$editType,$editMsg)
{
	  // login
    list($userAgent,$cookieJar) = wikiLogin();
    
    // get list of all pages of this category
    $pages = wikiGetCatMemberList($catName,$userAgent,$cookieJar);
    
    print "Processing [" . sizeof($pages) . "] pages:\n\n";
		
    //for ($i = 0; $i < 1; $i++) {
    foreach ($pages as $i => $page) {
        // retrieve current page, make edits, and re-upload
        wikiEditPage($pages[$i],$editType,$editMsg,$userAgent,$cookieJar);
    }
}

function wikiEditPage($pageName,$editType,$editMessage,$userAgent,$cookieJar)
{
    $edit_url = "http://wiki.project1999.org/index.php?title=" . str_replace(" ","_",$pageName);
  
    // get current page   
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$edit_url . "&action=edit");
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $pageHTML = curl_exec($ch);
  
    // get tokens
    $regex = "/<input type='hidden' value=\"(.*?)\" name=\"wpEditToken\" \/>/";
    $ret = preg_match($regex, $pageHTML, $wp);
    
    if ($ret) {
        $wpEditToken = $wp[1];
    } else {
        print "Failed to get wpEditToken (" . $pageName . ").\n";
        return false;
    }
    
    $regex = "/<input type='hidden' value=\"(.*?)\" name=\"wpStarttime\" \/>/";
    $ret = preg_match($regex, $pageHTML, $wp);
    
    if ($ret) {
        $wpStarttime = $wp[1];
    } else {
        print "Failed to get wpStarttime (" . $pageName . ").\n";
        return false;
    }
    
    $regex = "/<input type='hidden' value=\"(.*?)\" name=\"wpEdittime\" \/>/";
    $ret = preg_match($regex, $pageHTML, $wp);
    
    if ($ret) {
        $wpEdittime = $wp[1];
    } else {
        print "Failed to get wpEditTime (" . $pageName . ").\n";
        return false;
    }
  
    // get page subset
    $hlen = 91;
    $start = strpos($pageHTML, "<textarea name=");
    $end   = strpos($pageHTML, "</textarea>");
    
    $pageHTML = substr($pageHTML,$start+$hlen,$end-$start-$hlen);
    
    if ($editType == "ADD_QUEST_CATS")
    {
        $szone = 0;
        $classes = array();
        
        // extract info
        $regex = "/Start Zone\:(.*?)\|-/s";
        $ret = preg_match($regex,$pageHTML,$szBlock);
        
        if ($ret) {
            $regex = "/\[\[(.*?)\]\]/s";
            $ret = preg_match($regex,$szBlock[1],$szBlock2);
            if ($ret) {
                $szone = $szBlock2[1];
                
                // trim [[page|name]] style link
                if (strpos($szone,"|") !== false) {
                    $szone = substr($szone,strpos($szone,"|")+1);
                }
            }
          
        }
    
        $regex = "/Classes\:(.*?)\|-/s";
        $ret = preg_match($regex,$pageHTML,$szBlock);
        
        if ($ret) {
            $regex = "/\[\[(.*?)\]\]/s";
            $ret = preg_match_all($regex,$szBlock[1],$szBlock2);
            
            if ($ret) {            
                foreach ($szBlock2[1] as $class) {
                    $classes[] = $class;
                }   
            }
            if (strpos($szBlock[1],"All")) {
                $classes[] = "All Classes";
            }
        }
        
        // PoS quest special case
        if (strpos($pageName,"Plane of Sky Tests") !== false) {
            $szone = "Plane of Sky";
            $classes[] = substr($pageName,0,strpos($pageName,"Plane of Sky")-1);
        }
        
        // check info retrieval
        if (!$szone) {
            print "Error: Couldn't get starting zone, skipping (" . $pageName . ")\n";
            return false;
        }
        if (!sizeof($classes)) {
            print "Error: Couldn't get any classes, skipping (" . $pageName . ")\n";
            return false;
        }
        
        // verify appropriate category for this page
        if (strpos($pageHTML,"[[Category:Quests]]") != true &&
            strpos($pageHTML,"[[Category: Quests]]") != true) {
            print "FAILED quest cat check: " . $pageName . "\n";
            return false;
        }
        
        // modify (if not already there)
        $modflag = 0;
        if (strpos($pageHTML,"[[Category:" . $szone . "]]") === false) {
            $pageHTML .= "\n[[Category:" . $szone . "]]\n";
            $modflag = 1;
        }
        foreach ($classes as $class) {
            if (strpos($pageHTML,"[[Category:" . $class . " Quests]]") === false) {
                $pageHTML .= "[[Category:" . $class . " Quests]]\n";
                $modflag = 1;
            }
        }
        $pageHTML .= "\n";
    }
		
		if ($editType == "ADD_SPELLNAME_TAG")
		{
				$spelliconPos = strpos($pageHTML,"| spellicon =");
				
				if (strpos($pageHTML,"| spellname =") !== false || !$spelliconPos) {
						$modflag = 0;
				} else {
				
					$pageHTML = substr_replace($pageHTML,"| spellname = " . $pageName . "\n",$spelliconPos,0);
					$modflag = 1;
				}
				
		}
		
		if ($editType == "LINK_SPELL_MERCHANTS")
		{
		  $modflag = 0;
			
			// regex search WhereTable rows
			//         {{SpellWhereRow           | [[zonelink]]           | merc | area | loc }}
			$regex = "/{{SpellWhereRow(B?)(\s*?)\|(\s*)\[\[(.*?)\]\](\s*)\|(.*?)\|(.*?)\|(.*?)}}/";
			$ret   = preg_match_all($regex,$pageHTML,$block);
			
			if ($ret && sizeof($block) == 9) {
			  foreach ($block[6] as $merchName) {
				  $merchName = trim($merchName);
					if (substr($merchName,0,2) == "[[" || substr($merchName,-2) == "]]")
					  continue;
						
			    //print "  " . $merchName . "\n";
					$pageHTML = str_replace($merchName,"[[" . $merchName . "]]",$pageHTML);
					$modflag = 1;
		    }
		  }
		}
		
		if ($editType == "ADD_NPC_ZONECAT")
		{
		  $modflag = 0;
			$start   = 0;
			
			// extract |zone = line
			if (strpos($pageHTML,"| zone") !== false)
			  $start = strpos($pageHTML,"| zone");
		  if (strpos($pageHTML,"|zone") !== false)
			  $start = strpos($pageHTML,"|zone");
				
			if (strpos($pageHTML,"=",$start) !== false)
			  $start = strpos($pageHTML,"=",$start)+1;
				
			$end = strpos($pageHTML,"\n",$start);
			
			// extract [[zone]]
			$zone = trim(substr($pageHTML,$start,$end-$start));
			
			if (substr($zone,0,2) == "[[" && substr($zone,-2) == "]]") {
			  $zone = substr($zone,2,-2);
			
			  // double check there are no more links inside this one, or commas
				if (strpos("[[",$zone) === true || strpos("]]",$zone) === true || strpos(",",$zone) === true)
				  print "  CORRUPT ZONE\n";
				else {
					// for split name zones (e.g. "[[Freeport|West Freeport]]") take second part
					if (strpos($zone,"|")) {
							$zone = substr($zone,strpos($zone,"|")+1);
					}
				
					// check if [[Category:$zone]] or [[Category: $zone]] already exists
					if (strpos($pageHTML,"[[Category:" . $zone . "]]") === false) {
							print "  " . $zone . "\n";
							$pageHTML .= "\n[[Category:" . $zone . "]]\n";
							$modflag = 1;
					}
				}
			}
		}
		
		if ($editType == "LINK_NPC_FACTIONS")
		{
		    // get subset including factions and opposing factions
				$modflag = 0;
				$start = 0;
				
				if (strpos($pageHTML,"factions = ") !== false)
				  $start  = strpos($pageHTML,"factions =");
					
			  if (strpos($pageHTML,"opposing_factions =") !== false)
				  $start = min($start,strpos($pageHTML,"opposing_factions ="));
				
				$factionText = substr($pageHTML,$start);
				
				// regex match
				$regex = "/\* (.*?) &lt;span class=(&quot;|')(pro|opp)fac(&quot;|')/";
				$ret = preg_match_all($regex,$factionText,$block);
			
				if ($ret) {
					foreach ($block[1] as $factionName) {
					  // skip already linked factions
					  if (strpos($factionName,"[[") !== false)
						  continue;
							
					  // make link and replace faction name
						print "  " . $factionName . "\n";
						list($fname,$flink) = getFactionName($factionName);
						$pageHTML = str_replace("* " . $factionName . " &lt;span","* " . $flink . " &lt;span",$pageHTML);
						$modflag = 1;
					}
				}
		}
		
		if ($editType == "LINK_FACTION_NPCS")
		{
		    // get subset including factions and opposing factions
				$modflag = 0;
				$start = 0;
				
				// regex match
				$regex = "/\* (.*?) &lt;span class='fmz'&gt;/";
				$ret = preg_match_all($regex,$pageHTML,$block);
			
				if ($ret) {
					foreach ($block[1] as $npcName) {
					  // skip already linked NPCs
					  if (strpos($npcName,"[[") !== false)
						  continue;
							
					  // replace npc name with link
						//print "  " . $npcName . "\n";
						$pageHTML = str_replace("* " . $npcName . " &lt;span","* [[" . $npcName . "]] &lt;span",$pageHTML);
						$modflag = 1;
					}
				}
		}
		
		if ($editType == "REMOVE_ITEM_SLOTS")
		{
			$modflag = 0;
			
			// regex match
			$regex = "/Slot (.*?), Type (.*?)\n/";
			$ret = preg_match($regex,$pageHTML,$block);
			
			if ($ret) {
				// preg_replace
				$pageHTML = preg_replace("/Slot (.*?), Type (.*?)\n/","",$pageHTML);
				$modflag = 1;
			}
		}
		
		if ($editType == "ADD_ITEM_ZONECAT")
		{
				global $classicZones, $kunarkZones, $veliousZones, $multiZones;
				
				$maxNumZonesToAdd = 3;
				
				$modflag = 0;
				
				// get subset of {{Itempage}}
				$start = strpos($pageHTML,"{{Itempage");
				$itemPage = substr($pageHTML,$start);
				
				$end = strpos($itemPage,"}}");
				$itemPage = substr($itemPage,0,$end);
				
				$end = strpos($itemPage,"|soldby");
				if ($end)
				  $itemPage = substr($itemPage,0,$end);
				
				// get |dropsfrom= parameter contents
				$start = strpos($itemPage,"|dropsfrom");
				if ($start) {
						$start = strpos($itemPage,"\n",$start);
						
						$dropsText = substr($itemPage,$start+1);
						
						// make list of zones dropped in
						$ret = preg_match_all("/\[\[(.*?)\]\]/", $dropsText, $block);
						
						if ($ret) {
								$zoneList = array();
								
								// loop over candidates
								foreach ($block[1] as $zone) {
										// for split name zones (e.g. "[[Freeport|West Freeport]]") take second part
										if (strpos($zone,"|")) {
												$zoneName = substr($zone,strpos($zone,"|")+1);
												$zone     = substr($zone,0,strpos($zone,"|"));
										} else {
										    $zoneName = $zone;
									  }
										
										// restrict candidate zonelist to valid zonenames
										if (in_array($zoneName,$classicZones) || in_array($zoneName,$kunarkZones) || 
												in_array($zoneName,$veliousZones))
													$zoneList[] = $zoneName;
													
										// for multizones allow key membership in zonelists
										if (in_array($zone,$multiZones) && (array_key_exists($zoneName,$classicZones) || 
										                                    array_key_exists($zoneName,$kunarkZones) || 
												                                array_key_exists($zoneName,$veliousZones)))
													$zoneList[] = $zoneName;
								}
								
								// do not add categories for items that drop it tons of zones
								if (count($zoneList) && count($zoneList) <= $maxNumZonesToAdd)
								{
										// add new breakline if necessary
										if (substr($pageHTML,-1) != "\n")
												$pageHTML .= "\n";
												
										//echo "----" . substr($pageHTML,-1) . "----\n";
												
										// add categories to HTML
										foreach ($zoneList as $zone)
										{
												// check if we've already made these changes
												if (!strpos($pageHTML,"[[Category:" . $zone . "]]"))
												{
														$pageHTML .= "[[Category:" . $zone . "]]\n";
														echo "  " . $zone . "\n";
														$modflag = 1;
												}
										}
								} else {
								    if (count($zoneList))
										    echo " MAX_NUM_ZONES: " . count($zoneList) . "\n";
								} //count
						} //[[ ]]
				} //$start
		}
    
    // check for changes
    if (!$modflag) {
        print "No changes made, returning (" . $pageName . ")\n";
        return false;
    }
    
    // fix html encoding
    $pageHTML = html_entity_decode($pageHTML);    
    
    // make edit
    $upPost = array("action"      => "edit",
                    "wpTextbox1"  => html_entity_decode($pageHTML),
                    "wpSummary"   => $editMessage,
                    "wpStarttime" => $wpStarttime,
                    "wpEdittime"  => $wpEdittime,
                    "wpEditToken" => $wpEditToken,
                    "wpMinorEdit" => "1");
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$edit_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);   
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$upPost);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $editHTML = curl_exec($ch);
  
    if (strpos($editHTML,"<title>Editing") != false) {
        print "Warning: Edit failed: " . $pageName . "\n";
    }
    
    print $pageName . "\n";
  
    return true;
}

// call this first so we're authenticated on Bot account
function wikiLogin()
{
    $username = "RavhinBot"; // to use, insert username and password
    $password = ""; 
    
    $login_url = "http://wiki.project1999.org/api.php";

    $userAgent = "RavhinBot/1.0";
    $cookieJar = "cookie.txt";
    
    $postStr = "action=login&lgname=" . $username . "&lgpassword=" . $password;
 
    // login (1): get token
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$login_url);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieJar);
    curl_setopt($ch, CURLOPT_POST,3);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$postStr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $wikiHTML = curl_exec($ch);

    $regex = '/token=&quot;(.*?)&quot;/s';  //'token='  //'wpLoginToken" value="
    $ret = preg_match($regex, $wikiHTML, $tokenBlock);
    
    $postStr .= "&lgtoken=" . trim($tokenBlock[1]);  //'&lgtoken=' //'&wpLoginToken='
    echo "Using token: " . trim($tokenBlock[1]) . "\n";
    
    // login (2): return token and login
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$login_url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);
    curl_setopt($ch, CURLOPT_POST,4);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$postStr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $wikiHTML = curl_exec($ch);
    
    if (strpos($wikiHTML, "Success")) {
        echo "Login success.\n";
    } else {
        echo "ERROR: Login likely failed.\n";
        exit;
    }
    
    return array($userAgent,$cookieJar); // for further use
}

function wikiGetCatMemberList($catName,$userAgent,$cookieJar)
{
    $url = "http://wiki.project1999.org/api.php?action=query&list=categorymembers&cmtitle=Category:" . 
            $catName . "&cmlimit=max&format=php";
  
    // get data as serialized php array  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $serialdata = curl_exec($ch);  
  
    $data = unserialize($serialdata);
    
    $members = $data['query']['categorymembers'];
    
    $pageNameList = array();
    
    foreach ($members as $member)
        $pageNameList[] = $member['title'];
    
    return $pageNameList;
}

function batchImageUpload($imgPaths)
{      
    // login
    list($userAgent,$cookieJar) = wikiLogin();
    
    $upload_url = "http://wiki.project1999.org/index.php?title=Special:Upload";
        
    foreach ($imgPaths as $imgPath)
    {
        // config upload
        echo "upload [$imgPath]\n";
        
        $upPost = array("wpSourceType" => "file",
                        "wpIgnoreWarning" => "true",
                        "wpUpload" => "Upload+file",
                        "wpUploadFile" => "@$imgPath");
        
        // Special:Upload
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($ch, CURLOPT_URL,$upload_url);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);   
        curl_setopt($ch, CURLOPT_POST,true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$upPost);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $wikiHTML = curl_exec($ch);   
    }
}

function wikiPageExists($address)
{
    $userAgent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2";
    $cookieJar = "cookie.txt";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    curl_setopt($ch, CURLOPT_URL,$address);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieJar);    
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $HTML = curl_exec($ch);
    
    if (!$HTML) {
    	return false;
    } else {
        if (strpos($HTML,"There is currently no text in this page.")) {
            return false;
        } else {
            return true;
        }
    }
}

?>