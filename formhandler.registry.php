<?php
if($_SERVER["request_methof"]=="post"){
    $username = $_post["username"];
    $password = $_post["password"];
    $email = $_post["email"];
    
try{
    require_once "dbh.registry.php";
    $query ="insert into users (username, password, email) values(:username,password,email);";
    $stmt = $pdo->prepare($query);
    $stmt->bindparam(":username, $username");
    $stmt->bindparam(":password", $password);
    $stmt->bindparam(":email",$email);


    $stmt->execute(); 
    $pdo =null;
    $stmt = null;

} catch (PDOException $e){
    die("query failed:" .$e->getMessage());
}

} else{
    hearder("location:../registry.php");
}