<html>
	<head>
    <title>log in </title>
  </head>
  <style>
  h1{
	  text-align: center;
  }
    h2 {
  position: absolute;
  left: 450px;
  top: 100px;
  
  border: 10px black;
  padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: Wheat;
  background-clip: padding-box;
}

 

  
  
  </style>
	<body>
	<?php
	$codeErr="";
 $code= "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

  	     if (empty($_POST["code"]))
      {
  		$codeErr = "password is required";
  	   }
     else if(strlen($_POST["code"])<6)
  	 {
  	  $codeErr="password must be Atleast 6 charecter";
  	 }
  	 else
     {
  		 $code=$_POST["code"];
		 header("location: amain.php");
  	 }
	 
   }
	?>
		
<h1><i>Enter your code for Admin access</i></h1>
Log in to your Accout<br>
		<h2><form action="" method="post">
			<table>
				
				<tr>
					<td><input type="text" placeholder="Code" name="code" value="<?php echo $code?>"<span><?php echo $codeErr
					?></span></td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" value="Enter"></td>
				</tr>
				

			</table>


		</form></h2>

	</body>
</html>