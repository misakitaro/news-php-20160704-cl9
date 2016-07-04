<?php
/* Smarty version 3.1.28, created on 2016-06-28 12:27:26
  from "/home/ubuntu/workspace/templates/edit_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57726d2e0e3187_30060864',
  'file_dependency' => 
  array (
    '2158b9c12a3da54d2b3ea041d6a9a267ca2b32d8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/edit_form.html',
      1 => 1467116657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57726d2e0e3187_30060864 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ニュース</title>
</head>
<body>
<h1>ニュース編集</h1>
<form action="edit.php" method="post">
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />
  タイトル：<br />
  <input type="text" name="title" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><br />
  本文：<br />
  <textarea name="detail" cols="30" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br />
  パスワード：<br />
  <input type="password" name="key" size="10" value="" /><br />
  <br />
  <input type="submit" value="編集する" />
</form>
<ul>
  <li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">記事へ戻る</a></li>
</ul>
</body>
</html>
<?php }
}
