<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Login</title> 
<link href="login.css" rel="stylesheet" type="text/css" /> 
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head> 

<body> 
	
	<div id ="myOverlay" class="signIn"> 
	<span class="closebtn" onclick="closeForm()" title="Close"> &#215 </span>
	<form action="submit_login.php" method="POST"> 
		<h2 style="color:white">Log In</h2> 
		<input type="text" name="email" placeholder="Email Address" > 
		<input type="text" name="password" placeholder="Password" >
		<br><br> 
		<a href="index.php"><input type="button" value="Log In"></a><br><br>
		<br>
		Don't have an account?<a href="signup.php" style="font-family:Bradley Hand ITC;font-weight:bold;text-decoration:underline;">&nbsp;Sign Up  </a> <br><br>
		<a href="index.php" style="font-family:Haettenschweiler;color:black;border-style:solid;"> *Return to store* </a> 
	</form> 
	</div>
	
<script> 

function closeForm()
{
	document.getElementById("myOverlay").style.display="none";
}
</script>
</body>
</html>	
		