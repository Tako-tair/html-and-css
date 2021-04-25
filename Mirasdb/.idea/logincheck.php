<?php
require 'dball.php';
$login = $_POST['login'];
$password = $_POST['password'];
$student = getStudentlogin($_POST['login']);
$students = getStudentpass($_POST['password']);

if($student != null){
    if ($student['login']==$login and $students['password']==$password){
        header("Location:showpage.php?mainPage");
    }
}

?>