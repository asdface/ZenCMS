<?php session_start();
if(empty($_SESSION['userid'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Add News</title>
<link href="../styles/master.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include('includes/menu.php');
include('../includes/config.php');
if(!empty($_POST['title']) || !empty($_POST['message']) || !empty($_POST['poster'])){
      mysql_select_db($newsdb, $con) or die('Could not select database');
	  $result=mysql_query("SELECT userid FROM acp_users WHERE userid='".$_SESSION['userid']."'");
	  $row=mysql_fetch_assoc($result);
	  $posterid=$row['userid'];
      $query="INSERT INTO news_new(title,date,content,poster,enabled) VALUES('".cleanuserinput($_POST['title'])."','".date('l, j F')."','".cleanuserinput($_POST['content'])."','".$posterid."','1')" or die(mysql_error());
      $result=mysql_query($query);
      if(!$result){
		  $type='alert';
		  $message=mysql_error();
		  }else{
			  $type='approved';
			  $message='New news item successfuly added!';
		  }
}else{
$type='alert';
$message='You failed to fill in all required fields! Only the link is <b>NOT</b> required.';	
}
function cleanuserinput($dirty){ 
   return mysql_real_escape_string(htmlspecialchars($dirty)); 
}
?>
<!--<div id="pagetitle">ADD&nbsp;<font color="#3cbcfd">NEWS</font></div>-->

<div id="content">
	<div class="admin-panel">
		<div class="module-top"></div>
    	<div class="module-mid">
    		<div class="module-mid-text">
            
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
        <tr><td><h1>&raquo; Title</h1><td></tr>
        <tr><td><input name="title" type="text" /></td></tr>
        <tr><td><h1>&raquo; Message</h1></td></tr>
        <tr><td><textarea name="content" cols="50" rows="5"></textarea></td></tr>      
        <tr><td><input name="submit" type="submit" value="Add news" /></td></tr>
        </table>
        </form>
        <?php
		if(isset($_POST['title'])){
			if(!empty($message)){
        	echo "<span class='".$type."'>".$message."</span><br/>";
       	 }
		}
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