<?php

if(isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])){
    require 'dbinfo.php';

    $deleted = deleteStud($_GET['id']);

    if($deleted){
        echo "DELETED!!!";
        ?>
        <a href="mainPage.php">Go Back</a>
        <?php
    }
}

?>