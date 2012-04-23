<?php
include('includes/config.php');
if(!isset($_GET['newsid'])){
      mysql_select_db($newsdb, $con) or die('Cannot connect to news database');
      $query="SELECT * FROM ".$tablenews." INNER JOIN acp_users ON ".$tablenews.".poster=acp_users.userid WHERE enabled=1 ORDER BY newsid DESC LIMIT ".$newsitems or die('Cannot find news table!');
      $result=mysql_query($query);
	  $result2=mysql_query("SELECT * FROM news_comments WHERE newsid='".$row['newsid']."'");
      while ($row=mysql_fetch_assoc($result)){
		  $result2=mysql_query("SELECT * FROM news_comments WHERE newsid='".$row['newsid']."'");
		  $count=mysql_num_rows($result2);
		  echo "
          <div class='newsholder'>
              <div class='news-title'></div>
              <div class='news-date'>".$row['date']."<div class='news-more'></div></div>
                  <div class='news-content'>
				  <h1>&raquo; ".$row['title']."</h1>".$row['content'].
                  "
                  <div class='news-author'><div class='news-author-text'>Posted by: ".$row['username']."&nbsp;|&nbsp;<a href='index.php?newsid=".$row['newsid']."'><font color='#000'>Comments (".$count.")</font></a></div></div>
                  </div>
				  <div class='module-bottom'></div>
          </div>";}
}else{
	mysql_select_db($newsdb, $con) or die('Could not select database');
      $query="SELECT * FROM ".$tablenews." INNER JOIN acp_users ON ".$tablenews.".poster=acp_users.userid WHERE newsid='".$_GET['newsid']."'" or die('Cannot find news table!');
      $result=mysql_query($query);
	  $row=mysql_fetch_assoc($result);
	echo "
          <div class='newsholder'>
              <div class='news-title'></div>
              <div class='news-date'>".$row['date']."<div class='news-more'><a href='index.php'>&laquo; Back</a></div></div>
                  <div class='news-content'>
				  <h1>&raquo; ".$row['title']."</h1>".$row['content'].
                  "
                  <div class='news-author'><div class='news-author-text'>Posted by: ".$row['username']."</div></div>
                  </div>
				  <div class='module-bottom'></div>
          </div>";
		mysql_select_db($commentdb, $con) or die('Could not select database');
      	$query="SELECT * FROM ".$tablecomment." WHERE newsid='".$_GET['newsid']."' ORDER BY id ASC" or die('Cannot find comments table!');
      	$result=mysql_query($query);
		echo "<div id='cmtContainer'>
				<div id='cmtTop'><div id='cmtTop-text'>Comments:</div></div>
					<div id='cmtContent'>
						<div id='cmtContent-text-container'>";
		while ($row=mysql_fetch_assoc($result)){echo  "<div class='cmtBubble-mid'>".$row['text']."</div><div class='cmtBubble-arrow'></div><br/><div class='cmtPoster'>Comment by:&nbsp;".$row['poster']."</div>";}
		echo 		"</div>
					<div id='cmtRuler'></div>";
					if(isset($_GET['fill']) && $_GET['fill']='false'){
						echo "<p id='cmtErrors'><span class='alert'>Please fill in all the fields!</span></p>";
					}
					echo "<div id='cmtForm'>
						<form action='includes/addcomment.php' method='post' name='comment' id='comment'>
						<table>
							<tr><td>Name:&nbsp;<input name='poster' type='text' /></td></tr>
							<tr><td>Email:&nbsp;<input name='email' type='text' /></td></tr>
							<tr><td>
							<img src='images/smilies/icon_smile.png' alt='smile' onclick='javascript:inserttext(\":smile:\");' />
							<img src='images/smilies/icon_sad.png' alt='sad' onclick='javascript:inserttext(\":sad:\");' />
							<img src='images/smilies/icon_wink.png' alt='wink' onclick='javascript:inserttext(\":wink:\");' />
							<img src='images/smilies/icon_surprised.png' alt='surprised' onclick='javascript:inserttext(\":surprised:\");' />
							<img src='images/smilies/icon_confused.png' alt='confused' onclick='javascript:inserttext(\":confused:\");' />
							<img src='images/smilies/icon_neutral.png' alt='neutral' onclick='javascript:inserttext(\":neutral:\");' />
							<img src='images/smilies/icon_cool.png' alt='cool' onclick='javascript:inserttext(\":cool:\");' />
							<img src='images/smilies/icon_cry.png' alt='cry' onclick='javascript:inserttext(\":cry:\");' />
							<img src='images/smilies/icon_razz.png' alt='tongue' onclick='javascript:inserttext(\":tongue:\");' />
							</td></tr>
						</table>
							<textarea name='text' cols='50' rows='5' id='cmtText'></textarea><br/>
							<input name='submit' type='image' src='images/btnaddcomment.png' />
							<input name='newsid' type='text' value='".$_GET['newsid']."' readonly='readonly' style='visibility:hidden' />
						</form>
					</div>
				</div>
				<div id='cmtBottom'></div>
			  </div>";
}
?>
<script type='text/javascript'>
	function inserttext(smilie){
		document.comment.text.value += " "+ smilie;
		document.comment.text.value.focus();
	}
</script>