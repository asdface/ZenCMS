<?php session_start();
if(empty($_SESSION['userid'])){
	header('Location: login.php');
}
?>
<?php include('../includes/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Report viewer</title>
<link href="../styles/master.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!--<div id="pagetitle">VIEW&nbsp;<font color="#3cbcfd">REPORTS</font></div>-->

<?php include('includes/menu.php'); ?>

<div id="content">
	<div class="admin-panel">
		<div class="module-top"></div>
    	<div class="module-mid">
    		<div class="module-mid-text">
            <h1>Reports filed:</h1>
 			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <table>
            <tr><td>Select type:&nbsp;</td>
            <td><select name="reporttype">
            <option>Spell</option>
            </select>
            </td></tr>
            <tr><td><input name="submit" type="submit" value="View reports" /></td></tr>
            </table>
            </form>
			<?php 
            if(isset($_POST['submit'])){
			mysql_select_db("test",$con) or die(mysql_error());
			$result=mysql_query("SELECT * FROM reports WHERE reporttype='".$_POST['reporttype']."'") or die(mysql_error());
			echo "<table>";
			while($row=mysql_fetch_assoc($result)){	
			echo "<tr><td><b>Spellname:</b> </td><td>".$row['spellname']."</td></tr>";
			echo "<tr><td><b>Spell rank:</b></td><td>".$row['spellrank']."</td></tr>";
			echo "<tr><td><b>Character:</b></td><td>".$row['charactername']."</td></tr>";
			echo "<tr><td><b>Race:</b></td><td>".$row['charrace']."</td></tr>";
			echo "<tr><td><b>Class:</b></td><td>".$row['charclass']."</td></tr>";
			echo "<tr><td><b>Date/Time:</b></td><td>".$row['thedate']."</td></tr>";
			echo "<tr><td><b>Other:</b></td><td>".$row['other']."</td></tr>";
			echo "<tr><td></td></tr>";
			echo "<tr><td><hr/></td></tr>";
			echo "<tr><td></td></tr>";
				}
			echo "</table>";
			}
			mysql_close($con);
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