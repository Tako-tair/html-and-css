<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>TAIR</title>
</head>
<body>
<div class="cookies">
    <form action="set.php" method="get">
        <select name="lang">
            <option value="eng">english</option>
            <option value="ru">русский</option>
        </select>
        <input type="submit" value="отправить">
    </form>
</div>
<?php
if(isset($_COOKIE['lang'])=="eng"){
?>
<div class="loginPage">
    <h1>Sing in for user</h1>
    <div class="footerline">
        <div class="vl"></div>
    </div>
    <form action="loginCheck.php" method="post">
        <div class="loginPass">
            <div class="loginPic">
                <img class="piclogin" src="picture/second.jpg">
                <div class="loginfield1"><input class="loginfield2" type="text" maxlength="25" size="40" name="login" placeholder="Login" required></div>
            </div>
            <div class="passwordPic">
                <img class="picpassword" src="picture/first.jpg">
                <div class="passwordfield1"><input class="passwordfield2" type="password" maxlength="25" size="40" placeholder="Password" name="password" required>
                    <input class="button" name="submit" type="submit" value="Sign in"></div>
            </div>
            <a href="registration.php">Registration</a>
        </div>
    </form>
</div>
<?php } else{ ?>
    <div class="loginPage">
        <h1>Вход для пользователя</h1>
        <div class="footerline">
            <div class="vl"></div>
        </div>
        <form action="loginCheck.php" method="post">
            <div class="loginPass">
                <div class="loginPic">
                    <img class="piclogin" src="picture/second.jpg">
                    <div class="loginfield1"><input class="loginfield2" type="text" maxlength="25" size="40" name="login" placeholder="Логин" required></div>
                </div>
                <div class="passwordPic">
                    <img class="picpassword" src="picture/first.jpg">
                    <div class="passwordfield1"><input class="passwordfield2" type="password" maxlength="25" size="40" placeholder="Пароль" name="password" required>
                        <input class="button" name="submit" type="submit" value="Войти"></div>
                </div>
                <a href="registration.php">Registration</a>
            </div>
        </form>
    </div>
<?php } ?>
</body>
</html>