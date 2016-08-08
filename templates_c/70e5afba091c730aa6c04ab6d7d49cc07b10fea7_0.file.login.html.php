<?php
/* Smarty version 3.1.28, created on 2016-08-08 14:32:51
  from "/home/ubuntu/workspace/templates/login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57a8981310d371_17759298',
  'file_dependency' => 
  array (
    '70e5afba091c730aa6c04ab6d7d49cc07b10fea7' => 
    array (
      0 => '/home/ubuntu/workspace/templates/login.html',
      1 => 1470666762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a8981310d371_17759298 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>
<body>
<h1>ログイン</h1>
<form action="login.php" method="POST">
<p>メールアドレス：<input type="text" name="email" value="<?php echo '<?php ';?>echo h($email); <?php echo '?>';?>"> <?php echo '<?php ';?>echo h($err['email']); <?php echo '?>';?></p>
<p>パスワード：<input type="password" name="password" value=""> <?php echo '<?php ';?>echo h($err['password']); <?php echo '?>';?></p>
<input type="hidden" name="token" value="<?php echo '<?php ';?>echo h($_SESSION['token']); <?php echo '?>';?>">
<p><input type="submit" value="ログイン"> <a href="signup.php">新規登録はこちら！</a></p>
</form>
</body>
</html><?php }
}
