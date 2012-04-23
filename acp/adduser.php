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
if(!empty($_POST['username']) || !empty($_POST['password'])){
      mysql_select_db($newsdb, $con) or die('Could not select database');
      $query="INSERT INTO acp_users(username,userpassword,userpermissions) VALUES('".cleanuserinput($_POST['username'])."','".md5(cleanuserinput($_POST['password']))."','a')" or die(mysql_error());
      $result=mysql_query($query);
      if(!$result){
		  $type='alert';
		  $message=mysql_error();
		  }else{
			  $type='approved';
			  $message='New user successfuly added!';
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
        <tr><td><h1>&raquo; Username</h1><td></tr>
        <tr><td><input name="username" type="text" /></td></tr>
        <tr><td><h1>&raquo; Password</h1></td></tr>
        <tr><td><input name="password" type="password"></input></td></tr>      
        <tr><td><input name="submit" type="submit" value="Add user" /></td></tr>
        </table>
        </form>
        <?php
		if(isset($_POST['username'])){
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