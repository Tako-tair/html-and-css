<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<div class="main">
    <div class="maingo">
        <form action="registrcheck.php" method="post">
            <div class="fieldtext">
                <h2>registration</h2>
                <label>name</label><br>
                <input type="text"  maxlength="20" size="30" name="namename" placeholder="login"><br>
                <label>password</label><br>
                <input type="password"  maxlength="20" size="30" name="pass" placeholder="password"><br>
                <label>age</label><br>
                <input type="text"  maxlength="20" size="30" name="age" placeholder="age"><br>
                <label>e-email write</label><br>
                <input type="email"  maxlength="20" size="30" name="e-mail" placeholder="e-email"><br>
                <label>select university</label><br>
                <select id="check" class="check" name="city">
                    <option value="Almaty" class="o">Almaty</option>
                    <option value="Oral" class="o">Oral</option>
                    <option value="Kostanai" class="o">Kostanai</option>
                    <option value="Shymkent" class="o">Shymkent</option>
                </select>
            </div>
            <div class="checkbox" id="checkbox" name="box">
                <strong>CHOOSE YOUR UNIVERCITY</strong><br>
                <input type="radio"  name="university" value="IITU"/><label>IITU</label><br>
                <input type="radio" name="university" value="KIMEP"/><label>KIMEP</label><br>
                <input type="radio"  name="university" value="SDU" /><label>SDU</label><br>
                <input type="radio" name="university" value="SATBAEV"/><label>SATBAEV</label>
            </div>
            <div class="manwomen" id="manwomen" name="genderr">
                <STRONG>CHOOSE YOUR GENDER</STRONG><br>
                <input type="radio"  name="gender" value="man" checked/><label>man</label><br>
                <input type="radio" name="gender" value="women"/><label>women</label>
            </div>
            <input class="but2" name="loginnn" type="submit" value="sing up"><br>
            <a href="loginpage.php" class="cancel">back</a>
        </form>
    </div>
</div>
<?php if (isset($_GET['isEmpty'])) {?><div class="err"><h1>write login and password fully</h1></div><?php }?>
<?php if (isset($_GET['ageless10'])) {?><div class="err"><h1>your ages is not mokre than 10</h1></div><?php }?>
<?php if (isset($_GET['lessthan6'])) { ?><div class="err"><h1>password length need to be more than 6</h1></div><?php } ?>
<?php if (isset($_GET['university'])) { ?><div class="err"><h1>choose your university</h1></div><?php } ?>
<?php
if (isset($_GET['all'])) { ?>
    <div class="err"><h1>write login and password fully</h1></div>
    <div class="err"><h1>password length need to be more than 6</h1></div>
    <div class="err"><h1>your ages is not mokre than 10</h1></div>
    <div class="err"><h1>choose your university</h1></div>
<?php } ?>
</body>
</html