<?php
require_once('config.php');
require_once('functions.php');
require_unlogin();

function getUser($email, $password, $dbh) {
    $sql = "select * from users where email = :email and password = :password limit 1";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(":email"=>$email, ":password"=>getSha1Password($password)));
    $user = $stmt->fetch();
    return $user ? $user : false;
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    // CSRF対策
    setToken();
} else {
    checkToken();
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $dbh = connectDb();
        
    $err = array();

    // メールアドレスが登録されていない
    if (!emailExists($email, $dbh)) {
        $err['email'] = 'このメールアドレスは登録されていません';
    }
    
    // メールアドレスの形式が不正
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err['email'] = 'メールアドレスの形式が正しくないです';
    }
    
    // メールアドレスが空？
    if ($email == '') {
        $err['email'] = 'メールアドレスを入力してください';
    }
    
    // メールアドレスとパスワードが正しくない
    if (!$me = getUser($email, $password, $dbh)) {
        $err['password'] = 'パスワードとメアドが正しくありません';    
    }
    
    // パスワードが空？
    if ($password == '') {
        $err['password'] = 'パスワードを入力してください';
    }
    
    if (empty($err)) {
        // セッションハイジャック対策
        session_regenerate_id(true);
        $_SESSION['me'] = $me;
        header('Location: '.SITE_URL);
        exit;
    }
    
}
//表示データをアサイン
$smarty->assign('err', $err);
$smarty->assign("session", $_SESSION);
$smarty->assign('email',h($email));
//テンプレート表示
$smarty->display("login.html");

?>
