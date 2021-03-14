<html>
<head>
 <title>Educare</title>
<style>
body {
  background-image: url("k.jpg");
  
}
.right {
  position: absolute;
  right: 0px;
  width: 200px;
    top: 50px;
}


h1 {
  color: darkblue;
  text-align: center;
  
} 
h3 {
font-size: 20px;
  text-align: center;
  
} 
h2{ color: darkpink;
text-align: center;
border: 1.5px solid white;
  padding: 25px 50px 75px 100px;
   background-color: white;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
}
h4 {
  position: absolute;
  left: 340px;
  top: 280px;
  
}

</style>
 
</head>
    <body>
	
	<h2><i>Welcom to Educare</i> <br></h2>
	<div class="right">
	<b><a href="http://localhost/DEMO/main.php">Log out</a></b> </div>
	
	
<i><ol><b> You can create your own course here</b></ol></i>
<i><ol><b>Share your knowledge & help learners </b></ol></i>
<i><u><h1>Create your own course </h1></u></i>

<form action="/action_page.php">
  <h4><label for="myfile">Select your file:</label><br>
  <input type="file" id="myfile" name="myfile"><br><br>
  <input type="submit"value="Upload"></h4>
</form>
    </body>
</html>