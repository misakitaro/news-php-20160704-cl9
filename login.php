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

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="padding:20px 0">
            <h1 class="bg-primary">ログイン</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label>メールアドレス</label>
                    <input type="text" name="email" value="<?php echo h($email); ?>" class="form-control" > <?php echo h($err['email']); ?>
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" name="password" value="" class="form-control" > <?php echo h($err['password']); ?>
                </div>
                <input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>">
                <!-- <input type="submit" value="ログイン"/> -->
                <button class="btn btn-primary">ログイン</button>
                <!-- リンク -->
                <a href="signup.php" class="btn btn-primary">新規登録</a>
            </form>
        </div>
        <!-- jquery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
