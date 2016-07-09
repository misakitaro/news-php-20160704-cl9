<?php
/* Smarty version 3.1.28, created on 2016-07-09 14:30:23
  from "/home/ubuntu/workspace/templates/regist_form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57810a7fa7ceb7_17018567',
  'file_dependency' => 
  array (
    '99c0ae198cd830b8a81004fbc261a003f3275e09' => 
    array (
      0 => '/home/ubuntu/workspace/templates/regist_form.html',
      1 => 1468074359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57810a7fa7ceb7_17018567 ($_smarty_tpl) {
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
    <h1 class="bg-primary">ニュース登録</h1>

    <form action="regist.php" method="post">
      <div class="form-group">
        <label>タイトル</label>
        <input type="text" name="title" size="30" value="" class="form-control" />
      </div>
      <div class="form-group">
        <label>本文</label>
        <textarea name="detail" cols="30" rows="5" class="form-control"></textarea>
      </div>

      <div class="form-group">
        <label>パスワード</label></label>
        <input type="password" name="key" size="10" value="" class="form-control" />
      </div>

      <!-- <input type="submit" value="登録する"/> -->
       <button class="btn btn-primary">登録する</button> 
    </form>
    
    <!-- リンク -->
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
