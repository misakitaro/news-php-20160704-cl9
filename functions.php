<?php
 
function connectDb() {
    try {
        return new PDO(DSN, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}
 
function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
 
function setToken() {
    $token = sha1(uniqid(mt_rand(), true));
    $_SESSION['token'] = $token;
}
 
function checkToken() {
    if (empty($_SESSION['token']) || ($_SESSION['token'] != $_POST['token'])) {
        echo "不正なPOSTです。";
        exit;
    }
}
 
function emailExists($email, $dbh) {
    $sql = "select * from users where email = :email limit 1";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array(":email" => $email));
    $user = $stmt->fetch();
    return $user ? true : false;
}
 
function getSha1Password($s) {
    return (sha1(PASSWORD_KEY.$s));
}

function require_login(){
    session_start();
    if (empty($_SESSION['me'])) {
        header('Location: '.SITE_URL.'login.php');
        exit;
    }
    $me = $_SESSION['me'];
}

function require_unlogin(){
    session_start();
    if (!empty($_SESSION['me'])) {
        header('Location: '.SITE_URL.'');
        exit;
    }
}