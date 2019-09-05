<?php
require_once('config.php');
require_once('./helpers/db_helper.php');
require_once('./helpers/extra_helper.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $poName = get_post('poName');
    $title = get_post('title');
    $coName = get_post('coName');
    $year = date('Y');
    $message = get_post('message');
    $mail = $_SESSION['mail'];  // アドレスデータを取得
    $dbh = get_db_connect();    // DB接続
    $errs = array();//配列を入れる
    // 入力値のバリデーション
    
    if(!check_words($poName, 10)) {
        $errs['poName'] = '名前は必須、10文字以内で入力してください';
    }
    if(!check_words($title, 20)) {
        $errs['title'] = '題名は必須、20文字以内で入力してください';
    }
    if(!check_words($coName, 20)) {
        $errs['coName'] = '会社名は必須、20文字以内で入力してください';
    }
    if(!check_words($message, 400)) {
        $errs['message'] = '会社名は必須、400文字以内で入力してください';
    }
    if(empty($errs)){
        if(insert_work_data($dbh, $poName, $title, $coName, $year, $message, $mail)){
        // データの挿入
            header('Location: '.SITE_URL.'index5.php');
            exit;
        }
    }
    $errs['mail'] = '登録に失敗しました';
}
include_once('index5_view.php');     //ビューファイルの読み込み