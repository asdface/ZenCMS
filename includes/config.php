<?php
$psname='MMOwned Private Server'; //Name of your Private Server

$realmname='logon.server.com'; //Realmlist (eg. logon.server.com)
$newsitems='5'; //Number of newsitems to display on the website
$maxplayers='2000'; //Number of maximum players a realm can hold

$realm1='Titans Of War'; //First realmname
$realm2='Phoenix TRAC'; //Second realmname

$port='3306'; //Port used to address your server (default: 3306)
$chardb='auth'; //Database name where your characters table is located.
$accdb='auth'; //Database name of the ingame accounts.

$sqlip='localhost'; //mySQL server IP address
$sqluser='mmowned'; //mySQL server Username
$sqlpass='mmownedtest'; //mySQL server Password
$logindb="gdm_web";
$newsdb='gdm_web'; //Database where news tables are stored
$featdb='gdm_web'; //Database where the 'featured news' tables are stored
$commentdb='gdm_web'; //Database with stored comments

$tablenews='news_new'; //Table name where the news is saved to
$tablefeat='news_featured';// Table where the featured news is saved to
$tablecomment='news_comments';// Table with stored news comments

$con = mysql_connect($sqlip, $sqluser, $sqlpass);
 if (!$con){
	 die(mysql_error());
	 mysql_close($con);
}
$password=md5('password');
?>