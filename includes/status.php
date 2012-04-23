<!--// Written and coded by Gilles De Mey
// Copyrighted by the GNU GENERAL PUBLIC LICENSE (c)-->
<?php include('../includes/config.php'); ?>
<div class="side-content-realm"><b><?php echo $realm1; ?></b></div>
		  <?php
          if (test_serv() == "true")
              {
			  $con = mysql_connect($sqlip, $sqluser, $sqlpass);	  
              $db = mysql_select_db($chardb);
              $query ="SELECT * from characters where online='1' "; 
              $result = mysql_query($query);
              $num = mysql_num_rows($result);
              echo "<div id='player_bar_online'>ONLINE: " . $num . "/".$maxplayers."</div>";
			  mysql_close($con);
              } else
              {
              echo "<div id='player_bar_offline'><font color='#FFFFFF'>SERVER OFFLINE</font></div>";
			  mysql_close($con);
              }
              
          function test_serv(){
              $errno = 6;
              $s = @fsockopen('96.9.135.181', 8093, $errno, $errstr, 2);
              if($s){
                  fclose($s);
                  return true;
                  } else 
                  return false;
          }
          ?>
        </div>