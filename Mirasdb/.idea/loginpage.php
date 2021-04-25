<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login PAage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="log">
    <h1>welcome login page</h1>
    <DIV class="logtext">
        <form action="logincheck.php" method="post">
            <div class="login"><input class="login1" type="text"  maxlength="25" size="40" placeholder="name" name="login" required></div>
            <div class="password"><input class="password1" type="password" maxlength="25" placeholder="password" size="40"  name="password" required></div>
                <div class="buttons">
                <input class="but" name="loginn" type="submit" value="login">
                <p class="reg">not registred: <a href= "registr.php">registration</a></p>
            </div>
        </form>
    </DIV>
</div>
<?php if (isset($_GET['notlogged'])) { ?><div class="Err"><h2>pls write true login and password</h2></div><?php } ?>
</body>
</html>
