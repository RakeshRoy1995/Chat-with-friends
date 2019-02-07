<!DOCTYPE html>
<html>
	<head>
		<title>WebChat</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>

	<body>
		<div id="main">
			<div id="Info">
				<h2>Login Here</h2>

				<form action="login.php" method="post">
					<label><b>UserName : </b></label>
					<input type="text" name="name" placeholder="Your name"><br><br>
					<label><b>Password : </b></label>
					<input type="text" name="pass" placeholder="*****"><br><br>
					<button type="submit" name="login"> LogIn</button>
				</form>

				<form action="signup.php" method="post">
					<h2>Dont Have An Account Now ? Sign Up Here </h2>
					<label><b>UserName : </b></label>
					<input type="text" name="name" placeholder="Your name"><br><br>
					<label><b>Email : </b></label>
					<input type="email" name="email" placeholder="Your Email "><br><br>
					<label><b>Password : </b></label>
					<input type="password" name="pass" placeholder="*****"><br><br>
					<button type="submit" name="signup"> SignUp</button>
				</form>
			</div>
		</div>
	</body>
</html>