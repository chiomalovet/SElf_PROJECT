<?php
$servername="localhost";
$username="root";
$password="";
$dsn="mysql:host=$servername;dbname=myexams";
try{
    $conn=new PDO($dsn,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo"connection failed:".$e->getMessage();
}


?>