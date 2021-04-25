<?php

if(isset($_POST['id'])){
    require 'dbinfo.php';

    $updated = updateStudent($_POST['id'],$_POST['studname'], $_POST['password'], $_POST['age'], $_POST['email'], $_POST['city'], $_POST['university'], $_POST['gender']);
    if($updated){
        echo "UPDATED!!!";
    }
    ?>
    <a href="mainPage.php">Main Page</a>
<?php
}

?>