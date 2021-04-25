<?php
require 'dbCourse.php';
$Course = getCourse($_GET['name']);
$usercourse = getAllUserCourse();
$access = true;
session_start();
$value = $_SESSION['id'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body class="main">
<section class="coursemain1">
    <section class="course1">
        <form action="mainCheck.php" method="post">
            <?php foreach ($Course as $Course){ ?>
            <a name="list">list: <?php echo $Course['id'];  $_SESSION['courseid']=$Course['id']; ?></a>
            <div class="courseName1">
                <h4>Name of course: <?php echo $Course['name'] ?></h4>
                <h4>Period of your course: <?php echo $Course['month'] ?> month</h4>
            </div>
            <label>Description: <?php echo $Course['description'] ?></label>
            <div class="courseDescription1">
                <h5>Price for the course: <?php echo $Course['price'];?> tenge</h5>
            </div>
            <?php
            $mycources = MyCourses($value);
            $bool = false;
            foreach ($mycources as $mycources){
                if($mycources['id'] == $Course['id']){
                    $bool = true;
                    break;
                }
            }
            if(!$bool){
            foreach ($usercourse as $usercourse) {
                if ($usercourse['courceid'] == $Course['id']) {
                    $access = true;
                } else {
                    $access = false;
                }
            } ?> <div class="courseBut1">
                <?php  if(!$access){ ?>
                <button class="infoButton" type="submit" name = "button" value="Subscrib">Subscrib</button>
                <?php }else{ ?>
                <button class="infoButton" type="submit" name = "button" value="Unsubscrib">Unsubscrib</button>
                <?php } }else{ ?>
            </div>
            <div class="courseBut1">
                <button class="infoButton" type="submit" name = "button" value="Unsubscrib">Unsubscrib</button></div> <?php } }?>
            <a class="backCourse" href="main.php">Back to courses</a>
        </form>
    </section>
</section>
</body>
</html>