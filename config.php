<?php
/*
  Configurations
*/

//General
define('BASE_URL', 'http://localhost/CMS');
define('NAME', 'Admin Video');
define('SLOGAN', 'Creative Altar');
define('P_EMAIL', 'oscar@elaniin.com');
define('LOGO', '');
define('FAVICON', ' ');
define('COLOR', '#399bff');
define('LANGUAGE', 'es');

define('COPYRIGHT', ' ');
define('TIMEZONE', 'Europe/Berlin');

define('FORCE_HTTPS', 0);
define('AUTO_UPDATE', 1);
define('HEADER_LOGO', 0);

//Database Info
define('DATABASE_NAME', 'creative_altar'); 
define('DATABASE_USER', 'melara');
define('DATABASE_PASS', '12345');
define('DATABASE_HOST', 'localhost'); 

//Mail
define('MAIL_TYPE', 1);  // 1 = Server Default / 2 = Mandrill / 3 = SendGrid
define('MAIL_MANDRILL_KEY', '');
define('MAIL_SENDGRID_KEY', '');

//Normal Register
define('NLOGIN_ENABLE', 1);
define('REGISTER_ENABLE', 1);
define('FORGOT_ENABLE', 1);

//Google Login
//You can get it from: https://console.developers.google.com/
define('GLOGIN_ENABLE', 0);
define('GLOGIN_CLIENT_ID', '');
define('GLOGIN_CLIENT_SECRET', '');

//Facebook Login
//You can get it from: https://developers.facebook.com/
define('FLOGIN_ENABLE', 0);
define('FLOGIN_APP_ID', '');
define('FLOGIN_APP_SECRET', '');

//Advance Settings
//If you not sure what happend here not change nothing.
define('DEFAULT_MODULE', 'general');
define('DEFAULT_PAGE', 'home');
define('DEFAULT_LEVEL', '1');

?>