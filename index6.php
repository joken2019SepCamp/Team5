<!DOCTYPE html>
<html lang="ja">
<head>
<title>ZYOUNAV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style6.css">

</head>
<body>
<?php
/* 2019 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8',
        'root',
        'OH02bIYt4EAK'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>
<?php
try{/* "SELECT * FROM sample.work_info"; */
    $sql = 'SELECT * FROM sample.work_info WHERE year = "2019" ';
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>
<div class="flexbox">
<div class="toukou">
            <a href="index5.php">投稿フォーム</a>
        </div>
<ul>
    <div class="item" onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
            <li><a style="cursor:pointer;">2019</a></li>
    </div>
    <div id="menu1" style="display:none;clear:both;">
        <?php
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
        ?>
            <ul>
                <li><th><?=htmlspecialchars($row['title'])?></th></li>
                <th>氏名:<?=htmlspecialchars($row['poName'])?><th>&nbsp;&nbsp;&nbsp;</th>会社名:<?=htmlspecialchars($row['coName'])?></th><br>
                <th>メールアドレス:<?=htmlspecialchars($row['mail'])?></th><br>
                <th>コメント:<br><?=htmlspecialchars($row['message'])?></th><br>
            </ul>

        <?php
        }
        $pdo = null;
        ?>
    </div>
    <hr>
    <?php
/* 2020 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8',
        'root',
        'OH02bIYt4EAK'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>
<?php
try{/* "SELECT * FROM sample.work_info"; */
    $sql = 'SELECT * FROM sample.work_info WHERE year = "2020" ';
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>

    <div class="item" onclick="obj=document.getElementById('menu2').style; obj.display=(obj.display=='none')?'block':'none';">
            <li><a style="cursor:pointer;">2020</a></li>
    </div>
        <div id="menu2" style="display:none;clear:both;">
            <?php
            while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
            ?>
                <ul>
                    <li><th><?=htmlspecialchars($row['title'])?></th></li>
                    <th>氏名:<?=htmlspecialchars($row['poName'])?><th>&nbsp;&nbsp;&nbsp;</th>会社名:<?=htmlspecialchars($row['coName'])?></th><br>
                    <th>メールアドレス:<?=htmlspecialchars($row['mail'])?></th><br>
                    <th>コメント:<br><?=htmlspecialchars($row['message'])?></th><br>
                </ul>

        <?php
        }
        $pdo = null;
        ?>
        </div>
        <hr>
     <?php
/* 2021 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8',
        'root',
        'OH02bIYt4EAK'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>
<?php
try{/* "SELECT * FROM sample.work_info"; */
    $sql = 'SELECT * FROM sample.work_info WHERE year = "2021" ';
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>
    <div class="item" onclick="obj=document.getElementById('menu3').style; obj.display=(obj.display=='none')?'block':'none';">
        <li><a style="cursor:pointer;">2021</a></li>
    </div>
    <div id="menu3" style="display:none;clear:both;">
        <?php
        while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
        ?>
            <ul>
                <li><th><?=htmlspecialchars($row['title'])?></th></li>
                <th>氏名:<?=htmlspecialchars($row['poName'])?><th>&nbsp;&nbsp;&nbsp;</th>会社名:<?=htmlspecialchars($row['coName'])?></th><br>
                <th>メールアドレス:<?=htmlspecialchars($row['mail'])?></th><br>
                <th>コメント:<br><?=htmlspecialchars($row['message'])?></th><br>
            </ul>

        <?php
        }
        $pdo = null;
        ?>
    </div>
</u1>
</div>
         
</body>
</html>