<?php 
session_start();
$_SESSION['userid']="";
if(empty($_SESSION['userid'])){
	header('Location: login.php');
}else{
	echo "error in process!";
}
?>