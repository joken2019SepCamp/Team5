<?php
require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');
session_start();    // セッションを開始する

if($_SERVER['REQUEST_METHOD'] === 'POST'){//POSTだったら
    $mail = get_post('mail');
    $password = get_post('password');
    $dbh = get_db_connect();    // DB接続
    $errs = array();
    if(!mail_exists($dbh, $mail)){
        $errs['mail'] = 'このメールアドレスは登録されていません';
    }elseif(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $errs['mail'] = 'メールアドレスの形式が正しくありません';
    }elseif(!check_words($mail, 200)){
        $errs['mail'] = 'メール欄は必須、200文字以内で入力してください';
    }
    if(!check_words($password, 50)) {
        $errs['password'] = 'パスワードは必須、50文字以内で入力してください';
    }
    // メールアドレスとパスワードが一致するか検証する
    if(!check_words($password, 50)){
        $errs['password'] = 'パスワードは必須、50文字以内で入力してください';
    }elseif(!$account = select_account($dbh, $mail, $password)){
        $errs['password'] = 'パスワードとメールアドレスが正しくありません';
    }
    
    // ログインする
    if(empty($errs)){
        session_regenerate_id(true);        // セッションIDの変更
        // セッションIDが盗まれていた場合
        // なりすましによる不正な操作を防ぐために
        // ログイン直前にセッションIDを切り替える！！
        $_SESSION['account'] = $account;      // ログイン
        header('Location: '.SITE_URL.'index2.php');
        exit;
    }
}
include_once('login_view.php');     //ビューファイルの読み込み