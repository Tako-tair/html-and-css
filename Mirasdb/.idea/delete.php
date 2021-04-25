<?php

if(isset($_GET['id']) && is_numeric($_GET['id']) && !empty($_GET['id'])){
    require 'dball.php';

    $deleted = deleteStud($_GET['id']);

    if($deleted){
        echo "DELETED!!!";
        ?>
        <a href="showpage.php  ">NA glavnuyu</a>
        <?php
    }
}

?>