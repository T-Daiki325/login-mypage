<?php
mb_internal_encoding("utf8");

//セッションスタート
session_start();

//mypage.phpからの導線以外は、『login_error.php』へリダイレクト
if(empty($_POST['from_mypage'])) {
    header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ編集</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>

<body>
    <header>
        <img src = "4eachblog_logo.jpg">
        <div class = "logout_link">
            <a href = "logout.php">ログアウト</a>
        </div>
    </header>

    <main>
        <form action = "mypage_update.php" method = "post">
            <div class = "form_contents">
                <h2>会員情報</h2>
                <div class = "hello">
                    <p><?php echo "こんにちは!　".$_SESSION['name']."さん"; ?></p>
                </div>
                <div class = "profile_pic">
                    <img src = "<?php echo $_SESSION['picture']; ?>">
                </div>
                <div class = "basic_info">
                    <p>氏名：<input type = "text" class = "formbox" size = "40" name = "name" value = "<?php echo $_SESSION['name']; ?>"></p>
                    <p>メール：<input type = "text" class = "formbox" size = "40" name = "mail" value = "<?php echo $_SESSION['mail']; ?>"></p>
                    <p>パスワード：<input type = "text" class = "formbox" size = "40" name = "password" value = "<?php echo $_SESSION['password']; ?>"></p>
                </div>
                <div class = "comments">
                    <textarea class = "formbox" rows = "4" cols = "80" name = "comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>
                <div class = "submit">
                    <input type = "submit" class = "button" value = "この内容に変更する">
                </div>
            </div>
        </form>
    </main>

    <footer>
        ©2018 InterNous.inc. All rights reserved
    </footer>
</body>
</html>