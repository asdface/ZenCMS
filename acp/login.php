<?php
session_start();

function cleanuserinput($dirty){if(get_magic_quotes_gpc()){$clean = mysql_real_escape_string(stripslashes($dirty));}else{ $clean = mysql_real_escape_string($dirty);}return $clean;}
  
$message="Please log in to continue to the Admin Control Panel!";
$class="attention";

if(isset($_POST['password']) || isset($_POST['username'])){
	if(empty($_POST['password']) || empty($_POST['username'])){
		$message="Please fill in all the fields!";
		$class="alert";
	}else{
		include('../includes/config.php');
		$password=cleanuserinput(md5($_POST['password']));
		mysql_select_db($logindb, $con) or die("cannot select login database!");
		$result=mysql_query("SELECT userpassword FROM acp_users WHERE username='".cleanuserinput($_POST['username'])."' and userpassword='".$password."'", $con);
		$count=mysql_num_rows($result);
		if($count==1){
			$result=mysql_query("SELECT userid FROM acp_users WHERE username='".cleanuserinput($_POST['username'])."' and userpassword='".$password."'", $con);
			$row=mysql_fetch_assoc($result);
			$_SESSION['userid']=$row['userid'];
			$message=$_SESSION['userid'];
			header('Location: index.php');
		}else{
			$message="Wrong password/username combination!";
			$class="alert";
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - ACP Login</title>
<link href="../styles/master.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include('includes/menu.php'); ?>

<!--<div id="pagetitle">Admin&nbsp;<font color="#3cbcfd">Login</font></div>-->

<div id="content">
	<div class="admin-panel">
		<div class="module-top"></div>
    	<div class="module-mid">
    		<div class="module-mid-text">
            
        <h1>&raquo; Login</h1>
		<p>
        <span class="<?php echo $class; ?>"><?php echo $message; ?></span>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="login">
        <table>
        <tr>
        <td>Username: </td><td><input name="username" /></td>
        </tr>
        <tr>
        <td>Password: </td><td><input name="password" type="password" /></td>
        </tr>
        <td><input name="submit" type="submit" value="Login" /></td>
        </table>
        </form>
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