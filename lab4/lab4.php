<html>
	<head></head>
	<body>
	
		<?php
			$username="";
			$err_username="";
			$password="";
			$err_password="";
			
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["username"])){
					$err_uname="Username is  Required";
				}
				else if(strlen($_POST["username"])<8){
					$err_uname="*Username should be at least 3 characters";
				}
				else{
					$username=$_POST["username"];
				}
				if(empty($_POST["password"])){
					$err_password="*Password  is Required";
				}
				else{
					$password=$_POST["password"];
				}
				
				
			

			
		?>
	
		<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" value="<?php echo $username;?>" name="username">
					<span><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
					<span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
					     <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games</td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
	</body>
</html>