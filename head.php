<!DOCTYPE html>

<html>
	<head>
		<title> Social Network </title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>


<body>
	
<div class="container">

	<div id= "header_wrapper">
		<div id="header">
			<img src="image/LOGO2F-2.png" style="float:left;width: 600px;height: 60px;padding-top: 10px;">
			<form method="post" action= "index.php" id= "form1">
				<strong>Email: </strong>
				<input type="email" name="email" placeholder= "Your Email" required >
				<strong>Password: </strong>
				<input type="password" name="pass" placeholder= "*******" required >
				<button name="login"> Login </button>
			</form>
		</div>
		<?php include("login.php") ?>
	</div>
