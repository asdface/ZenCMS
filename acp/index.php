<?php session_start();
if(empty($_SESSION['userid'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Admin Panel</title>
<link href="../styles/master.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include('includes/menu.php'); ?>

<!--<div id="pagetitle">Control&nbsp;<font color="#3cbcfd">panel</font></div>
-->
<div id="content">
	<div class="admin-panel">
		<div class="module-top"></div>
    	<div class="module-mid">
    		<div class="module-mid-text">  
        <h1>&raquo; Add news</h1>
		<p>
        To add a news item, you have to click the link below:
        <br /><br />
        <a href="addnews.php">ADD NEWS</a>
        <br /><br />
        The page will provide you with sufficient information on how to add and manage your news items.
        </p>

        <h1>» News ticker</h1>
        <p>
        To add something to the auto news ticker, click the following link:
        </p>
        <a href="featured.php">NEWS TICKER</a>
        <h1>» View reports</h1>
        <p>
        To view various reports, click the following link:
        </p>
        <a href="viewreport.php">VIEW REPORTS</a>
        <h1>» Change log</h1>
        <p>
        Because of the amount of changes, 2D decided to create a changelog and I decided to integrate it into our website.
        </p>
        <a href="log.php">VIEW/UPDATE CHANGELOG</a>
			</div>
    	</div>
    	<div class="module-bottom"></div>
    </div>
</div>
<? include('../includes/footer.php'); ?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</body>
</html>