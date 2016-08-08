<?php
require_once 'config.php';
require_once 'functions.php';
require_login();

try {
  //データベース接続
  $pdo = connectDb();
  $pdo->query('SET NAMES utf8');

  //データ検索
  $stmt = $pdo->query('SELECT * FROM articles ORDER BY id DESC');

  //データ割り当て
  $articles = array();
  while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $articles[] = $data;
  }
  $smarty->assign('articles', $articles);
} catch (PDOException $e) {
  exit($e->getMessage());
}

//データベース接続終了
$pdo = null;

//結果表示
$smarty->display('index.html');

?>
