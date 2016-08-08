<?php
require_once 'config.php';
require_once 'functions.php';
require_login();

try {
  //データベース接続
  $pdo = connectDb();
  $pdo->query('SET NAMES utf8');

  //データ検索
  $stmt = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
  $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
  $stmt->execute();

  //データ割り当て
  if ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $smarty->assign('article', $data);
  } else {
    $smarty->assign('message', '指定されたニュースが見つかりません。');
    $smarty->display('error.html');
    exit;
  }
} catch (PDOException $e) {
  exit($e->getMessage());
}

//データベース接続終了
$pdo = null;

//結果表示
$smarty->display('delete_form.html');

?>
