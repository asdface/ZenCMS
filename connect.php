<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Connect</title>
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
            
        <h1>&raquo; Create an account</h1>
		<p>
        The first thing you have to do, is to create an account on our website, this will be your in-game account.
        <span class="notice"><a href="register.php">Register here</a></span>
        The page requires you to fill in some info, this information will <b>NOT</b> be used to aid commercial purposes.<br/><br/>
        Once you´ve completed the registration, you may continue.<br/>
        </p>

        <h1>» Change your realmlist</h1>
        <p>
        Next thing you need to do, is changing your realmlist.wtf file. This file can be located in
        <span class="note">C:\Program Files\World Of Wacraft\Data\language*\Realmlist.wtf</span>
        You need to open the file with a text editor (e.g. wordpad) and change the first two lines with:
        <span class="note">
        set realmlist <?php echo $realmname; ?>
        </span>
        *Language: This is most commonly enGB or enUS, but if you play WoW in another language (e.g. German) this folder has another name.
        </p>
        
        <h1>» Clear your cache</h1>
        <p>
        Now we'll clear our cache folder, to do this you have to 
        go to your cache folder located in:
        <span class="note">C:\Program Files\World Of Wacraft\Cache\WDB\language*</span>
        Delete everything in the folder, don't worry these are very small files and will be created again when you start the game.
        <br /><br />
        *Language: This is most commonly enGB or enUS, but if you play WoW in another language (e.g. German) this folder has another name.
        </p>
        
        <h1>» Download the launcher</h1>
        <p>
        Next up, is downloading the custom launcher, you'll need this if you want to access our custom content.
        
        <span class="download"><a href="#">Download it here</a></span>
  
        When you've downloaded it, continue with the tutorial.
        </p>
        
        <h1>» Starting World of Warcraft</h1>
        <p>
        All you have to do now, is open the launcher you've just downloaded, make sure you have the correct patch and log in using the account name and password you provided when you registered.<br/><br/>
        Then choose the realm you wish to play on, create a character and begin your epic adventure through-out Azeroth!      
        <span class="attention">Please do not update to the latest patch untill we say we support it!</span>
        <br/>
        </p>
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