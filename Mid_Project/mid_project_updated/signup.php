<html>
	<head></head>
	<body>
	
	<style>
	body {
  background-color: lightblue;
}
	h1{
		padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 700px;
  top: 60px;
font-size: 20px;}
h2{position: absolute;
left:35px;
top:30px;}

h3{
font-size:30px;}
	
	</style>
	<?php
	$nameErr = $fnameErr = $lnameErr = $passErr = $pErr = $emailErr ="";
    $uname = $pass = $fname = $lname = $p = $email = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["uname"]))
      {
  		$nameErr = "Username is required";
  	}
     else if(strlen($_POST["uname"])<5)
  	 {
  	  $nameErr="Enter valid name";
  	 }
  	 else
     {
  		 $uname=$_POST["uname"];
  	 }
  	       	     if (empty($_POST["pass"]))
      {
  		$passErr = "password is required";
  	   }
     else if(strlen($_POST["pass"])<6)
  	 {
  	  $passErr="password must be Atleast 6 charecter";
  	 }

  	 else
     {
  		 $pass=$_POST["pass"];
  	 }
	  if(empty($_POST["p"])){
                $pErr="Number is required";
            }
			else if(is_numeric($_POST["p"])==false){
                $pErr="Please enter digit";
            }

            else{
                $p=$_POST["p"];
            }

  	    	  
       
       if(empty($_POST["fname"])){
                $fnameErr="Name is required";
            }
            else{
                $fname=$_POST["fname"];
            }
			       if(empty($_POST["lname"])){
                $lnameErr="Name is required";
            }
            else{
                $lname=$_POST["lname"];
            }
      
	   if (empty($_POST["email"]))
      {
  		$emailErr = "email is required";
  	  }
  	 else
     {
  		 $email=$_POST["email"];
  	 }
	 if(empty($_POST["uname"])||empty($_POST["pass"])||empty($_POST["p"])||empty($_POST["fname"])||empty($_POST["lname"])||empty($_POST["email"])){
		 echo "Fill all the forms";
	 }
	 else{
		 header("location: login.php");
	 }	  
    }
	?>

<h2><img src="q.png" width="500" height="450"></h2>
		<h1><form action="" method="post">
			<table>
				<h3>Register for EduCare (as Student)</h3>
			<tr>
			        <td rowspan="2"><span>Name </span></td>
						
                    <td>:<input type="text" placeholder="First name" value="<?php echo $fname; ?>" name="fname"> 
                   <?php echo $fnameErr; ?></span></td>
                </tr>
			<tr>
                    
					<td>:<input type="text" placeholder="Last name" value="<?php echo $lname; ?>" name="lname"> 
                   <?php echo $lnameErr; ?></span></td>
				</tr>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="email" placeholder="Username" name="uname" value="<?php echo $uname?>"<span><?php echo $nameErr
					?></span></td>

				</tr>
					<tr>
							<td><span>Password: </span></td>

					<td>:<input type="password" placeholder="Password" name="pass" value="<?php echo $pass?>"<span><?php echo $passErr
					?></span></td>
				</tr>
				<tr>
							<td><span>Confirm Password </span></td>

					<td>:<input type="password" placeholder="Password" name="pass" value="<?php echo $pass?>"<span><?php echo $passErr
					?></span></td>
				</tr>
				<tr>
							<td><span>Email</span></td>

					<td>:<input type="Email" placeholder="Email" name="email" value="<?php echo $email?>"<span><?php echo $emailErr
					?></span></td>
				</tr>
				<tr>
				
					<td><span>Phone number</span></td>
                    
                    <td>:<input type="text" placeholder="Phone Number" value="<?php echo $p; ?>" name="p">
                    <?php echo $pErr; ?></span> </td>
                </tr>
				
				
				<tr>
				<td><span>Birth Date</span></td>
				<td>
				<select> 
				<option>Day</option>
				<?php
				for($i=1; $i<31; $i++)
					echo"<option>$i</option>";
				?>
				</select>
				<select> 
				<option>Month</option>
				<?php
				$month= array("jan","Feb","Mar","Apr","May","jun","jul","Sep","Oct","Nov","Dec");
				foreach($month as $v){
					echo"<option>$v</option>";
				}
				?>
				</select>
				<select>
				<option>Year</option>
				<?php
				for($j=1950; $j<2021; $j++)
					echo"<option>$j</option>";
				?>
				</select>
				</td>
				</tr><br>
				<tr>
					<td><input type="submit" value="Sign Up "></td>
				</tr>

			</table>


		</form></h1>
		
	</body>
</html>