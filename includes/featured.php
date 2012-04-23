 <?php
 include('includes/config.php');
 mysql_select_db($featdb,$con);
 echo "<div id='page-wrap'>						
	<div class='slider-wrap'>
		<div id='main-photo-slider' class='csw'>
			<div class='panelContainer'>";
	$query = "SELECT * FROM ".$tablefeat." ORDER BY panelnr DESC LIMIT 6";
    $result=mysql_query($query);
 for($i = 0; $i < 6; $i++){
	 $row=mysql_fetch_assoc($result);
		echo "<div class='panel' title='Panel ".$row['panelnr']."'>
					<div class='wrapper'>
					  <img src='".$row['image']."' />
						<div class='photo-meta-data'>
							".$row['title']."<br />
							<span>".$row['description']."</span>
						</div>
					</div>
				</div>";}
		echo "	</div>
		</div>";
	echo "<div id='movers-row'>";
 $query = "SELECT * FROM ".$tablefeat." ORDER BY panelnr DESC LIMIT 6";
 $result=mysql_query($query);
 for($i = 1; $i < 7; $i++){
 $row=mysql_fetch_assoc($result);
 echo "<div><a href='#".$i."' class='cross-link'><img src='".$row['thumb']."' class='nav-thumb' alt='".$row['tooltip']."' /></a></div>";}
	echo "</div>
	</div>
</div>";
?>
 