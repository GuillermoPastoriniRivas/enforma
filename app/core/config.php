<?php 

define("WEBSITE_TITLE", 'CHEMIKAL DRINKS');


define('DB_NAME', "enforma_db");
define('DB_USER', "lospibesdelits");
define('DB_PASS', "lospibesdelits");
define('DB_TYPE', "mysql");
define('DB_HOST', "186.136.118.136");

define('THEME','enforma/');

define('DEBUG', true);

if(DEBUG){

	ini_set('display_errors', 1);
}else{
	ini_set('display_errors', 0);
}
