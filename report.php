<?php
function cleanuserinput($dirty){ 
   return mysql_real_escape_string(htmlspecialchars($dirty)); 
}
include('includes/config.php');
mysql_select_db('test',$con);
if(isset($_POST['submit_spell'])){
	mysql_query("INSERT INTO reports(reporttype, spellname, spellrank, charactername, charrace, charclass, thedate, other) VALUES('spell','".cleanuserinput($_POST['spellname'])."','".cleanuserinput($_POST['rank'])."','".cleanuserinput($_POST['charname'])."','".cleanuserinput($_POST['charrace'])."','".cleanuserinput($_POST['charclass'])."','".date(c)."','".cleanuserinput($_POST['other'])."')") or die(mysql_error());
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Report a bug!</title>
<link href="styles/master.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('includes/menu.php'); include('includes/config.php');?>

<!--<div id="pagetitle">CONNECTION&nbsp;<font color="#3cbcfd">PAGE</font></div>
-->
<div id="content">
<br />
  <div id="newscontainer">
  	<div class='newsholder'>
		<div class="module-top"><div class="module-title">How to connect to our server?</div></div>
        <div class="module-mid">
        	<div class="module-mid-text">
            <h1>Report spells:</h1>
            <p>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
			<legend>Information:</legend>
            <table>
            <tr><td>Spell name:</td><td><input name="spellname" type="text" /></td></tr>
            <tr><td>Spell rank:</td><td><input name="rank" type="text" size="1" maxlength="2" /></td></tr>
            <tr><td>Character name:</td><td><input name="charname" type="text" /></td></tr>
            <tr><td>Character race:</td><td><select name="charrace">
            <optgroup label="Alliance">
            <option>Draenei</option>
            <option>Dwarfs</option>
            <option>Gnome</option>
            <option>Human</option>
            <option>Night Elf</option>
            </optgroup>
            <optgroup label="Horde">
            <option>Blood Elf</option>
            <option>Orc</option>
            <option>Tauren</option>
            <option>Troll</option>
            <option>Undead</option>
            </optgroup>
            </select></td></tr>
            <tr><td>Character class:</td><td><select name="charclass">
            <option>Druid</option>
            <option>Hunter</option>
            <option>Mage</option>
            <option>Paladin</option>
            <option>Priest</option>
            <option>Rogue</option>
            <option>Shaman</option>
            <option>Warlock</option>
            <option>Warrior</option>
            <option>Deathknight</option>
            </select>
            </td></tr>
            <tr><td>Other:</td><td><textarea name="other" cols="30" rows="2"></textarea></td></tr>
            </table>
            <input name="submit_spell" type="submit" value="Report" />
            </fieldset>
            </form>
            </p>
            <br/>
            <br/>
            </div>
        </div>
        <div class="module-bottom"></div>
        <?php include('includes/vote-footer.php'); ?>
    </div>
	
</div>
      
<div class="side-container">
<!-- STATUS by Gilles De Mey-->
   <div id="messageDiv"></div>
	<div class="side-title"><div class="side-title-text">Realm status<span></span></div></div>
       	<div class="side-content">
        	<div id="status">
        		<img src="images/ajax-loader.gif" alt="loading" style="margin-left:105px; margin-top:20px; margin-bottom:20px;" />
        	</div>
        </div>
<!-- END -->
        <?php include('includes/vote.php');?>
        <?php include('sponsors/ad-side.php'); ?>        
        <img src="images/mmops-big.png" alt="MMOPS - MMOwned Private Server" />
        <div style="clear:both"></div>
      </div>
      <br /> 
</div>
<? include('includes/footer.php'); ?>

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/slide.js"></script>
<script type="text/javascript" src="js/singupinfo.js"></script>
<script type="text/javascript" src="js/captcha.js"></script>
<script type="text/javascript" src="js/status.js"></script>
</body>
</html>
</body>
</html>