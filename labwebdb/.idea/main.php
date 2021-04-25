<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login PAage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="logindiv">
    <h1>WELCOME TO THE MAIN PAGE</h1>
    <DIV class="logintext">
        <form action="logincheck.php" method="post">

            <div class="loginn"><input class="login1" type="text"  maxlength="25" size="40" placeholder="NAME" name="login" required></div>
            <div class="password"><input class="password1" type="password" maxlength="25" placeholder="PASSWORD" size="40"  name="pass" required></div>

            <div class="buttons">
                <input class="but" name="loginn" type="submit" value="LOGIN">
                <p class="reg">NOT REGISTERED: <a href= "registration.php">REGISTRATION</a></p>
            </div>
        </form>
    </DIV>
</div>

<?php if (isset($_GET['notlogged'])) { ?><div class="Error"><h2>Not true login and password</h2></div><?php } ?>

</body>
</html>
