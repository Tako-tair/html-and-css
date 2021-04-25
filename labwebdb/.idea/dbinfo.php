<?php

try {
    $connection = new PDO('mysql:host=localhost;dbname=labweb6', 'root', '');
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

function addStud($name, $age, $city){
    global $connection;
    $query = $connection->prepare("insert into students(name, age, city) VALUES(:n, :a, :c)");
    $rows = $query->execute(array(":n"=>$name, ":a"=>$age, ":c"=>$city));

    return $rows>0;
}

function registration($name, $password, $age, $email, $city, $university, $gender){
    global $connection;
    $query = $connection->prepare("insert into students(name, password, age, email, city, university, gender) VALUES(:n, :p, :a, :e, :c, :u, :g)");
    $rows = $query->execute(array(":n"=>$name, ":p"=>$password, ":a"=>$age, ":e"=>$email, ":c"=>$city, ":u"=>$university, ":g"=>$gender));
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

function updateStudent($id, $name, $password, $age, $email, $city, $university, $gender){
    global $connection;
    $query = $connection->prepare("
			update students
			SET name=:n, password=:p, age=:a, email=:e, city=:c, university=:u, gender=:g
			WHERE id=:sid
			");
    $rows = $query->execute(array(":n"=>$name, ":p"=>$password, ":a"=>$age, ":e"=>$email, ":c"=>$city, ":u"=>$university, ":g"=>$gender, "sid"=>$id));
    return $rows>0;
}

function getStudentlogin($login){
    global $connection;
    $query = $connection->prepare("select * from students where name=:log");
    $rows = $query->execute(array("log"=>$login));
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