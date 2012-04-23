<?php

/*
Please leave all the credits.
*/
include "config/config.php";

function shitChecker($str)
{
$var = preg_match('/[^a-zA-Z]/', $str);
return $var;
}
function shitCheckerNum($str)
{
$var = preg_match('/[^a-zA-Z0-9]/', $str);
return $var;
}

if(isset($_POST['submit']))
{
//User entered account name
$account = $_POST['account'];
$apassword = $_POST['password'];

//Connect to accounts db
// we connect to example.com and port 3306

$con = mysql_connect($aHost.":".$aPort,$aUsername,$aPass) or die(mysql_error()); // Enter your information here!!
mysql_select_db($aDatabase) or die(mysql_error());

//remove bullshit characters
$account = mysql_real_escape_string(html_entity_decode(htmlentities($account)));

//check for non-alphanumeric characters
if(shitCheckerNum($account) == 1)
{
die("Error: Account contains invalid characters!");
}

//Get email and password from account
$query = "SELECT login, password, banned, muted, lastip FROM accounts WHERE login = '".$account."' AND password ='".$apassword."'";
$query2 = "SELECT ip, expire FROM ipbans WHERE ip LIKE '%".$ipaddr."%'";
$result = mysql_query($query) or die(mysql_error());
$result2 = mysql_query($query2) or die (mysql_error());
$numrows = mysql_num_rows($result);
$numrows2 = mysql_num_rows($result2);

//If no rows, account doesnt exist, die.
if($numrows == 0)
{
die("Error: Invalid username or password");
}

$row = mysql_fetch_array($result);
$row2 = mysql_fetch_array($result2);
$account = mysql_real_escape_string(htmlentities($row[0]));
$password = mysql_real_escape_string(htmlentities($row[1]));
$ipaddr = "".getenv('REMOTE_ADDR')."/32";

//Change this body message to whatever you wish.
	echo "<h1>Account Checker</h1>";
	echo "<center>";
	echo "<br />";
echo "Greetings <b>".$account."</b><br /><br />";

if($row2['ip'] == $ipaddr) {
echo "Warning!! Your IP address has been banned.<br />";
echo "IP Ban expire: "; $intime = ($row2['expire']); $read_in = date("d-m-y, h:i A", $intime); echo "".$read_in."<br>"; // unix time
if($row2['banreason'] == '') {
echo "A reason was not set for your ban. You may Ban Appeal <a href='$banappeal'>here</a>.<br /><br />";
} else {
echo "IP Ban reason: ".$row2['banreason']."<br><br>";
}
}
else {
echo "";
}
if($row['banned'] == 0) {
echo "Your IP is not banned.<br /><br />";
echo "".($row2['ip']).""; // adding CIDR /32 extension, as are added by client no db event to add CIDR, need to make /24 and other extenison searches
}else{
echo "Account Ban Expires On: "; $intime = ($row['banned']); $read_in = date("F j, Y, g:i a", $intime); echo "".$read_in."<br>";
if($row['banreason'] == '') {
echo "A reason was not set for your ban. You may Ban Appeal <a href='$banappeal'>here</a>.<br /><br />";
} else {
echo "IP Ban reason: ".$row['banreason']."<br><br>";
}
echo "<br />If you wish to appeal this Ban, go to the <a href='$banappeal'>Ban Appeal</a> section.<br />";
}
if($row['muted'] == 0)
{ echo "";
}else{
echo "You are muted, expires on: "; $intime = ($row['muted']); $read_in = date("F j, Y, g:i a", $intime); echo "".$read_in."<br><br>";
}

echo "Please enjoy your stay on <b>$servername</b>.<br /><br />";
echo "Your last Login was from IP ".$row['lastip']."<br>";
echo "Current IP: ".getenv('REMOTE_ADDR')."";
echo "<br>Have some feedback? <a href='$feedback'>Tell us!</a>";
echo "<br />";

mysql_close();
}
else
{
	echo "<form name='myform' method='post' action='bancheck.php'>";

	echo "<h1>Account Checker</h1>";
	echo "<center>";
	echo "<br />";
	echo "<tr><td width='125'>Account: </td><td><input type='text' name='account' value=''></td></tr>";
	echo "<br />";
	echo "<tr><td width='125'>Password: </td><td><input type='password' name='password' value=''></td></tr>";
	echo "<br />";
	echo "<tr><td colspan='2' align='center'><br><input type='submit' name='submit' value='Submit'></td></tr>";
	echo "</form>";
	echo "</center>";
}

	echo "<center>";
	echo "</table>";
	echo "<br />";
	echo "<br />";
	echo "<small>Created by Bellatrix";
	echo "<br />";
	echo "Modded by Bessy & Blackboy0</small>";
	echo "<br />";
	echo " ";
	echo "<br />";
	echo "</center>";
?>