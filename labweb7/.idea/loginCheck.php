<?php
require 'dbCourse.php';
$log = $_POST['login'];
$pass = $_POST['password'];
$admin = 'admin';
$moderator = 'moderator';
$check = false;
$allClient = getAllClient();
if($log==$admin and $pass==$admin){
    header('location:adminPage.php');
}elseif ($log==$moderator and $pass==$moderator){
    header('location:moderator.php');
}
if(!empty($allClient)) {
    foreach ($allClient as $a) {
        if ($log == $a['login'] and $pass == $a['password']) {
            session_start();
            $_SESSION['s'] = $a['name'];
            $_SESSION['id'] = $a['id'];
            header('location:main.php');
        }
    }
}
?>