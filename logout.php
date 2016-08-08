<?php
require_once('config.php');
require_once('functions.php');
require_login();

session_start();

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-86400, '/sns_php/');
}

session_destroy();

header('Location: '.SITE_URL.'login.php');
