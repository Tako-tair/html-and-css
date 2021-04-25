<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration</title>
</head>
<body>
<div class="main1">
    <div class="main2">
        <form action="registrationCheck.php" method="post">
            <div class="fieldtext">
                <h2>REGISTRATION INFO</h2>
                <label>NAME</label><br>
                <input type="text"  maxlength="25" size="40" name="name" placeholder="LOGIN"><br>
                <label>PASSWORD</label><br>
                <input type="password"  maxlength="25" size="40" name="password" placeholder="PASSWORD"><br>
                <label>AGE</label><br>
                <input type="text"  maxlength="25" size="40" name="age" placeholder="AGE"><br>
                <label>E-MAIL WRITE</label><br>
                <input type="email"  maxlength="25" size="40" name="email" placeholder="E-MAIL"><br>
                <label>SELECT YOUR STUDY CITY</label><br>
                <select id="check" class="check" name="checkcity">
                    <option value="ATA" class="op">ATA</option>
                    <option value="TDK" class="op">TDK</option>
                    <option value="TK" class="op">TK</option>
                    <option value="ORAL" class="op">ORAL</option>
                </select>
            </div>
            <div class="checkbox" id="checkbox" name="checkbox">
                <strong>CHOOSE YOUR UNIVERCITY</strong><br>
                <input type="radio"  name="checkboxu" value="iitu"/><label>iitu</label><br>
                <input type="radio" name="checkboxu" value="sdu"/><label>sdu</label><br>
                <input type="radio"  name="checkboxu" value="aitu" /><label>aitu</label><br>
                <input type="radio" name="checkboxu" value="kbtu"/><label>kbtu</label>
            </div>
            <div class="manwomen" id="manwomen" name="manwomen">
                <STRONG>CHOOSE YOUR GENDER</STRONG><br>
                <input type="radio"  name="gender" value="MAN" checked/><label>MAN</label><br>
                <input type="radio" name="gender" value="WOMEN"/><label>WOMAN</label>
            </div>
            <input class="but2" name="loginnn" type="submit" value="SING UP"><br>
            <a href="main.php" class="cancel button">BACK</a>
        </form>
    </div>
</div>


<?php if (isset($_GET['isEmpty'])) {?><div class="err"><h5>pls write login and password</h5></div><?php }?>

<?php if (isset($_GET['age10'])) {?><div class="err"><h5>you need to be more than 10 ages</h5></div><?php }?>

<?php if (isset($_GET['LessThan7'])) { ?><div class="err"><h5>The length need to be more than 6</h5></div><?php } ?>

<?php if (isset($_GET['university'])) { ?><div class="err"><h5>Pls choose your university</h5></div><?php } ?>

<?php
if (isset($_GET['Go'])) { ?>
    <div class="err"><h5>pls write login and password</h5></div>
    <div class="err"><h5>The length need to be more than 6</h5></div>
    <div class="err"><h5>you need to be more than 10 ages</h5></div>
    <div class="err"><h5>Pls choose your university</h5></div>
<?php } ?>



</body>
</html>