<?php
/* 
 * Configuration for cloud9
 */

/*
 * for MySQL
 */
$servername = getenv('IP');
define('DSN', 'mysql:dbname=phpdb;host=' . $servername);
//define('DB_USER', getenv('C9_USER'));
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'dbuserpassword');


/*
 * common
 */
define('SITE_URL', 'https://news-php-20160704-cl9-cloned-misakitaro.c9users.io/');
error_reporting(E_ALL & ~E_NOTICE);
//error_reporting(0); //Warningを非表示の設定
 session_set_cookie_params(0, '/');


/*
 * for Smarty
 */
require_once '/home/ubuntu/workspace/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';
