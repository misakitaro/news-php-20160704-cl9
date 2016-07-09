<?php
/* Smarty version 3.1.28, created on 2016-07-09 15:01:58
  from "/home/ubuntu/workspace/templates/view.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_578111e640d2a8_10859158',
  'file_dependency' => 
  array (
    '688db2ef71a6341b4c2f8986307f00463ddefc12' => 
    array (
      0 => '/home/ubuntu/workspace/templates/view.html',
      1 => 1468076506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578111e640d2a8_10859158 ($_smarty_tpl) {
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ニュース</title>
</head>

<body>
  <div class="container" style="padding:20px 0">
    <!-- タイトル -->
    <h1 class="bg-primary">ニュース詳細</h1>

    <h2>No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
    <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true));?>
</p>
    <p>投稿日時：<?php echo $_smarty_tpl->tpl_vars['article']->value['created'];?>
</p>

    <!--<ul>-->
    <!--  <li><a href="edit_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">編集</a></li>-->
    <!--  <li><a href="delete_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">削除</a></li>-->
    <!--</ul>-->
    <!-- リンク -->
    <a href="edit_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-primary">編集</a>
    <a href="delete_form.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-primary">削除</a>
    <a href="index.php" class="btn btn-primary">一覧へ戻る</a>
  
  </div>
  <!-- jquery -->
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
  <!-- Latest compiled and minified JavaScript -->
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
