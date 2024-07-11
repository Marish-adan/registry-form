<?php
$dsn ="mysql:host=localhost;dbname=Registration form";
$dbusername ="root";
$dbpassword ="";
$dbname ="REgistration form";

try{
    $pdo = new PDO ($dsn, $dbusername, $dbpassword, $dbname);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 



} catch (PDOException $e) {
echo "connection failed:" . $e->getMessage();
}
