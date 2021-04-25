<?php
require 'dbCourse.php';

if(isset($_GET['client'])){
    $delete = deleteClient($_GET['client']);
}
elseif (isset($_GET['course'])) {
    $delete = deleteCourse($_GET['course']);
}
header('location:adminPage.php?access');
?>