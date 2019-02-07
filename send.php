<?php

session_start();
include("dbh.php");

$msg= $_POST['msg'];
$name= $_SESSION['name'];

$sql= "INSERT INTO posts(msg , name) VALUES ('$msg' , '$name')";

$conn= mysqli_query($con , $sql); 

 echo "<script> window.open('home.php', '_self') </script>";

?>