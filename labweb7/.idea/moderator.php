<?php
require 'dbCourse.php';
$course = getAllCourses();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="main">

<?php
if(isset($_COOKIE['lang'])=="eng"){
?>
<h7>Admin Page</h7>
    <section class="admin">
        <section class="admin1">
            <table>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>price</td>
                </tr>
                <?php foreach ($course as $course){ ?>
                    <tr>
                        <td><?php echo $course['id'] ?></td>
                        <td><?php echo $course['name'] ?></td>
                        <td><?php echo $course['price'] ?></td>
                    </tr>
                <?php } ?>
            </table>
            <form class="editform" action="moderatorCheck2.php" method="get">
                <input type="text" class="input" name="id" placeholder="id">
               <input type="text" class="input" name="name" placeholder="name">
               <input type="text" class="input" name="price" placeholder="price">
               <button class="input" type="submit">Edit</button>
            </form>
        </section>
    </section>
</form>
    <a class='f' href="loginPage.php">go to login page</a>
<form action="moderatorChech.php" method="get">
    <div class="newcourse">
    <h8>write your course</h8>
        <input class="newinput" name="namee" type="text"placeholder="name">
        <input class="newinput" name="month" type="text"placeholder="month">
        <input class="newinput" name="pricee" type="text"placeholder="price">
        <input class="newinput" name="description" type="text"placeholder="description">
        <input class="newbutton" type="submit" value="submit">
    </div>
</form>
<?php } else{ ?>
<h7>Страница модератора</h7>
<section class="admin">
    <section class="admin1">
        <table>
            <tr>
                <td>id</td>
                <td>Имя</td>
                <td>Цена</td>
            </tr>
            <?php foreach ($course as $course){ ?>
                <tr>
                    <td><?php echo $course['id'] ?></td>
                    <td><?php echo $course['name'] ?></td>
                    <td><?php echo $course['price'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <form class="editform" action="moderatorCheck2.php" method="get">
            <input type="text" class="input" name="id" placeholder="id">
            <input type="text" class="input" name="name" placeholder="имя">
            <input type="text" class="input" name="price" placeholder="цена">
            <button class="input" type="submit">Изменить</button>
        </form>
    </section>
</section>
</form>
<a class='f' href="loginPage.php">пошли на начальную страницу</a>
<form action="moderatorChech.php" method="get">
    <div class="newcourse">
        <h8>write your course</h8>
        <input class="newinput" name="namee" type="text"placeholder="имя">
        <input class="newinput" name="month" type="text"placeholder="месяц">
        <input class="newinput" name="pricee" type="text"placeholder="цена">
        <input class="newinput" name="description" type="text"placeholder="описание">
        <input class="newbutton" type="submit" value="отправить">
    </div>
</form>
<?php } ?>
</body>
</html