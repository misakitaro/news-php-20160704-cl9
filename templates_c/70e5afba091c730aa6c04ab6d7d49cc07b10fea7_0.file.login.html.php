<?php
/* Smarty version 3.1.28, created on 2016-08-11 13:46:09
  from "/home/ubuntu/workspace/templates/login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ac81a1ca67e1_77665286',
  'file_dependency' => 
  array (
    '70e5afba091c730aa6c04ab6d7d49cc07b10fea7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/login.html',
      1 => 1470923155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ac81a1ca67e1_77665286 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="padding:20px 0">
            <h1 class="bg-primary">ログイン</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" > <?php echo $_smarty_tpl->tpl_vars['err']->value['email'];?>

                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password" value="" class="form-control" > <?php echo $_smarty_tpl->tpl_vars['err']->value['password'];?>

                </div>
                <input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>
">
                <!-- <input type="submit" value="ログイン"/> -->
                <button class="btn btn-primary">ログイン</button>
                <!-- リンク -->
                <a href="signup.php" class="btn btn-primary">新規登録</a>
            </form>
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
