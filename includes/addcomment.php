<?php
include('../includes/config.php');

function cleanuserinput($dirty){ 
   return mysql_real_escape_string($dirty); 
}
if(isset($_POST['submit_x']) && !empty($_POST['poster']) && !empty($_POST['email']) && !empty($_POST['text'])){
		mysql_select_db($commentdb, $con) or die(mysql_error());
		$message = htmlspecialchars($_POST['text']);
		$message = str_replace(":smile:",mysql_real_escape_string("<img src='images/smilies/icon_smile.png' />"),$message); 
		$message = str_replace(":sad:",mysql_real_escape_string("<img src='images/smilies/icon_sad.png' />"),$message);
		$message = str_replace(":wink:",mysql_real_escape_string("<img src='images/smilies/icon_wink.png' />"),$message);
		$message = str_replace(":surprised:",mysql_real_escape_string("<img src='images/smilies/icon_surprised.png' />"),$message);
		$message = str_replace(":confused:",mysql_real_escape_string("<img src='images/smilies/icon_confused.png' />"),$message);
		$message = str_replace(":neutral:",mysql_real_escape_string("<img src='images/smilies/icon_neutral.png' />"),$message);
		$message = str_replace(":cool:",mysql_real_escape_string("<img src='images/smilies/icon_cool.png' />"),$message);
		$message = str_replace(":cry:",mysql_real_escape_string("<img src='images/smilies/icon_cry.png' />"),$message);
		$message = str_replace(":tongue:",mysql_real_escape_string("<img src='images/smilies/icon_razz.png' />"),$message);
      	mysql_query("INSERT INTO ".$tablecomment."(newsid,text,poster,email,clientip) VALUES('".cleanuserinput($_POST['newsid'])."','".$message."','".cleanuserinput($_POST['poster'])."','".cleanuserinput($_POST['email'])."','".$_SERVER['REMOTE_ADDR']."')") or die(mysql_error());
		header("Location: ../index.php?newsid=".$_POST['newsid']."#cmtContent");
}else{
	header("location: ../index.php?newsid=".$_POST['newsid']."&fill=false#cmtErrors");
}
?>