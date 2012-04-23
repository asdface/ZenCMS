<?php include('includes/config.php'); ?>
<div id="menu">
<!-- LOGO -->
<div id="logo"></div>
<!-- LOGO-TXT -->
<div id="logo-txt" onclick="window.location='index.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><?php echo $psname; ?></div>
<!-- START MENU -->
<div id="menu-items">
<div class="menu-btn" 
<?php
$pos = strpos($_SERVER["PHP_SELF"], "index.php");
if ($pos == true) {
echo "style='background-image:url(images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='index.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="index.php">Home</a></div>
<div class="menu-btn" onclick="window.location='/forums'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="/forums">Forums</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "register.php");
if ($pos == true) {
echo "style='background-image:url(images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='register.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="register.php">Register</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "connect.php");
if ($pos == true) {
echo "style='background-image:url(images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='connect.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="connect.php">Connect</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "account.php");
if ($pos == true) {
echo "style='background-image:url(images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='account.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="account.php">Tools</a></div>
<div class="menu-btn"><a href="donate.php">Donate</a></div>
<div class="menu-btn"><a href="vote.php">Vote</a></div>
<div class="menu-btn"
<?php
$pos = strpos($_SERVER["PHP_SELF"], "report.php");
if ($pos == true) {
echo "style='background-image:url(images/button-active.png); background-repeat:no-repeat;'";}
?>
onclick="window.location='report.php'" onmouseover="document.body.style.cursor='pointer'" onmouseout="document.body.style.cursor='default'"><a href="report.php"><font color="#CC0000">Report</font></a></div>
</div>
</div>