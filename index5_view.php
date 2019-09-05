<html>
<head>
    <meta charset="utf-8">
<title>投稿フォーム</title>
</head>
<link rel="stylesheet" href="style5.css">

<body>

<form method="post" action="">
        <input type="hidden" name="mode" value="write">

        <div class="flexbox">
            <div class="box1">
                <div class="fome"><input type="text" placeholder="TITLE"name="title" size="20" class="text_input"></div>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                <div class="fome"><input type="text" placeholder="NAME"name="poName" size="20" class="text_input"></div>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                <div class="fome"><input type="text" placeholder="CAMPANY"name="coName" size="20" class="text_input"></div>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>

            <div class="box2">
                <div class="fome2"><p>▼ MESSAGE</p></div>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                <div class="fome2"><textarea name="message" rows="10" cols="60"class="text_input2"></textarea></div>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                <div class="fome2"><input type="submit" value="　POST　"class="text_input"></div>
                <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
            </div>

        </div>
    </form>
    <?php
    $year = date('Y'); 
    ?>

</body>
</html>