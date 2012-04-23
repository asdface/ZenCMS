<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - MMOwned Private Server</title>
<link href="styles/master.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="styles/featured.css" />
</head>

<body>
<?php include('includes/menu.php');?>

<!--<div id="pagetitle">NIEUWS&nbsp;<font color="#3cbcfd">PAGINA</font></div>-->
<div id="nolifelan-font"></div>

<div id="content">
<br />
  <div id="newscontainer">
	<?php include('includes/featured.php'); ?>
    <?php include('includes/news.php'); ?>
	<?php include('includes/vote-footer.php'); ?>
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
</div>
<? include('includes/footer.php'); ?>
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.pack.js"></script>
	<script type="text/javascript" src="js/jquery-easing-compatibility.1.2.pack.js"></script>
	<script type="text/javascript" src="js/coda-slider.1.1.1.pack.js"></script>
    <script type="text/javascript" src="js/slide.js"></script>
    <script type="text/javascript" src="js/featured.js"></script>
	<script type="text/javascript" src="js/status.js"></script>
</body>
</html>