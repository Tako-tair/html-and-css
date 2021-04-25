<?php

if(isset($_POST['id'])){
    require 'dball.php';

    $updated = updateStudent($_POST['id'], $_POST['studname'], $_POST['age'], $_POST['email'], $_POST['university'], $_POST['city'], $_POST['gender']);
    if($updated){
        echo "UPDATED!!!";
    }
}

?>