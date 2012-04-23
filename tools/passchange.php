<?php
include("../includes/config.php");

if(isset($_POST['submit']) || isset($_POST['submit_x']) && !empty($_POST['username']) && !empty($_POST['oldpass']) && !empty($_POST['newpass1']) && !empty($_POST['newpass2']))
{
	$account = $_POST['username'];
	$passwordOld = $_POST['oldpass'];
	$passwordNew = $_POST['newpass1'];
	$passwordNew1 = $_POST['newpass2'];
	$con = mysql_connect($sqlip.":".$port, $sqluser, $sqlpass) or die(mysql_error("Cannot connect to server!"));
	mysql_select_db($accdb) or die(mysql_error());

	$account = mysql_real_escape_string($account);
	$passwordOld = mysql_real_escape_string($passwordOld);
	$passwordNew = mysql_real_escape_string($passwordNew);
	$passwordNew1 = mysql_real_escape_string($passwordNew1);

	$query = "SELECT acct FROM accounts WHERE login = '".$account."' AND password = '".$passwordOld."'";

	$result = mysql_query($query) or die(mysql_error());
	$numrows = mysql_num_rows($result);

	//if no rows exist, the character does not exist
	if($passwordNew != $passwordNew1)
	{
		header('Location: ../account.php?error=15'); //Passwords do not match!
		exit;
	}
	if($numrows == 0)
	{
		header('Location: ../account.php?error=12'); //Account does not exist!
		exit;
	}

	$query = "UPDATE accounts SET password = '".$passwordNew."' WHERE login = '".$account."'";
	$result = mysql_query($query) or die(mysql_error());

	header("Location: ../account.php?id=true"); //Password changed successfuly!

	//close mysql connection
	mysql_close();
}
else
{
	header('Location: ../account.php?error=2');
	exit;
}
?>