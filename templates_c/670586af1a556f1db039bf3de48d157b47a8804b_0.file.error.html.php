<?php
/* Smarty version 3.1.28, created on 2016-07-09 15:10:39
  from "/home/ubuntu/workspace/templates/error.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_578113ef3068e0_14113787',
  'file_dependency' => 
  array (
    '670586af1a556f1db039bf3de48d157b47a8804b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/error.html',
      1 => 1468077025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578113ef3068e0_14113787 ($_smarty_tpl) {
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <h1 class="bg-primary">エラー</h1>

        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>

        <a href="javascript:history.back();" class="btn btn-primary">前のページへ戻る</a>

        <!-- jquery -->
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
        <!-- Latest compiled and minified JavaScript -->
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </div>
</body>

</html>
<?php }
}
