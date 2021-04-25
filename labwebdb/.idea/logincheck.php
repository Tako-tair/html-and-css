<?php
require 'dbinfo.php';
$login = $_POST['login'];
$password = $_POST['pass'];
$student = getStudentlogin($_POST['login']);
$student = getStudentpass($_POST['pass']);

if($student != null){
if ($student['name']==$login and $student['password']==$password){
    header("Location:mainPage.php?mainPage");
}
}

?>