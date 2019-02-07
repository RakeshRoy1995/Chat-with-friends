<?php
session_start();
include("dbh.php");

if(isset($_POST['login'])){

$name= $_POST['name'];
$pass= $_POST['pass'];

$qry = "SELECT * FROM signup WHERE username= '$name'
 AND password='$pass'";

$run = mysqli_query($con, $qry);

	$num = mysqli_num_rows($run);
	if($num==1){
		$_SESSION['name']= $_POST['name'];
		echo "<script> window.open('home.php', '_self') </script>";
	}
	else{
		echo "<script> alert('Wrong somewhere') 
		window.open('index.php', '_self') </script>";
	}

}



?>