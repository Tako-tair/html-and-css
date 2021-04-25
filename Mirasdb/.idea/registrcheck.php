<?php
require 'dball.php';
$login = $_POST['namename'];
$password = $_POST['pass'];
$ages = $_POST['age'];
$email = $_POST['e-mail'];
$checkboxu = $_POST['university'];
$logintext = false;
$lenghttext = true;
if(strlen($login) <= 6 || strlen($password) <= 6){
    $lenghttext = false;
    ?>
    <h3>log and pass less than 6</h3>
    <?php
}
if(!empty($login) && !empty($password)) {
    $logintext = true;
} ?>
<?php
if($login and $password and $ages>0 and $email and $checkboxu) {
    $studentsinfo = registration($_POST['namename'], $_POST['pass'], $_POST['age'], $_POST['e-mail'], $_POST['city'], $_POST['university'], $_POST['gender']);
    echo 'access got';?><br>
    <a href="loginpage.php" class="cancel button">back to login page</a>
    <?php
}
?>
<?php
if(!$lenghttext and !$logintext and !$checkboxu){
    header("Location:registr.php?all");
}elseif (!$lenghttext) {
    header("Location:registr.php?lessthan6");
} elseif (!$logintext) {
    header("Location:registr.php?isEmpty");

} elseif (!$checkboxu) {
    header("Location:registr.php?university");
}

?>
