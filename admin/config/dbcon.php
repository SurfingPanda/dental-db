<?php

$host = "localhost";
$username = "root";
$password = "@Rvin516428379";
$database = "dentaldbasd121";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if(!$con){
    header("Location: ../errors/dberror.php");
    die(); 
}
?>