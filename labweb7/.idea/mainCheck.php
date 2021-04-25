<?php
require 'dbCourse.php';
session_start();
$courseid = $Course['id'];
if("Unsubscrib" == $_POST['button']){
    $delete = deleteUserCourse( $_SESSION['id'],$_SESSION['courseid']);
    header('location:main.php?access');
}else{
    $add = addUserCourse($_SESSION['id'],$_SESSION['courseid']);
    header('location:main.php?access');
}
?>
