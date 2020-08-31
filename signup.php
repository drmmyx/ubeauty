<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>SignUp</title> 
<link href="signup.css" rel="stylesheet" type="text/css" /> 
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

<style> 
#msg
{
	visibility:hidden;
	min-width:250px;
	background-color:lavender;
	color:#000;
	text-align:center;
	border-radius:2px;
	padding:16px;
	position:fixed;
	z-index:1;
	right:30%;
	top:30px;
	font-size:17px;
	margin-right:30px;
}
#msg.show
{
	visibility:visible;
	-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;
	animation:fadein 0.5s, fadeout 0.5s 2.5s;
}
@-webkit-keyframes fadein
{
	from {top: 0; opacity:0;}
	to{top:30px; opacity:1;}
}
@keyframes fadein
{
	from {top: 0; opacity:0;}
	to{top:30px; opacity:1;}
}
@-webkit-keyframes fadeout
{
	from {top: 30px; opacity:1;}
	to{top:0; opacity:0;}
}
@keyframes fadeout
{
	from {top: 30px; opacity:1;}
	to{top:0; opacity:0;}
}
</style>
</head> 

<body> 
<div class="signup"> 
	<form> 
	<h2 style="color:#fff;">Sign Up</h2> 
	<input type="text" name="username" placeholder="Full name"><br><br>
	<input type="email" placeholder="Email Address"><br><br>
	<input type="password" name="pass" placeholder="Password"><br><br>
	<input type="password" name="pass" placeholder="Confirm Password"><br><br>
	
	<input type="button" value="Sign up" onclick="myFunction()"><br><br>
		<div id="msg">Congratulations You Sign Up 
		Successfully!!</div>
		
		<script>
	function myFunction()
	{
		var x = document.getElementById("msg");
		x.className="show";
		setTimeout(function(){x.className=x.className.replace("show","");},3000);
	}
	</script>
		Already have account?<a href="login.php" style="text-decoration:underline;font-family:Bradley Hand ITC;font-weight:bold;">&nbsp;Log In</a>
	</form>
</div>
</body>
</html>