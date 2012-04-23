<div id="menu">
<!-- LOGO -->
<div id="logo"></div>
<!-- LOGO-TXT -->
<div id="logo-txt" onclick="window.location='../index.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'">MMOwned Private Server</div>
<!-- START MENU -->
<div id="menu-items">
<div class="menu-btn" 
<?php
$pos = strpos($_SERVER["PHP_SELF"], "index.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='index.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="index.php">ACP</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "manual.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='manual.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="manual.php">Manual</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "addnews.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='addnews.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="addnews.php">Add news</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "featured.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='featured.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="featured.php">News Ticker</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "adduser.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='adduser.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="adduser.php">Add user</a></div>
<?php /*?><div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "viewreport.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='viewreport.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="viewreport.php">View reports</a></div><?php */?>
<?php /*?><div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "log.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='log.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="log.php">Changelog</a></div><?php */?>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "logout.php");
if ($pos == true) {
echo "style='background-image:url(../images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='logout.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="logout.php"><font color="#FF0000">Logout</font></a></div>
</div>
</div>