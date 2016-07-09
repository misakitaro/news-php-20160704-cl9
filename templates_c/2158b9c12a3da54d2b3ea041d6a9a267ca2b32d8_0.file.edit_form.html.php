<?php
/* Smarty version 3.1.28, created on 2016-07-09 15:12:42
  from "/home/ubuntu/workspace/templates/edit_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5781146a352548_95232781',
  'file_dependency' => 
  array (
    '2158b9c12a3da54d2b3ea041d6a9a267ca2b32d8' => 
    array (
      0 => '/home/ubuntu/workspace/templates/edit_form.html',
      1 => 1468077155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5781146a352548_95232781 ($_smarty_tpl) {
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


  <title>ニュース</title>
</head>

<body>
  <div class="container" style="padding:20px 0">
    <!-- タイトル -->
    <h1 class="bg-primary">ニュース編集</h1>

    <form action="edit.php" method="post">
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="form-control" />
      <div class="form-group">
        <label>タイトル</label>
        <input type="text" name="title" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="form-control" />
      </div>
      <div class="form-group">
        <label>本文</label>
        <textarea name="detail" cols="30" rows="5" class="form-control"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['detail'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
      </div>
      <div class="form-group">
        <label>パスワード</label>
        <input type="password" name="key" size="10" value="" class="form-control" />
      </div>
      <button class="btn btn-primary">編集する</button> 
    </form>

    <!--<ul>-->
    <!--  <li><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">記事へ戻る</a></li>-->
    <!--</ul>-->

    <!-- リンク -->
    <a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-primary">記事へ戻る</a>

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
