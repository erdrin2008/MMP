<?php 
$host='localhost';
$user='root';
$pass='';
$dbname='MMP';

try{
    $pdo= new PDO("mysql:host=$host ; dbname=$dbname," $user, $pass);
}catch(PDOException $e){
    echo"ERROR" $e ->getMessage();
}




?>