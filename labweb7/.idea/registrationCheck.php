<?php
require 'dbCourse.php';
$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$password = $_POST['password'];
$reppassword = $_POST['reppassword'];
$age = $_POST['age'];
if($reppassword == $password){
    if(strlen($name)<2 || strlen($surname)<2){
        header('location:registration.php?name');
    }else{
        if(strlen($login)<4 || strlen($password)<4){
            header('location:registration.php?login');
        }else{
            if($age<10){
                header('location:registration.php?age');
            }
            else{
                $log = addClient($_POST['name'],$_POST['surname'],$_POST['login'],$_POST['password'],$_POST['age']);
                header('location:loginPage.php?Access');
            }
        }
    }
}else{
    header('location:registration.php?password');
}
?>
