<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE['lang'])=="eng"){
?>
<form action="registrationCheck.php" method="post">
    <h2>Registration Page</h2>
    <div class="infoClientBox">
        <div class="infoClientBox1">
            <div class="infoClientBox1part1">
                <label class="labelText">Name</label><br>
                <label class="labelText">Surname</label><br>
            </div>
            <div class="footerline1">
                <div class="v2"></div>
            </div>
            <div class="infoClientBox1part2">
                <label class="labelText">Login</label><br>
                <label class="labelText">Password</label><br>
                <label class="labelText">Repeat password</label><br>
                <label class="labelText">Age</label><br>
            </div>
        </div>
        <div class="infoClientBox2">
            <div class="infoClientBox2part1">
                <input class="iinPage3" type="text" maxlength="25" size="40" name="name" required><br>
                <input class="iinPage3" type="text" maxlength="25" size="40" name="surname" required><br>
            </div>
            <div class="footerline1">
                <div class="v3"></div>
            </div>
            <div class="infoClientBox2part2">
                <input class="iinPage4" type="text" maxlength="25" size="40" name="login" required><br>
                <input class="iinPage4" type="text" maxlength="25" size="40" name="password" required><br>
                <input class="iinPage4" type="text" maxlength="25" size="40" name="reppassword" required><br>
                <input class="iinPage4" type="number" maxlength="25" size="40" name="age" required><br>
            </div>
        </div>
    </div>
    <input class="searchButton" type="submit" name="submit" value="Sign up">
</form>

</body>
</html>
<?php
if(isset($_GET['name'])){
    ?>
    <h3>write more than 2 words in name or surname</h3>
    <?php
}
if(isset($_GET['password'])){
    ?>
    <h3>your password is not similiar</h3>
    <?php
}
if(isset($_GET['age'])){
    ?>
    <h3>write more than 2 words in name or surname OR</h3><br>
    <h3>write more than 4 words in login or password OR</h3><br>
    <h3>you need to be more than 10 ages</h3>
    <?php
}
if(isset($_GET['login'])){
    ?>
    <h3>write more than 2 words in name or surname OR</h3><br>
    <h3>write more than 4 words in login or password</h3>
    <?php
}
} else{
    ?>
    <form action="registrationCheck.php" method="post">
    <h2>Страница регистраций</h2>
    <div class="infoClientBox">
        <div class="infoClientBox1">
            <div class="infoClientBox1part1">
                <label class="labelText">Имя</label><br>
                <label class="labelText">Фамилия</label><br>
            </div>
            <div class="footerline1">
                <div class="v2"></div>
            </div>
            <div class="infoClientBox1part2">
                <label class="labelText">Логин</label><br>
                <label class="labelText">Пороль</label><br>
                <label class="labelText">Повторите пороль</label><br>
                <label class="labelText">Возраст</label><br>
            </div>
        </div>
        <div class="infoClientBox2">
            <div class="infoClientBox2part1">
                <input class="iinPage3" type="text" maxlength="25" size="40" name="name" required><br>
                <input class="iinPage3" type="text" maxlength="25" size="40" name="surname" required><br>
            </div>
            <div class="footerline1">
                <div class="v3"></div>
            </div>
            <div class="infoClientBox2part2">
                <input class="iinPage4" type="text" maxlength="25" size="40" name="login" required><br>
                <input class="iinPage4" type="text" maxlength="25" size="40" name="password" required><br>
                <input class="iinPage4" type="text" maxlength="25" size="40" name="reppassword" required><br>
                <input class="iinPage4" type="number" maxlength="25" size="40" name="age" required><br>
            </div>
        </div>
    </div>
    <input class="searchButton" type="submit" name="submit" value="Зарегистрироватся">
</form>

</body>
</html>
<?php
if(isset($_GET['name'])){
    ?>
    <h3>пишите боль 2 букв в име и фамилий</h3>
    <?php
}
if(isset($_GET['password'])){
    ?>
    <h3>ваш пороль не похов друг на друга</h3>
    <?php
}
if(isset($_GET['age'])){
    ?>
    <h3>пишите боль 2 букв в име и фамилий< ИЛИ</h3><br>
    <h3>ваш пороль не похов друг на друга ИЛИ</h3><br>
    <h3>ваш возраст дожен быть больше 10-ти/h3>
    <?php
}
if(isset($_GET['login'])){
    ?>
    <h3>пишите боль 2 букв в име и фамилий< ИЛИ<</h3><br>
    <h3>ваш пороль не похов друг на друга</h3>
    <?php
} }
?>