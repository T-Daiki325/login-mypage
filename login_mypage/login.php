<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header>
        <img src = "4eachblog_logo.jpg">
        <div class = "login_link"><a href = "login.php">ログイン</a></div>
    </header>

    <main>
        <form action = "mypage.php" method = "post">
            <div class = "login">
                <div class = "mail">
                    <label>メールアドレス</label><br>
                    <input type = "text" class = "formbox" size = "40" name = "mail"
                    value = "<?php
                        if(isset($_COOKIE['login_keep'])) {
                            echo $_COOKIE['mail'];
                        }
                        ?>"
                    >
                </div>
                <div class = "password">
                    <label>パスワード</label><br>
                    <input type = "password" class = "formbox" size = "40" name = "password"
                    value = "<?php
                        if(isset($_COOKIE['login_keep'])) {
                            echo $_COOKIE['password'];
                        }
                        ?>"
                    >
                </div>
                <div class = "login_check">
                    <label><input type = "checkbox" name = "login_keep" value = "login_keep"
                        <?php
                            if(isset($_COOKIE['login_keep'])) {
                                echo "checked='checked'";
                            }
                        ?>
                    >ログイン状態を保持する</label>
                </div>
                <div class = "button">
                    <input type = "submit" class = "login_button" size = "35" value = "ログイン">
                </div>
            </div>
        </form>
    </main>

    <footer>
        ©2018 InterNous.inc. All rights reserved
    </footer>
</body>
</html>