<?php
/* Smarty version 3.1.28, created on 2016-06-28 12:05:56
  from "/home/ubuntu/workspace/templates/view.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57726824a06206_69542919',
  'file_dependency' => 
  array (
    '688db2ef71a6341b4c2f8986307f00463ddefc12' => 
    array (
      0 => '/home/ubuntu/workspace/templates/view.html',
      1 => 1467113494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57726824a06206_69542919 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ニュース</title>
</head>
<body>
<h1>ニュース詳細</h1>
<h2>No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true));?>
</p>
<p>投稿日時：<?php echo $_smarty_tpl->tpl_vars['article']->value['created'];?>
</p>
<ul>
  <li><a href="edit_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">編集</a></li>
  <li><a href="delete_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">削除</a></li>
</ul>
<ul>
  <li><a href="index.php">一覧へ戻る</a></li>
</ul>
</body>
</html>
<?php }
}
