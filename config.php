<?php
try {
#comment below two lines when uploaded to server
$conn = new mysqli("localhost","root","");
$conn->query("CREATE DATABASE IF NOT EXISTS student");

$Host = "localhost";//database server url
$User = "root"; //database username
$Password = ""; //database password
$Name = "student"; //database name

$conn = new mysqli($Host,$User,$Password,$Name);
$conn->query("CREATE TABLE IF NOT EXISTS register(ID INTEGER AUTO_INCREMENT PRIMARY KEY,EMAIL VARCHAR(30),PASSWORD VARCHAR(30));");
} catch (Exception $e){
    echo "<script>alert('Couldnt connect to database');</script>";
    exit();
}
?>