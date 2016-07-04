<?php
/* Smarty version 3.1.28, created on 2016-06-28 12:16:48
  from "/home/ubuntu/workspace/templates/error.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57726ab0945129_61007611',
  'file_dependency' => 
  array (
    '670586af1a556f1db039bf3de48d157b47a8804b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/error.html',
      1 => 1467115658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57726ab0945129_61007611 ($_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ニュース</title>
</head>
<body>
<h1>エラー</h1>
<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<ul>
  <li><a href="javascript:history.back();">前のページへ戻る</a></li>
</ul>
</body>
</html>
<?php }
}
