<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Connect</title>
<link href="styles/master.css" rel="stylesheet" type="text/css" />

</head>
<body>

<!--<?php include('includes/menu.php'); include('includes/config.php');?>
-->
<div id="pagetitle">VOTE&nbsp;<font color="#3cbcfd">PANEL</font></div>

<div id="content">
<br />
  <div id="newscontainer">
  	<div class='newsholder'>
		<div class="module-top"><div class="module-title">How to connect to our server?</div></div>
        <div class="module-mid">
        	<div class="module-mid-text">
            
        <h1>&raquo; Donate nao!</h1>
		<?php include('donate/form.php'); ?>
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