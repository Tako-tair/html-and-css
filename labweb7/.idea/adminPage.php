<?php
require 'dbCourse.php';
$client = getAllClient();
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
<form action="adminCheck.php" method="get">
<section class="admin">
    <section class="admin1">
        <table>
            <?php foreach ($client as $client){ ?>
            <tr>
                <td><?php echo $client['name'] ?></td>
                <td><a href="adminCheck.php?client=<?php echo $client['name'] ?>">delete</a></td>
            </tr>
            <?php } ?>
        </table>
    </section>
    <section class="admin2">
        <table>
            <?php foreach ($course as $course){ ?>
                <tr>
                    <td><?php echo $course['name'] ?></td>
                    <td><a href="adminCheck.php?course=<?php echo $course['name'] ?>">delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</section>
    <a class='f' href="loginPage.php">go to login page</a>
</form>
<?php } else{ ?>
<h7>Страница админа</h7>
<form action="adminCheck.php" method="get">
    <section class="admin">
        <section class="admin1">
            <table>
                <?php foreach ($client as $client){ ?>
                    <tr>
                        <td><?php echo $client['name'] ?></td>
                        <td><a href="adminCheck.php?client=<?php echo $client['name'] ?>">удалить</a></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
        <section class="admin2">
            <table>
                <?php foreach ($course as $course){ ?>
                    <tr>
                        <td><?php echo $course['name'] ?></td>
                        <td><a href="adminCheck.php?course=<?php echo $course['name'] ?>">удалить</a></td>
                    </tr>
                <?php } ?>
            </table>
        </section>
    </section>
    <a class='f' href="loginPage.php">пошли в начальную страницу</a>
</form>
<?php } ?>
</body>
</html>