<?php
include('../includes/config.php');

//if unstuck button is pressed, verify and query db if valid
if(isset($_POST['submit']) || isset($_POST['submit_x']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['character']))
{
	//players account name, password and character name
	$account = $_POST['username'];
	$password = $_POST['password'];
	$character = $_POST['character'];

	//get accnt# from characters table where the name is character $character
	$con = mysql_connect($sqlip.":".$port, $sqluser, $sqlpass) or die(mysql_error("Cannot connect to server!"));
	mysql_select_db($accdb) or die(mysql_error("Cannot connect to database!"));

	$character = mysql_real_escape_string(htmlentities($character));

	$query = "SELECT acct FROM characters WHERE name = '".$character."'";

	$result = mysql_query($query) or die(mysql_error());
	$numrows = mysql_num_rows($result);

	//if no rows exist, the character does not exist
	if($numrows == 0)
	{
		header('Location: ../account.php?error=5'); // Character does not exist!
		exit;
	}
	$row = mysql_fetch_array($result);
	$acct = $row[0];

	mysql_close();

	//get make sure the character exists on the correct account and password is the same
	$con = mysql_connect($sqlip.":".$port, $sqluser, $sqlpass) or die(mysql_error());
	mysql_select_db($dbwname) or die(mysql_error());

	$account = mysql_real_escape_string($account);
	$password = mysql_real_escape_string($password);
	$acct = mysql_real_escape_string($acct);

	$query = "SELECT login, acct, password FROM accounts WHERE login ='".$account."' AND password = '".$password."' AND acct = '".$acct."'";

	$result = mysql_query($query) or die(mysql_error());
	$numrows = mysql_num_rows($result);

	//if no rows, user entered invalid data
	if ($numrows == 0)
	{	
		header('Location: ../tools.php?error=1'); // Account does not exist!
		exit;
	}
	mysql_close();
	$con = mysql_connect($dburl.":".$port, $dbuser, $dbpass) or die(mysql_error());
	mysql_select_db($dbwname) or die(mysql_error());

	//update the character table to set the character to hearth location
	$query = "update characters SET positionX = bindpositionX, positionY = bindpositionY, positionZ = bindpositionZ, mapId = bindmapId, zoneId = bindzoneId, deathstate = 0 WHERE name = '".$character."'";

	mysql_query($query) or die(mysql_error());

	//close mysql connection
	mysql_close();
	header('Location: ../account.php?id=true2');
}else{
	header('Location: ../account.php?error=0');
}
?>