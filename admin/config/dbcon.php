<?php

$host = "localhost";
$username = "root";
$password = "@Rvin516428379";
$database = "dentaldb";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if(!$con){
    header("Location: ../errors/dberror.php");
    die(); 
}

?>