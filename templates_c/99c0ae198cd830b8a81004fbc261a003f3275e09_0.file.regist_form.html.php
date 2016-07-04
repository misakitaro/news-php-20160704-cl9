<?php
/* Smarty version 3.1.28, created on 2016-06-28 12:13:15
  from "/home/ubuntu/workspace/templates/regist_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577269db1d6a71_79148113',
  'file_dependency' => 
  array (
    '99c0ae198cd830b8a81004fbc261a003f3275e09' => 
    array (
      0 => '/home/ubuntu/workspace/templates/regist_form.html',
      1 => 1467115818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577269db1d6a71_79148113 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ニュース</title>
</head>
<body>
<h1>ニュース登録</h1>
<form action="regist.php" method="post">
  タイトル：<br />
  <input type="text" name="title" size="30" value="" /><br />
  本文：<br />
  <textarea name="detail" cols="30" rows="5"></textarea><br />
  パスワード：<br />
  <input type="password" name="key" size="10" value="" /><br />
  <br />
  <input type="submit" value="登録する" />
</form>
<ul>
  <li><a href="index.php">一覧へ戻る</a></li>
</ul>
</body>
</html>
<?php }
}
