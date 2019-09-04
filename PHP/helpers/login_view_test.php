<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
    </head>
    <body>
        <h1>LogIn...</h1>
        <form action="" method="POST">
            <p>メールアドレス:<input type="text" name="mail"> <?php echo html_escape($errs['mail']); ?></p>
            <p>パスワード:<input type="text" name="password"> <?php echo html_escape($errs['password']); ?></p>
            <p><input type="submit" value="ログイン"></p>
        </form>
    </body>
</html>