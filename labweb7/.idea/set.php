<?php
    if(isset($_GET['lang'])){
        setcookie('lang',$_GET['lang'],time()+10);
        header('location:loginPage.php');
    }
?>
