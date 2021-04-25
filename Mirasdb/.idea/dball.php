<?php

try {
    $connection = new PDO('mysql:host=localhost;dbname=labweb5', 'root', '');
} catch(PDOException $e){
    echo $e->getMessage();
}
function getAll(){
    global $connection;
    $query = $connection->prepare("select * from students");
    $query->execute();

    $results = $query->fetchAll();
    return $results;
}
function addStud($login, $age, $city){
    global $connection;
    $query = $connection->prepare("insert into students(login, age, city) VALUES(:n, :a, :c)");
    $rows = $query->execute(array(":n"=>$login, ":a"=>$age, ":c"=>$city));

    return $rows>0;
}
function registration($login, $password, $age, $email, $city, $university, $gender){
    global $connection;
    $query = $connection->prepare("insert into students(login, password, age, email, city, university, gender) VALUES(:n, :p, :a, :e, :c, :u, :g)");
    $rows = $query->execute(array(":n"=>$login, ":p"=>$password, ":a"=>$age, ":e"=>$email, ":c"=>$city, ":u"=>$university, ":g"=>$gender));
    return $rows>0;
}
function deleteStud($id){
    global $connection;
    $query = $connection->prepare("delete from students where id=:sid");
    $rows = $query->execute(array("sid"=>$id));

    return $rows>0;
}
function getOneStudent($id){
    global $connection;
    $query = $connection->prepare("select * from students where id=:sid");
    $rows = $query->execute(array("sid"=>$id));
    $result = $query->fetch();
    return $result;
}
function updateStudent($id, $login, $age, $email, $university, $city,  $gender){
    global $connection;
    $query = $connection->prepare("
			update students
			SET login=:n,  age=:a, email=:e, city=:c, university=:u, gender=:g
			WHERE id=:sid
			");
    $rows = $query->execute(array(":n"=>$login, ":a"=>$age, ":e"=>$email, ":c"=>$city, ":u"=>$university, ":g"=>$gender, "sid"=>$id));
    return $rows>0;
}
function getStudentlogin($login){
    global $connection;
    $query = $connection->prepare("select * from students where login=:login");
    $rows = $query->execute(array("login"=>$login));
    $result = $query->fetch();
    return $result;
}
function getStudentpass($password){
    global $connection;
    $query = $connection->prepare("select * from students where password=:pass");
    $rows = $query->execute(array("pass"=>$password));
    $result = $query->fetch();
    return $result;
}
?>