<?php
require 'dbCourse.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Main</title>
</head>
<?php
if(isset($_COOKIE['lang'])=="eng"){
?>
<body class="main">
<section class="courseLogin">
    <h6> All courses which is aviable</h6>
    <h6> wlecome to the page: <?php echo  $_SESSION['s'] ?></h6>
</section>
<?php
$allCourses = getAllCourses();

foreach ($allCourses as $allCourses){ ?>
    <section class="coursemain">
        <section class="course">
            <a name="list">list: <?php echo $allCourses['id'] ?></a>
            <div class="courseName">
                <h4>Name of course: <?php echo $allCourses['name'] ?></h4>
                <h4>Priod of your course: <?php echo $allCourses['month'] ?> month</h4>
            </div>
            <label>Description: <?php echo $allCourses['description'] ?></label>
            <div class="courseDescription">
                <h5>Price for the course: <?php echo $allCourses['price'];?> tenge</h5>
            </div>
            <div class="courseBut">
               <a class="infoBut" href="mainCourseInfa.php?name=<?php echo $allCourses['name'] ?>">Information</a>
            </div>
        </section>
    </section>
<?php } ?>
<div class="info">
    <label>Info about programmer</label><br><br>
    <label>
        Programming is a professional skill available to everyone. But to master it, you will have to work hard. You can go the slow and long way of trial and error, learning on your own. But it is much more rational to study programming languages under the guidance of an experienced mentor who knows how to distinguish the important from the unimportant and understands how to apply this knowledge in practice. The teachers of the KnewIT school teach programming courses with an eye to practical benefits, using real-life cases.
    </label>
</div>
<div class="info1">
    <div class="adText">
        <label class="adminText">You can go to the Admin page right now, but you will arrive to the login page, where you need to use you password for Admin</label><br>
        <a href="loginPage.php">Admin Page</a><br>
    </div>
    <div class="modText">
    <label class="moderatorText">You can go to the Moderator page right now, but you will arrive to the login page, where you need to use you password for Moderator</label><br>
    <a href="loginPage.php">Moderator Page</a>
    </div>
</div>
<?php } else{ ?>
<body class="main">
<section class="courseLogin">
    <h6> ?????? ?????????? ?????????????? ????????????????</h6>
    <h6> ?????????? ????????????????????: <?php echo  $_SESSION['s'] ?></h6>
</section>
<?php
$allCourses = getAllCourses();

foreach ($allCourses as $allCourses){ ?>
    <section class="coursemain">
        <section class="course">
            <a name="list">????????: <?php echo $allCourses['id'] ?></a>
            <div class="courseName">
                <h4>?????? ??????????: <?php echo $allCourses['name'] ?></h4>
                <h4>???????????? ???????????????? ??????????: <?php echo $allCourses['month'] ?> ????????????</h4>
            </div>
            <label>????????????????: <?php echo $allCourses['description'] ?></label>
            <div class="courseDescription">
                <h5>???????? ???? ????????: <?php echo $allCourses['price'];?> ??????????</h5>
            </div>
            <div class="courseBut">
                <a class="infoBut" href="mainCourseInfa.php?name=<?php echo $allCourses['name'] ?>">????????????????????</a>
            </div>
        </section>
    </section>
<?php } ?>
<div class="info">
    <label>???????????????????? ?? ????????????????????????????????</label><br><br>
    <label>
        ????????????????????????????????-?????? ???????????????????????????????? ??????????, ?????????????????? ??????????????. ???? ?????????? ???????????????? ????, ?????? ???????????????? ?????????? ????????????????. ???? ???????????? ???????????? ?????????????????? ?? ???????????? ???????? ???????? ?? ????????????, ?????????? ????????????????????????????. ???? ?????????????? ???????????????????????? ?????????????? ?????????? ???????????????????????????????? ?????? ???????????????????????? ???????????????? ????????????????????, ?????????????? ?????????? ???????????????? ???????????? ???? ?????????????????? ?? ????????????????, ?????? ?????????????????? ?????? ???????????? ???? ????????????????.
    </label>
</div>
<div class="info1">
    <div class="adText">
        <label class="adminText">???? ???????????? ?????????????? ???? ???????????????? ???????????????????????????? ?????????? ????????????, ???? ???? ???????????????? ???? ???????????????? ?????????? ?? ??????????????, ?????? ?????? ?????????? ?????????? ???????????????????????? ???????? ???????????? ?????? ????????????????????????????</label><br>
        <a href="loginPage.php">???????????????? ????????????</a><br>
    </div>
    <div class="modText">
        <label class="moderatorText">???? ???????????? ?????????????? ???? ???????????????? ???????????????????? ?????????? ????????????, ???? ???? ???????????????? ???? ???????????????? ?????????? ?? ??????????????, ?????? ?????? ?????????? ?????????? ???????????????????????? ???????? ???????????? ?????? ????????????????????</label><br>
        <a href="loginPage.php">???????????????? ????????????????????</a>
    </div>
</div>
<?php } ?>
</body>
</html>