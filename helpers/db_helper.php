<?php
function get_db_connect(){
    try{
        $dsn = DSN;
        $user = DB_USER;
        $password = DB_PASSWORD;
        $dbh = new PDO($dsn, $user, $password);
    }catch(PDOException $e){
        echo($e->getMessage());
        die();
    }
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
}

function mail_exists($dbh, $mail){
    
    $sql = "SELECT COUNT(id) FROM account where mail = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->fetch(PDO::FETCH_ASSOC);    // 結果を配列で取得する
    if($count['COUNT(id)'] > 0){
        //件数を判定
        return TRUE;
    }else{
        return FALSE;
    }
}
// メールアドレスとパスワードが一致するか調べる
function select_account($dbh, $mail, $password){
    $sql = 'SELECT * FROM account WHERE mail = :mail LIMIT 1'; // メールアドレスが一致するデータを取得する
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        if($password===$data['password']){
            // パスワードを検証する
            return $data; 
        }else{
            return FALSE;
        }
        return FALSE;
    }
}

function insert_work_data($dbh, $poName, $title, $coName, $year, $message, $mail){
    $sql = 'SELECT * FROM account WHERE name = :poName LIMIT 1'; // 名前が一致するデータを取得する
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':poName', $poName, PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $mail = $data['mail'];
    }
    $sql = "INSERT INTO work_info (poName, title, coName, year, message, mail) VALUE (:poName, :title, :coName, :year, :message, :mail)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':poName', $poName, PDO::PARAM_STR);
    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
    $stmt->bindValue(':coName', $coName, PDO::PARAM_STR);
    $stmt->bindValue(':year', $year, PDO::PARAM_STR);
    $stmt->bindValue(':message', $message, PDO::PARAM_STR);
    $stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
    if($stmt->execute()){
        return TRUE;
    }else{
        return FALSE;
    }
}