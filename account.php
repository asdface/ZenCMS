<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Tools</title>
<link href="styles/master.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php include('includes/menu.php'); include('includes/config.php');?>

<!--<div id="pagetitle">ACCOUNT&nbsp;<font color="#3cbcfd">TOOLS</font></div>
-->
<div id="content">
<br />
  <div id="newscontainer">
  	<div class='newsholder'>
		<div class="module-top"><div class="module-title">Available account tools</div></div>
        <div class="module-mid">
        	<div class="module-mid-text">
              <h1>&raquo; Change your password</h1>
              <p>
              If you wish to change you password, you may do so by filling in the form below correctly.
              <form action="tools/passchange.php" method="post"><br />
              <div style="text-align:right; width:300px;">
              Username:&nbsp;<input name="username" type="text" /><br />
              Old Password:&nbsp;<input name="oldpass" type="password" /><br />
              New password:&nbsp;<input name="newpass1" type="password" /><br />
              Repeat New Password:&nbsp;<input name="newpass2" type="password" /><br /><br/>
              </div>
              <input name="submit" type="image" src="images/btnpassword.png" />
              </form>
              <?php if($_GET['error']=='2'){$style="alert"; $error="Please fill in all the fields!";echo "<span class='".$style."'>".$error."</span>";}?>
              <?php if($_GET['error']=='15'){$style="alert"; $error="New passwords do not match!";echo "<span class='".$style."'>".$error."</span>";}?>
              <?php if($_GET['error']=='12'){$style="alert"; $error="The account was not found!";echo "<span class='".$style."'>".$error."</span>";}?>
              <?php if($_GET['id']=='true'){$style="approved"; $error="The password was changed successfuly!";echo "<span class='".$style."'>".$error."</span>";}?>
              </p>
               <h1>&raquo; Unstuck & Revive</h1>
              <p>
              If you are stuck somehow, use this tool to revive your character and unstuck him/her.
              <form action="tools/unstuck.php" method="post"><br />
              <div style="text-align:right; width:300px;">
              Username:&nbsp;<input name="username" type="text" /><br />
              Password:&nbsp;<input name="password" type="text" /><br />
              Character Name:&nbsp;<input name="character" type="text" /><br /><br/>
              </div>
              <input name="submit" type="image" src="images/btnunstuck.png" /><br/>
              </form>
              <?php if($_GET['error']=='0'){$style="alert"; $error="Please fill in all the fields!"; echo "<span class='".$style."'>".$error."</span>";}?>
              <?php if($_GET['error']=='1'){$style="alert"; $error="The account does not exist or wrong password/username combination!"; echo "<span class='".$style."'>".$error."</span>";}?>
              <?php if($_GET['error']=='5'){$style="alert"; $error="Character not found, or does not belong to you!"; echo "<span class='".$style."'>".$error."</span>";}?>
              <?php if($_GET['id']=='true2'){$style="approved"; $error="Your character was unstuck successfuly!"; echo "<span class='".$style."'>".$error."</span>";}?>
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
<script type="text/javascript" src="js/status.js"></script>
</body>
</html>