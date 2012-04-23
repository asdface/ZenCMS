<?php
           session_start();
           function reg()
           {
                  // if user already create an account on this session
                  if($_SERVER['REQUEST_METHOD'] == "POST")
                  {
                         // Connect to db (edit this vars)
                         $conf["host"] = "96.9.135.181";
                         $conf["user"] = "web";
                         $conf["password"] = "Penis101";
                         $conf["db"] = "auth";
                         $conf["multi"] = true; // if you allow multi account its true else false (default not allowed)
                         $connect = mysql_connect($conf["host"],$conf["user"],$conf["password"]) or die(mysql_error());
                         mysql_select_db($conf["db"],$connect) or die(mysql_error());
                  
                         // get login, password, email from form
                         $login = !get_magic_quotes_gpc() ? addslashes($_POST['username']) : $_POST['username'];
                         $password = !get_magic_quotes_gpc() ? addslashes($_POST['pass1']) : $_POST['pass1'];
						 $password2 = !get_magic_quotes_gpc() ? addslashes($_POST['pass2']) : $_POST['pass2'];
                         $email = !get_magic_quotes_gpc() ? addslashes($_POST['email']) : $_POST['email'];
                         $ip = $_SERVER['REMOTE_ADDR'];
                         // comment the 2 next line if you allow multi accounts
                         //if(($_SESSION['reg'] || already_reg($ip)) && !$conf["multi"])
                                //return "<div style='background-color:red; color:white; font-weight:bold;'>Already one accounts on this IP !</div>".form();
                                                 
                         // check for valid password and login
                         if(empty($login) || empty($password) || empty($password2) || empty($email))
                                return "<div class='regalert'><span class='alert'>Not all fields are filled in!</span></div>".form();
						 // check is passwords match
                         if($password != $password2)
                                return "<div class='regalert'><span class='alert'>Passwords do not match!</span></div>".form();
						 // check for valid email
                         if(!is_valid_email($email))
                                return "<div class='regalert'><span class='alert'>This email adres is not valid!</span></div>".form();
                         // check for email in use
                         if(!is_email($email))
                                return "<div class='regalert'><span class='alert'>This email adress is already registered!</span></div>".form();
                         // create a new var for encrypted_password
                         $sha1pass = sha1(strtoupper($login).":".strtoupper($password));
                         // if query return true its ok else nok and print again the form
                         $sql = "INSERT INTO accounts(login,password,gm,flags,lastip,forceLanguage, email) VALUES('".$login."','".$password."',0,24,'".$ip."','".enUS."','".$email."');";
                         if(mysql_query($sql))
                         {
                                mysql_close($connect);   
                                $_SESSION['reg'] = true;
                                return "<div class='regalert'><span class='approved'>Your account has been created successfuly!</span></div><br/><br/>";
                         }
                         switch(mysql_errno())
                         {
                                case 1062 :
                                   return "<div class='regalert'><span class='alert'>The account name is allready taken!</span></div>".form();
                                   break;
                         }
                         return "Mysql Error : ".mysql_error()."<br />".form();
                  }
                  else
                         return form();
           }
           function is_str($str)
           {
                  return ereg("^[A-Za-z0-9]+$",$str);
           }
		   function is_valid_email($email) {
			  $result = TRUE;
			  if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
				$result = FALSE;
			  }
			  return $result;
			}
           function is_email($mail)
           {
                         $regex='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
                  if(preg_match($regex,$mail));
                  {
                         $c = mysql_query("SELECT email FROM accounts WHERE email = '".$mail."';");
                         if(mysql_num_rows($c) == 0)
                                return true;
                  }
                  return false;
           }
           function already_reg($ip)
           {
                  $c = mysql_query("SELECT * FROM accounts WHERE lastip = '".$ip."';");
                  if(mysql_num_rows($c) == 0)
                         return false;
                  return true;
           }
           function form()
           {
                   return '
                  <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                  <table>
                  <tr>
                  <td>Username</td>	
                  <td><input type="text" name="username" onfocus="Showinfo("Your desired username","12px");" onblur="Hideinfo()" /></td>
                  </tr>
                  <tr>
                  <td>Password</td>
                  <td><input type="password" name="pass1" onfocus="Showinfo("Type a secure password","37px");" onblur="Hideinfo()" /></td>
                  </tr>
                  <tr>
                  <td>Confirm password</td>
                  <td><input type="password" name="pass2" onfocus="Showinfo("Retype your password","65px");" onblur="Hideinfo()" /></td>
                  </tr>
                  <tr>
                  <td>Email address</td>
                  <td><input type="text" name="email" onfocus="Showinfo("Provide a legit email address","90px");" onblur="Hideinfo()" /></td>
                  </tr>
                  </table>
                  <div style="padding-right:25px;"><span class="attention">By registering, you agree to our <a href="#">Terms of Use</a> and <a href="#">User Agreement</a>.</span></div>
                  <input name="submit" type="image" src="images/btnregister.png" />
                  
                  <div style="visibility: hidden;"><input type="text" name="login" /><input type="password" name="password" /></div>
                  </form>';
           }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MMOPS - Register</title>
<link href="styles/master.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php include('includes/config.php'); ?>
<?php include('includes/menu.php'); ?>

<!--<div id="pagetitle">REGISTER&nbsp;<font color="#3cbcfd">PAGE</font></div>
-->
<div id="content">
<br />
  <div id="newscontainer">
      
          <div class='newsholder'>
          
                    <div class="module-top"><div class="module-title">Realmlist</div></div>
          	<div class="module-mid">
          		<div class="module-mid-text">
         		 Once you have completed you registration, be sure to read our <a href="connect.php">Connection Guide</a>, for the more experienced users, the realmlist is:
 
         		 <span class="note"><span class="realmname"><?php echo $realmname; ?></span></span>
         		 <br />
         		 You will still need our custom launcher to access our custom content!
         		 <span class="download"><a href="#">Download the launcher</a></span>
                 <br/>
         	   </div>
          </div>
          <div class="module-bottom"></div>
          <br />
              <div class="module-top"><div class="module-title">Register an account</div></div>
              <div class="module-mid">
               	<!--<div id="signupinfo" style="visibility:hidden;">
                <div id="signuptext"></div>
  				</div>-->
				<?php echo reg(); ?>
                </div>
              	<div class="module-bottom"></div>
          <?php include('includes/vote-footer.php'); ?>
          </div>
	  
</div>
      
      <div class="side-container">
      <!-- Gilles De Mey -->
      <div id="messageDiv"></div>
   		<div class="side-title"><div class="side-title-text">Realm status<span></span></div></div>
       		<div class="side-content">
        		<div id="status">
        		<img src="images/ajax-loader.gif" alt="loading" style="margin-left:105px; margin-top:20px; margin-bottom:20px;" />
        	</div>
        </div>
        <!-- END -->
        <?php include('includes/vote.php');?>
        <?php include('sponsors/ad-side.php'); ?> 
        <img src="images/mmops-big.png" alt="MMOPS - MMOwned Private Server" />
        <div style="clear:both"></div>
      </div>

      <br /> 
</div>
<? include('includes/footer.php'); ?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/slide.js"></script>
<script type="text/javascript" src="js/singupinfo.js"></script>
<script type="text/javascript" src="js/captcha.js"></script>
<script type="text/javascript" src="js/status.js"></script>
</body>
</html>