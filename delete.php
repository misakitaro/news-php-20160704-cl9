<?php
require_once 'config.php';
require_once 'functions.php';
require_login();

//入力内容チェック
if ($_POST['key'] != 'abcd') {
  $smarty->assign('message', 'パスワードが違います。');
  $smarty->display('error.html');
  exit;
}

try {
  //データベース接続
  $pdo = connectDb();
  $pdo->query('SET NAMES utf8');

  //データ削除
  $stmt = $pdo->prepare('DELETE FROM articles WHERE id = :id');
  $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
  $stmt->execute();
} catch (PDOException $e) {
  exit($e->getMessage());
}

//データベース接続終了
$pdo = null;

//結果表示
$smarty->display('complete.html');

?>
