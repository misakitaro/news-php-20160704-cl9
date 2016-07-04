<?php
require_once 'config.php';
require_once 'functions.php';

//入力内容チェック
if ($_POST['key'] != 'abcd') {
  $smarty->assign('message', 'パスワードが違います。');
  $smarty->display('error.html');
  exit;
}
if ($_POST['title'] == '' or $_POST['detail'] == '') {
  $smarty->assign('message', 'タイトルと本文を入力してください。');
  $smarty->display('error.html');
  exit;
}

try {
  //データベース接続
  $pdo = connectDb();
  $pdo->query('SET NAMES utf8');

  //データ登録
  $stmt = $pdo->prepare('UPDATE articles SET title = :title, detail = :detail WHERE id = :id');
  $stmt->bindValue(':title',  $_POST['title']);
  $stmt->bindValue(':detail', $_POST['detail']);
  $stmt->bindValue(':id',     $_POST['id'], PDO::PARAM_INT);
  $stmt->execute();
} catch (PDOException $e) {
  exit($e->getMessage());
}

//データベース接続終了
$pdo = null;

//結果表示
$smarty->display('complete.html');

?>
