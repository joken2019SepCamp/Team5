<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ZYOUNAV</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="logincontainer">
    <div class="login">
      <form action="" method="post">
        <label>メールアドレス</label><br>
        <input type="mail" name="mail"><?php echo html_escape($errs['mail']); ?><br>
        <label>パスワード</label><br>
        <input type="password" name="password"maxlength="15"><?php echo html_escape($errs['password']); ?>
        <input type="submit" value="ログイン">
      </form>
    </div>
  </div>
  <!--Shift Alt F-->
</body>

</html>