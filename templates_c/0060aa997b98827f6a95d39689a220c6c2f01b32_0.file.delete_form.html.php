<?php
/* Smarty version 3.1.28, created on 2016-06-28 12:27:41
  from "/home/ubuntu/workspace/templates/delete_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57726d3d133cb0_11772591',
  'file_dependency' => 
  array (
    '0060aa997b98827f6a95d39689a220c6c2f01b32' => 
    array (
      0 => '/home/ubuntu/workspace/templates/delete_form.html',
      1 => 1467116657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57726d3d133cb0_11772591 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ニュース</title>
</head>
<body>
<h1>ニュース削除</h1>
<form action="delete.php" method="post">
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />
  パスワード：<br />
  <input type="password" name="key" size="10" value="" /><br />
  <br />
  <input type="submit" value="削除する" />
</form>
<ul>
  <li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">記事へ戻る</a></li>
</ul>
</body>
</html>
<?php }
}
