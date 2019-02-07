	<div id="content">
		<div>
			<img src="image/12524418_257602011240355_2527050445716672989_n.jpg" style="float:left;width: 500px;height: 500px;">
		</div>
		<div id="form2" style="float:right;">
			<form action="index.php" method="post" >
			
				<h2>Sign Up for Today</h2>
				Name : 
				<input type="text" name="u_name" placeholder="Write a Name" required="" style="border-left-width: 0px;margin-left: 20‒;margin-left: 20px;">
				<br>
				Password :
				<input type="password" name="u_pass" placeholder="Enter PAssword" required>
				<br>
				E-mail:
		        <input type="email" name="u_email" placeholder="Enter Your Email" required="" style="margin-left: 20px;">
				<br>
				Country :
				<select name="u_country" required="" style="margin-left: 11px;">
				<option>Select A country</option>
				<option>Bangladesh</option>
				<option>India</option>
				<option>Japan</option>
				<option>Portugal</option>
				<option>Russia</option>
				</select>
				<br>
				Gender :
				<select name="u_gender" required="" style="margin-left: 15px;">
				<option>Male</option>
				<option>Female</option>
				</select>	
				<br>
				Brithday :
				<input type="date" name="u_birthday" placeholder="Select A country" required="" style="margin-left: 10px;">
				<br>
				<button type="submit" name="submit" style="margin-left: 75px;">Sign up</button>
					
			</form>
		</div>
		<?php include("insert_user.php"); ?>
	</div>
