<?php session_start();
if(empty($_SESSION['userid'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Featured News</title>
<link href="../styles/master.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include('includes/menu.php'); ?>
<?php include('../includes/config.php'); ?>
<?php
if(!empty($_POST['image']) || !empty($_POST['thumb'])){
      mysql_select_db($featdb, $con) or die('Could not select database');
      $query="INSERT INTO ".$tablefeat."(image, title, description, thumb, tooltip) VALUES('".cleanuserinput($_POST['image'])."','".cleanuserinput($_POST['title'])."','".cleanuserinput($_POST['description'])."','".cleanuserinput($_POST['thumb'])."','".cleanuserinput($_POST['tooltip'])."')";
      $result=mysql_query($query);
      if(!$result){
		  $type='alert';
		  $message=mysql_error();
		  }else{
			  $type='approved';
			  $message='News ticker successfuly updated!';
		  }
}else{
$type='alert';
$message='You failed to fill in all required fields! Only the title and description are <b>NOT</b> required.';	
}
function cleanuserinput($dirty){ 
   return mysql_real_escape_string(htmlspecialchars($dirty)); 
}
?>
<!--<div id="pagetitle">News&nbsp;<font color="#3cbcfd">ticker</font></div>-->

<div id="content">
	<div class="admin-panel">
		<div class="module-top"></div>
    	<div class="module-mid">
    		<div class="module-mid-text">
            
              <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
              <h1>&raquo; Image (500x282)px</h1>
              <p>
              <input name="image" type="text" />
              </p>
              <h1>&raquo; Title</h1>
              <p>
              <input name="title" type="text" />
              </p>
              <h1>&raquo; Description</h1>
              <p>
              <input name="description" type="text" />
              </p>
              <h1>&raquo; Thumb (60x40)px</h1>
              <p>
              <input name="thumb" type="text" />
              </p>
              <h1>&raquo; Tooltip-text</h1>
              <p>
              <input name="tooltip" type="text" />
              </p>
              <input name="submit" type="submit" value="add item" />
              </form>
              <?php
		if(isset($_POST['image'])){
			if(!empty($message)){
        	echo "<span class='".$type."'>".$message."</span><br/>";
       	 }
		}
        ?>
			</div>
    	</div>
    	<div class="module-bottom"></div>
    </div>
</div>
<? include('../includes/footer.php'); ?>

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
</body>
</html>