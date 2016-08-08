<?php
require_once 'config.php';
require_once 'functions.php';
require_login();

$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';

//結果表示
$smarty->display('regist_form.html');

?>
