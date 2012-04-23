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

<!--<div id="pagetitle">CHANGE&nbsp;<font color="#3cbcfd">LOG</font></div>-->

<div id="content">
	<div class="admin-panel">
		<div class="module-top"></div>
    	<div class="module-mid">
    		<div class="module-mid-text">
        
        	<h1>View Content</h1>
            <p>
            <?php
 			$content = file("changelog.txt");
 			 $data = implode("<br>",$content);
			 echo $data;
			?> 
            </p>          
			</div>
    	</div>
    	<div class="module-bottom"></div>
    </div>
</div>
<? include('../includes/footer.php'); ?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</body>
</html>