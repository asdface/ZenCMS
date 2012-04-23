<?php
//Mysql Information. This is the information for the site's database, NOT your ascent server's.
define(MYSQL_HOST,"96.9.135.181"); // The mysql host for your webserver.
define(MYSQL_USER,"root"); // Mysql username
define(MYSQL_PASS,"cp4me"); // Mysql password
define(MYSQL_DATA,"donations_lol1"); // Database the donation tables are in.

// Path information, EXTREMELY IMPORTANT that you do these right or this will not work.
define(SITE_URL,"http://www.mmowned.org"); // COMPLETE url to your web site, NO TRAILING SLASH!
define(SYS_PATH,"/dombo/donate"); // Path to the directory this file is in, beginning with a slash.

// Currency information.
define(CURRENCY_CODE,"USD"); // Currency code to be used by PayPal.
define(CURRENCY_CHAR,"$"); // Symbol representing your currency code.

// PayPal information. Use 'www.sandbox.paypal.com' if you wish to test with the sandbox.
define(PAYPAL_URL,"www.paypal.com"); // Only change this for sandbox testing.
define(PAYPAL_EMAIL,"donations@mmowned.org"); // The account that donations will go to.

// Mail information.
define(MAIL_SUBJECT,"Thank You"); // Subject of the reward mail.
define(MAIL_BODY,"Thank you for supporting our server! Here is your reward!"); // Mail message.

//Misc
define(ACP_USERNAME,"mmowned_crunt1"); // Username to access the ACP
define(ACP_PASSWORD,"e&*hBWe6Z;Uu"); // Password to access the ACP
?>