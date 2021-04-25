<?php
require 'dbCourse.php';
if($_GET['id']  and $_GET['name'] and $_GET['price']) {
    $edit = editcourse($_GET['id'],$_GET['name'], $_GET['price']);
    header('location:moderator.php');
}
else{
    echo "something wrong";
}
?>
