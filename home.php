<?php
session_start();
include("dbh.php");

?>

<h1>Chatting Room </h1>

<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>


		<script>
		function ajax() {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (xhttp.readyState == 4 && xhttp.status == 200) {
		      document.getElementById("chat").innerHTML = xhttp.responseText;
		    }
		  };
		  xhttp.open("GET", "chat.php", true);
		  xhttp.send();

		}
		setInterval(function(){ajax()}, 100);
		</script>

	</head>

	<body onload="ajax();">
		<div id="main">
			<h1 style="background-color:#6495ed; color:white;">
			 <?php echo $_SESSION['name'] ?>
				Typing </h1>
				<div class= "output">
					
               <div id="chat"></div>

				</div>
				<form method="post" action="send.php">
					<textarea name="msg" rows="10" placeholder="Type to send message" class="form-control">
						
					</textarea><br>
					<input type="submit" value="SEND">
				</form><br>


				<form action="logout.php" method="post">

					<button name = "logout" type="submit" >Log Out </button>
					
				</form>
		</div>
	</body>
</html>	
