<html>
<head>
<title>Project 1999 Wiki - Ravhin's Scraping Utilities</title>
</head>
<body>

<?

// wikiUtils.php
// last updated: Jan 10, 2012
// ravhin

include("wikiCore.php");

if (!$_POST["itemName"] && !$_POST["NPCName"] && !$_POST["NPC_ID1"] && !$_POST["QuestName"] && !$_POST["SpellName"] 
	&& !$_POST["FactionName"] && !$_POST["commaList"] && !$_POST["hoverList"])
{ ?>

   <div style="text-align:center;"><div style="width: 800px; border: 1px dotted #559; padding: 10px; margin: 5px;">
   <img src="WikiLogo.gif" style="float:right;">
   <h3>Project 1999 Wiki - Ravhin's Scraping Utilities</h3>
   <h2>This is BETA!</h2>
   <p>For any questions or improvements please contact me <a href="http://wiki.project1999.org/index.php/User_talk:Ravhin">on the wiki</a>.
   <p>Note: Making some pages page can take a long time. Please be patient.</p>
   
   <hr /><br />
   
   <center><table cellpadding="2">
   
   <tr><td><form action='wikiUtils.php' method='post'>
   Item Name: </td><td><input name='itemName' type=text size=30 maxlength=60>
   </td><td><input type='submit' value='Create Item Page' name='item_button'>
   </form></td></tr>
   
   <tr><td><form action='wikiUtils.php' method='post'>
   NPC Name: </td><td><input name='NPCName' type=text size=30 maxlength=60> &nbsp;&nbsp; (Exact: <input name='nameexact' type='checkbox'>) &nbsp;&nbsp;
   </td><td><input type='submit' value='Create NPC (NamedMob/Merchant) Page' name='npc_button'>
   </form></td></tr>
   
   <tr><td><form action='wikiUtils.php' method='post'>
   NPC IlliaID: </td><td><input name='NPC_ID1' type=text size=10 maxlength=10> &nbsp;&nbsp;&nbsp;&nbsp; EmuID: <input name='NPC_ID2' type=text size=10 maxlength=10>
   </td><td><input type='submit' value='Create NPC Page (By ID)' name='npc_byid_button'>
   </form></td></tr>
   
   <tr><td><form action='wikiUtils.php' method='post'>
   Spell Name: </td><td><input name='SpellName' type=text size=40 maxlength=60>
   </td><td><input type='submit' value='Create Spell Page' name='spell_button'>
   </form></td></tr>
   
   <tr><td><form action='wikiUtils.php' method='post'>
   Faction Name: </td><td><input name='FactionName' type=text size=30 maxlength=60>
   </td><td><input type='submit' value='Create Faction Page' name='faction_button'>
   </form></td></tr>
   
   <tr><td><form action='wikiUtils.php' method='post'>
   Quest Name: </td><td><input name='QuestName' type=text size=30 maxlength=60>
   </td><td><input type='submit' value='Create Quest Page' name='quest_button'>
   </form></td></tr>
   
   </table></center>
   
   <br /><hr /><br />
   
   <form action='wikiUtils.php' method='post'>
   Comma Separated List: <input name='commaList' type='text' size=80>
   <br /><input type='submit' value='Make Linked Comma List' name='zone_button'>
   </form>
   
   <form action='wikiUtils.php' method='post'>
   Comma Separated List: <input name='hoverList' type='text' size=80>
   <br /><input type='submit' value='Make MouseoverHover Comma List' name='zone_button'>
   </form>
   
   </div></div>

<? } elseif ($_POST["itemName"]) {

    $itemName = stripslashes($_POST["itemName"]);

    $lucyID = getLucyID($itemName);
    
    if ($lucyID)
    { 
        print "<div style='color:#888;font-size:small;'>\n";
        list($itemPage,$lucy_img_id) = itemPage($itemName);
        print "</div>\n";
        
        $imgLink = "http://everquest.allakhazam.com/pgfx/item_" . $lucy_img_id . ".png";
        $numRows  = count(explode("\n",$itemPage));
        
        ?>
  <div style="float:right; padding:10px; border: 1px solid #ccc;">
    <a href="<?=$imgLink?>">
    <img src="<?=$imgLink?>"><br />
    <?=$imgLink?></a>
  </div>
  
  <br>Found: <?=$itemName?> (ID = <?=$lucyID?>) - <font color="green">SUCCESS!</font> (<a href="wikiUtils.php">go back</a>)<br><br>
  <b>Step 1: (Rarely Necessary)</b> Copy this linked image (the item icon) and reupload to the wiki (keep the same filename): 
  <a href="<?=$imgLink?>"><?=$imgLink?></a><br>
  <br>
  <b>Step 2:</b> Select All, Copy the whole page in the text box below. 
  Paste into the new item page (use the exact item name as the page name).
  <br>Please <font size="6">review</font> what you get, add any notes, <font size="6">make any needed corrections</font>:
  <br><br>
    
<textarea name="itemPage" cols="120" rows="<?=$numRows?>">
<?=$itemPage?>
</textarea><br>
        <?
    } else {
      echo "Error: Item not found in DB.<br><a href='wikiUtils.php'>Go Back</a>";
    }

} elseif ($_POST["NPCName"]) {
  
    $npcName = stripslashes($_POST["NPCName"]);
    
    list($illiaID,$illiaName) = getIlliaID($npcName,$_POST["nameexact"]);
    
    if ($illiaID)
    { 
        print "<div style='color:#888;font-size:small;'>\n";
        list($npcPage,$illiaImgLink) = npcPage($npcName,$_POST["nameexact"]);
        print "</div>\n";
        
        $numRows  = count(explode("\n",$npcPage));
        
        ?>
  <div style="float:right; padding:10px; border: 1px solid #ccc;">
    <a href="<?=$illiaImgLink?>">
    <img src="<?=$illiaImgLink?>"><br />
    <?=$illiaImgLink?></a>
  </div>
  
  <br>Found: <?=$npcName?> (Illia ID = <?=$illiaID?>) - <font color="green">SUCCESS!</font> (<a href="wikiUtils.php">go back</a>)<br><br>
  <b>Step 1:</b> Copy this linked image (the npc screenshot) and reupload to the wiki:</br>
  <a href="<?=$illiaImgLink?>"><?=$illiaImgLink?></a><br>
  <br>
  <b>Step 2:</b> Select All, Copy the whole page in the text box below. 
  Paste into the new NPC page (use the exact NPC name as the page name).
  <br>Please <font size="6">review</font> what you get, add any notes, <font size="6">make any needed corrections</font>:
  <br><br>
    
<textarea name="npcPage" cols="100" rows="<?=$numRows?>">
<?=$npcPage?>
</textarea><br>
        <? } else {
      echo "Error: Mob not found in DB.<br><a href='wikiUtils.php'>Go Back</a>";
    }
    
} elseif ($_POST["NPC_ID1"]) {
  
    print "<div style='color:#888;font-size:small;'>\n";
    list($npcPage,$npcName,$illiaImgLink) = npcPageByID(stripslashes($_POST["NPC_ID1"]),stripslashes($_POST["NPC_ID2"]));
    print "</div>\n";
        
    $numRows  = count(explode("\n",$npcPage));
        
        ?>
	
  <div style="float:right; padding:10px; border: 1px solid #ccc;">
    <a href="<?=$illiaImgLink?>">
    <img src="<?=$illiaImgLink?>"><br />
    <?=$illiaImgLink?></a>
  </div>
  
  <br>Found: <?=$npcName?> (Illia ID = <?=$illiaID?>) - <font color="green">SUCCESS!</font> (<a href="wikiUtils.php">go back</a>)<br><br>
  <b>Step 1:</b> Copy this linked image (the npc screenshot) and reupload to the wiki:</br>
  <a href="<?=$illiaImgLink?>"><?=$illiaImgLink?></a><br>
  <br>
  <b>Step 2:</b> Select All, Copy the whole page in the text box below. 
  Paste into the new NPC page (use the exact NPC name as the page name).
  <br>Please <font size="6">review</font> what you get, add any notes, <font size="6">make any needed corrections</font>:
  <br><br>
    
<textarea name="npcPage" cols="100" rows="<?=$numRows?>">
<?=$npcPage?>
</textarea><br>

        <?    
  
} elseif ($_POST["QuestName"]) {
  
    $questName = stripslashes($_POST["QuestName"]);
    
    print "<div style='color:#888;font-size:small;'>\n";
    list($questPage,$npc_img_link) = questPage($questName);
    print "</div>\n";
        
    $numRows  = count(explode("\n",$questPage));
        
        ?>
  <div style="float:right; padding:10px; border: 1px solid #ccc;">
    <a href="<?=$npc_img_link?>">
    <img src="<?=$npc_img_link?>"><br />
    <?=$npc_img_link?></a>
  </div>
  
  <br>Found: <?=$questName?> - <font color="green">SUCCESS!</font> (<a href="wikiUtils.php">go back</a>)<br><br>
  <b>Step 1:</b> Copy this linked image (the npc/quest giver screenshot) and reupload to the wiki:</br>
  <a href="<?=$npc_img_link?>"><?=$npc_img_link?></a><br>
  <br>
  <b>Step 2:</b> Select All, Copy the whole page in the text box below. 
  Paste into the new quest page (use the exact quest name as the page name).
  <br>Please <font size="6">review</font> what you get, add any notes, <font size="6">make any needed corrections</font>:
  <br><br>
    
<textarea name="questPage" cols="100" rows="<?=$numRows?>">
<?=$questPage?>
</textarea><br>
        <? }
elseif ($_POST["SpellName"]) {
  
    $spellName = stripslashes($_POST["SpellName"]);
    
    print "<div style='color:#888;font-size:small;'>\n";
    $spellPage = spellPage($spellName);
    print "</div>\n";
    
    $numRows  = count(explode("\n",$spellPage));
        
        ?>
  <br>Found: <?=$spellName?> <font color="green">SUCCESS!</font> (<a href="wikiUtils.php">go back</a>)<br><br>
  <b>Step 1:</b> Select All, Copy the whole page in the text box below. 
  Paste into the new spell page (use the exact spell name as the page name).
  <br>Please <font size="6">review</font> what you get, add any notes, <font size="6">make any needed corrections</font>:
  <br><br>
    
<textarea name="spellPage" cols="120" rows="<?=$numRows?>">
<?=$spellPage?>
</textarea><br>
        <?  
  
} elseif ($_POST["FactionName"]) {
  
    $factionName = stripslashes($_POST["FactionName"]);
    
    print "<div style='color:#888;font-size:small;'>\n";
    $factionPage = factionPage($factionName);
    print "</div>\n";
    
    $numRows  = count(explode("\n",$factionPage));
        
        ?>
  <br>Found: <?=$factionName?> <font color="green">SUCCESS!</font> (<a href="wikiUtils.php">go back</a>)<br><br>
  <b>Step 1:</b> Select All, Copy the whole page in the text box below. 
  Paste into the new spell page (use the exact spell name as the page name).
  <br>Please <font size="6">review</font> what you get, add any notes, <font size="6">make any needed corrections</font>:
  <br><br>
    
<textarea name="spellPage" cols="120" rows="<?=$numRows?>">
<?=$factionPage?>
</textarea><br>
        <?    
  
} elseif ($_POST["commaList"] || $_POST["hoverList"]) {
        
    if ($_POST["commaList"]) {
        $commaList = $_POST["commaList"]; 
        $linkedList = "[[" . $commaList . "]]";
        $linkedList = str_replace(", ","]], [[",$linkedList);      
    }
    if ($_POST["hoverList"]) {
        $hoverList = $_POST["hoverList"]; 
        $linkedList = "{{:" . $hoverList . "}}";
        $linkedList = str_replace(", ","}}, {{:",$linkedList);
    }
    
  ?>
    (<a href="wikiUtils.php">go back</a>)<br><br>
    <textarea name="itemPage" cols="80" rows="<?=$numRows?>">
    <?=$linkedList?>
    </textarea>
    <br>
  <?             

}

?>

</body>
</html>