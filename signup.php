<?php

include("dbh.php");
if(isset($_POST['signup'])){
$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['pass'];

$insert = "INSERT INTO signup( username, email, password) 
           VALUES ('$name', '$email', '$pass')";

$query = mysqli_query($con, $insert);             

}



?>