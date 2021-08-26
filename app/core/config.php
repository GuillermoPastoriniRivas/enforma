<?php 

define("WEBSITE_TITLE", 'CHEMIKAL DRINKS');

define('DB_NAME', "mysql");
define('DB_USER', "envios");
define('DB_PASS', "Ent3r4t3k2020!");
define('DB_TYPE', "mysql");
define('DB_HOST', "74.208.90.104");

define('THEME','enforma/');

define('DEBUG', true);

if(DEBUG){

	ini_set('display_errors', 1);
}else{
	ini_set('display_errors', 0);
}
