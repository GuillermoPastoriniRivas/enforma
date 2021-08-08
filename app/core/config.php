<?php 

define("WEBSITE_TITLE", 'CHEMIKAL DRINKS');

//database name
define('DB_NAME', "sql5429848");
define('DB_USER', "sql5429848");
define('DB_PASS', "kpp7yx43xi");
define('DB_TYPE', "mysql");
define('DB_HOST', "sql5.freemysqlhosting.net");

define('THEME','enforma/');

define('DEBUG', true);

if(DEBUG){

	ini_set('display_errors', 1);
}else{
	ini_set('display_errors', 0);
}
