<?php
require_once "config/config.php";
 
if(isset($_POST['submit']))
{ 
        $character = $_POST['character'];                               
        $password = $_POST['password'];                         
        $newAccount = $_POST['newAccount'];             
 
        //Max Players per Account = 9
        $MAX_PLAYERS = 9;
 
        $con = mysql_connect($aHost.":".$aPort, $aUsername, $aPass) or die(mysql_error());
        mysql_select_db($aDatabase) or die(mysql_error());
 
        $character = mysql_real_escape_string(html_entity_decode(htmlentities($character)));
        $password = mysql_real_escape_string(html_entity_decode(htmlentities($password)));
        $newAccount = mysql_real_escape_string(html_entity_decode(htmlentities($newAccount)));
 
        $query = "SELECT accounts.acct, password FROM accounts INNER JOIN characters ON accounts.acct = characters.acct WHERE name = '".$character."' AND password = '".$password."'";
 
        $result = mysql_query($query) or die(mysql_error());
        $numrows = mysql_num_rows($result);
 
        echo "<tr><td align=center>";
 
        if($numrows == 0)
        {
                die("Your account information is incorrect!");
        }
        
        $query = "SELECT acct FROM accounts WHERE login = '".$newAccount."'";
        $result = mysql_query($query) or die(mysql_error());
 
        $numrows = mysql_num_rows($result);
 
        if($numrows == 0)
        {
                die("That Account does not exist!<br>Please create the Account or fix any errors!");
        }
        $row = mysql_fetch_array($result);
 
        $acct = $row[0];
 
        $query = "SELECT count(*) FROM characters WHERE acct = '".$acct."'";
        $result = mysql_query($query);
        $numrows = mysql_num_rows($result);
 
        $numChars = "";
 
        if($numrows == 0)
        {
                $numChars = 0;
        }
 
        $row = mysql_fetch_array($result);
        $numChars = $row[0];
 
        if($numChars == 0)
        {
                die("You must have at least one Character on the recieving account!<br />Account transfer was not completed!");
        }
        elseif($numChars >= $MAX_PLAYERS)
        {
                die("That account has the maximum number of players!<br />Account transfer was not completed!");
        }
        else
        {
                $query = "UPDATE characters SET acct = '".$acct."' WHERE name = '".$character."'";
                mysql_query($query);
        }
 
	echo "<h1>Character Transfer</h1>";
	echo "<center>";
	echo "<br />";
	echo "Player '<b>".$character."</b>' has been transfered to the Account '<b>".$newAccount."</b>'<br />";
	echo "</center>";
 
        //close mysql connection
        mysql_close();
}
//if page is loaded, display transfer form
else
{
	echo "<form name='myform' method='post' action='transfer.php'>";

	echo "<h1>Character Transfer</h1>";
	echo "<center>";
	echo "<br />";
	echo "<tr><td width='125'>Character: </td><td><input type='text' name='character' value=''></td></tr>";
	echo "<br />";
	echo "<tr><td width='125'>Password: </td><td><input type='password' name='password' value=''></td></tr>";
	echo "<br />";
	echo "<tr><td width='125'>Transfer To: </td><td><input type='text' name='newAccount'></td></tr>";
	echo "<br />";
	echo "<tr><td colspan='2' align='center'><br><input type='submit' name='submit' value='Transfer'></td></tr>";
	echo "</form>";
	echo "</center>";
}
 
	echo "<center>";
	echo "</table>";
	echo "<br />";
	echo "<br />";
	echo "You <b>MUST</b> be offline for this tool to successfully work!<br /><br />";
	echo "<br />";
	echo "<br />";
	echo "</center>";
?>