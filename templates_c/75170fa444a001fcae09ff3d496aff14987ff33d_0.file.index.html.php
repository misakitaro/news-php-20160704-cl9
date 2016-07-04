<?php
/* Smarty version 3.1.28, created on 2016-06-28 11:20:49
  from "/home/ubuntu/workspace/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57725d91c09ac5_69821471',
  'file_dependency' => 
  array (
    '75170fa444a001fcae09ff3d496aff14987ff33d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/index.html',
      1 => 1467112836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57725d91c09ac5_69821471 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ニュース</title>
</head>
<body>
<h1>ニュース一覧</h1>
<ul>
  <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_0_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$__foreach_article_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_article_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$__foreach_article_0_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
  <li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
  <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
?>
</ul>
<ul>
  <li><a href="regist_form.php">登録</a></li>
</ul>
</body>
</html>
<?php }
}
