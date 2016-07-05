<?php
/* Smarty version 3.1.28, created on 2016-07-05 13:41:36
  from "/home/ubuntu/workspace/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577bb910f11dc0_84664500',
  'file_dependency' => 
  array (
    '75170fa444a001fcae09ff3d496aff14987ff33d' => 
    array (
      0 => '/home/ubuntu/workspace/templates/index.html',
      1 => 1467726092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577bb910f11dc0_84664500 ($_smarty_tpl) {
?>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>ニュース</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="padding:20px 0">
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

    <table class="table table-bordered table-hover">
      <thread>
        <tr>
          <th>id</th>
          <th>title</th>
        </tr>
      </thread>
      <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_1_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$__foreach_article_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_article_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$__foreach_article_1_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
        <tr class="success">
          <td><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">No.<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
</a></td>
          <td><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_local_item;
}
}
if ($__foreach_article_1_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_item;
}
?>
      </tbody>
    </table>

      <ul>
        <li><a href="regist_form.php">登録</a></li>
      </ul>
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
