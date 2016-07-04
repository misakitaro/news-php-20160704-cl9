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
  $stmt = $pdo->prepare('INSERT INTO articles(title, detail, created) VALUES(:title, :detail, :created)');
  $stmt->bindValue(':title',   $_POST['title']);
  $stmt->bindValue(':detail',  $_POST['detail']);
  $stmt->bindValue(':created', date('Y-m-d H:i:s'));
  $stmt->execute();
} catch (PDOException $e) {
  exit($e->getMessage());
}

//データベース接続終了
$pdo = null;

//結果表示
$smarty->display('complete.html');

?>