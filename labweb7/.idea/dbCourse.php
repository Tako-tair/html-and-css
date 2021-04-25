<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=coursera', 'root', '');
}catch (PDOException $e){
    echo $e->getMessage();
}
function getAllClient(){
    global $connection;
    $query = $connection->prepare("select * from logpas");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
function addClient($name,$surname,$login,$password,$age){
    global $connection;
    $query =$connection->prepare("insert into logpas(name,surname,login,password,age) VALUES(:n,:s,:l,:p,:a)");
    $row =$query->execute(array(":n"=>$name,":s"=>$surname,":l"=>$login,":p"=>$password,":a"=>$age));
    return $row>0;
}
function getAllCourses(){
    global $connection;
    $query = $connection->prepare("select * from courses");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
function getAllUserCourse(){
    global $connection;
    $query = $connection->prepare("select * from usercourse");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
function deleteUserCourse($userid,$courseid){
    global $connection;
    $query = $connection->prepare("delete from usercourse where userid =:uid and courceid=:cid");
    $result = $query->execute(array("uid"=>$userid,"cid"=>$courseid));
    return $result>0;
}
function addUserCourse($userid,$courceid){
    global $connection;
    $query =$connection->prepare("insert into usercourse(userid,courceid) VALUES(:u,:c)");
    $row = $query->execute(array(":u"=>$userid,":c"=>$courceid));
    return $row>0;
}
function getCourse($name){
    global $connection;
    $query = $connection->prepare("select * from courses where name=:n");
    $query->execute(array(":n"=>$name));
    $result = $query->fetchAll();
    return $result;
}
function deleteCourse($name){
    global $connection;
    $query = $connection->prepare("delete from courses where name =:n");
    $rows = $query->execute(array("n"=>$name));
    return $rows>0;
}
function deleteClient($name){
    global $connection;
    $query = $connection->prepare("delete from logpas where name =:n");
    $rows = $query->execute(array("n"=>$name));
    return $rows>0;
}
function editcourse($id,$name, $price){
    global $connection;
    $query = $connection->prepare("update courses SET name=:n, price=:p WHERE id=:i");
    $rows = $query->execute(array(":n"=>$name, ":p"=>$price,":i"=>$id));
    return $rows>0;
}
function addCourse($name,$month,$price,$description){
    global $connection;
    $query =$connection->prepare("insert into courses(name,month,price,description) VALUES(:n,:m,:p,:d)");
    $row = $query->execute(array(":n"=>$name,":m"=>$month,":p"=>$price,":d"=>$description));
    return $row>0;
}
function MyCourses($id){
    global $connection;
    $query = $connection->prepare("SELECT courses.name, courses.price,  courses.id
             FROM courses, usercourse
             WHERE courses.id=usercourse.courceid and usercourse.userid=$id");
    $query->execute();
    $results = $query->fetchAll();
    return $results;
}
?>
