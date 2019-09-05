<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>ZYOUNAV</title>
</head>
<body>
<?php
/* 2019 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8',
        'root',
        ''
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
<div onclick="obj=document.getElementById('menu1').style; obj.display=(obj.display=='none')?'block':'none';">
            <li><a style="cursor:pointer;">2019年</a></li>
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

         <?php
/* 2020 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8',
        'root',
        ''
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
<div onclick="obj=document.getElementById('menu2').style; obj.display=(obj.display=='none')?'block':'none';">
            <li><a style="cursor:pointer;">2020年</a></li>
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

         <?php
/* 2021 */
try{
    $pdo = new PDO('mysql:host=localhost;dbname=sample;charset=utf8',
        'root',
        ''
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
<div onclick="obj=document.getElementById('menu3').style; obj.display=(obj.display=='none')?'block':'none';">
            <li><a style="cursor:pointer;">2021年</a></li>
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
         
</body>
</html>