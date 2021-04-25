<?php
require 'dbCourse.php';
if($_GET['namee'] and $_GET['month'] and $_GET['pricee'] and $_GET['description']) {
    $addCourse = addCourse($_GET['namee'], $_GET['month'], $_GET['pricee'], $_GET['description']);
    header('location:moderator.php');
}
else{
    echo "something wrong";
}
?>