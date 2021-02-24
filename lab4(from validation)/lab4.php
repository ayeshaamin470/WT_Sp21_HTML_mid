<html>
	<head></head>
	<body>
	<?php
	$nameErr= $namErr = $passErr = $genderErr = $emailErr = $hobbiesErr = $hErr =$numErr=$addErr= $cityErr=$StateErr=$pErr=$codeErr= $professionErr="";
    $uname = $pass = $email =$code= $gender = $hErr=$num = $profession = $add= $city= $State= $p =$nam= $hobbies = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
	   

      if (empty($_POST["uname"]))
      {
  		$nameErr = "Name is required";
  	}
     else if(strlen($_POST["uname"])<6)
  	 {
  	  $nameErr="Username MUST CONTAIN AT LEAST 6 CHARECTER";
  	 }
  	 else
     {
  		 $uname=$_POST["uname"];
  	 }
  	     if (empty($_POST["pass"]))
      {
  		$passErr = "password is required";
  	   }
     else if(strlen($_POST["pass"])<8)
  	 {
  	  $passErr="password must be Atleast 8 charecter";
  	 }
	else if ($pass =="*") {
  echo "special Character required";
}
	 
  	 else
     {
  		 $pass=$_POST["pass"];
  	 }
	 if (empty($_POST["add"]))
      {
      $addErr = "Address is required";
      } else
       {
       $add =$_POST["add"];
      }
  	  if (empty($_POST["gender"]))
      {
      $genderErr = "Gender is required";
      } else
       {
       $gender =$_POST["gender"];
      }
	  if (empty($_POST["num"]))
      {
      $numErr = "phone number is required";
      } else
       {
       $num =$_POST["num"];
      }

  	  if (empty($_POST["hobbies"]))
       {
      $hobbiesErr = "select hobbies";
      } else
       {
       $hobbies =$_POST["hobbies"];
      }
  	  if (empty($_POST["profession"])) {
      $professionErr = "select profession";
      } else
       {
       $profession =$_POST["profession"];
      }
	  if (empty($_POST["email"]))
      {
  		$emailErr = "Email is required";
  	   }
     else if(strlen($_POST["email"])<8)
  	 {
  	  $emailErr="Email is required";
  	 }
	 
  	 else
     {
  		 $email=$_POST["email"];
  	 }
	 
	  if (empty($_POST["nam"]))
      {
      $namErr = "Name is required";
      } else
       {
       $gender =$_POST["nam"];
      }
	  

    }


		?>
<fieldset>
<legend><h1>Club Member Registration</h1></legend>
		<form action="" method="post">
			<table>
			<tr>
								<td><span>Name</span></td>
					<td>:<input type="text" placeholder="Name" name="name" value="<?php echo $nam?>"<span><?php echo $namErr
					?></span></td>


				</tr>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" placeholder="Username" name="uname" value="<?php echo $uname?>"<span><?php echo $nameErr
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

					<td>:<input type="number" placeholder="code" name="code" value="<?php echo $code?>"<span><?php echo $codeErr
					?></span></td>
					<td>-<input type="number" placeholder="Number" name="number" value="<?php echo $num?>"<span><?php echo $numErr
					?></span></td>
				</tr>
				
				
				<tr>
					<td rowspan="2"><span>Address </span></td>
					<td>:<input type="text" placeholder="Street Address" name="add" value="<?php echo $add?>"<span><?php echo $addErr
					?></span></td>
					<tr>
					<td>:<input type="Text" placeholder="City" name="City" value="<?php echo $city?>"<span><?php echo $cityErr

					?></span></td>
					
					<td>-<input type="Text" placeholder="State" name="State" value="<?php echo $State?>"<span><?php echo $StateErr

					?></span></td>
					<td><input type="Text" placeholder="Poatal/Zip Code" name="Poatal/Zip Code"" value="<?php echo $p?>"<span><?php echo$pErr?>
					
					</span></td>
					
				</tr>

				</tr>
				
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender" >Male<input type="radio" value="Female" name="gender" >Female  <br><span><?php echo $genderErr
					?></span></td>
				</tr>
				<tr>
					<td><span>Where did you hear about us?</span> </td>
					<td> : <ol><input type="checkbox" value="Friend/Colleague" name="Where did you hear about us?[]">Friend/Colleague</ol>
					     <ol><input type="checkbox" value="Google" name="Where did you hear about us?[]">Google</ol>
					     <ol><input type="checkbox" value="Blog post" name="Where did you hear about us?[]">Blog post</ol>
						 <ol><input type="checkbox" value="News Article" name="Where did you hear about us?[]">News Article</ol>

						 <span> <?php echo $hErr?> </span>
				    </td>
				</tr>
			
				<tr>
				<td><span>Birth Date</span></td>
				<td>
				<select> 
				<option>Day</option>
				<?php
				for($i=1; $i<31; $i++)
					echo"<option>$i</option>"
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
					echo"<option>$j</option>"
				?>
				</select>
				</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" value="submit "></td>
				</tr>

			</table>


		</form>
	</body>
</html>