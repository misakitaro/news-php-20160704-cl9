{"changed":true,"filter":false,"title":"edit.php","tooltip":"/edit.php","value":"<?php\nrequire_once 'config.php';\nrequire_once 'functions.php';\nrequire_login();\n\n//入力内容チェック\nif ($_POST['key'] != 'abcd') {\n  $smarty->assign('message', 'パスワードが違います。');\n  $smarty->display('error.html');\n  exit;\n}\nif ($_POST['title'] == '' or $_POST['detail'] == '') {\n  $smarty->assign('message', 'タイトルと本文を入力してください。');\n  $smarty->display('error.html');\n  exit;\n}\n\ntry {\n  //データベース接続\n  $pdo = connectDb();\n  $pdo->query('SET NAMES utf8');\n\n  //データ登録\n  $stmt = $pdo->prepare('UPDATE articles SET title = :title, detail = :detail WHERE id = :id');\n  $stmt->bindValue(':title',  $_POST['title']);\n  $stmt->bindValue(':detail', $_POST['detail']);\n  $stmt->bindValue(':id',     $_POST['id'], PDO::PARAM_INT);\n  $stmt->execute();\n} catch (PDOException $e) {\n  exit($e->getMessage());\n}\n\n//データベース接続終了\n$pdo = null;\n\n//結果表示\n$smarty->display('complete.html');\n\n?>\n","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":3,"column":0},"end":{"row":3,"column":16},"action":"insert","lines":["require_login();"],"id":31}],[{"start":{"row":3,"column":16},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":32}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":0},"end":{"row":4,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1467116799194}