<?php
require 'dbinfo.php';
$login = $_POST['name'];
$password = $_POST['password'];
$age = $_POST['age'];
$email = $_POST['email'];
$checkboxx = $_POST['checkcity'];
$checkboxu = $_POST['checkboxu'];
$gender = $_POST['gender'];

$testlog = false;
$lenght = true;

if(strlen($login) <= 4 || strlen($password) <= 6){
    $lenght = false;
    ?>
    <h3>your log and pass less than 6</h3>
    <?php
}
if(!empty($login) && !empty($password)) {
    $testlog = true;
} ?>
<?php
if($login and $password and $age>0 and $email and $checkboxu) {
    $studentsinfo = registration($_POST['name'], $_POST['password'], $_POST['age'], $_POST['email'], $_POST['checkcity'], $_POST['checkboxu'], $_POST['gender']);
    echo 'succesful';?><br>
    <a href="main.php" class="cancel button">BACK</a>
<?php
}
?>
    <?php
 if(!$lenght and !$testlog and !$checkboxu){
    header("Location:registration.php?Go");
}elseif (!$lenght) {
    header("Location:registration.php?LessThan7");
} elseif (!$testlog) {
    header("Location:registration.php?isEmpty");
} elseif ($age<10) {
    header("Location:registration.php?age10");
} elseif (!$checkboxu) {
     header("Location:registration.php?university");
 }
?>
