<div id="shoutbox-content">
<div id="sb-title">Notifications</div>
<div id="sb-shoutcontainer">
<?php
      $con = mysql_connect("174.120.98.34", "mmowned_test", "test") or die ("Could not connect to server!");
      mysql_select_db("mmowned_test", $con) or die("Could not select database!");
      $query="SELECT * FROM shoutbawx ORDER BY stamp DESC";
      $result=mysql_query($query);
      while ($row=mysql_fetch_assoc($result)){  
	  echo "<span class='sb-shout'><b><font color=".$row['color'].">".$row['poster']."</font></b> : ".$row['message']."</span><br />";
	  }
?>
</div>
</div>