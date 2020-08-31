<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="Images/jpeg" href="Image/logo1.jpeg">
<style>
#loading{position: fixed;width: 100%;height: 100vh;background: white url('image/loading.gif') no-repeat center;z-index:99999;}
#login-title{height:40px; background-color:rgba(195,228,249); background-position: 7px 7px; background-size:24px 24px; border-radius: 10px;}
#login-form{padding:10px; text-align:center;}
#login-form input[type=text],[type=password]{font-size:15px; width:300px; height: 25px; border:1px #DDD solid; border-radius:5px; padding-bottom:20px; padding-top:5px; padding-right:23px; padding-left:23px;}
#login-form input[type=text]:hover,[type=password]:hover{border-color:blue;}
#login-form input[type=button]{background-color:#191244; color:white; font-weight:bold; width:340px; padding:10px; border:none;}
#login-form input[type=button]:hover{background-color:#2C61B7; cursor:pointer;}
.login-form{padding:10px; text-align:center;}
.login-form p a{text-decoration:none; font-family:arial narrow; font-size:0.9em; text-align:center;}
.login-form p a:hover{color:red; font-style:italic;}
.login-form input[type=button]{background-color:red; color:white; font-weight:bold; width:340px; padding:10px; border:none;}
.login-form input[type=button]:hover{background-color:#b72c2c; cursor:pointer;}
</style>
<body onload="setTimeout(myFunction, 2000);">
<div id="loading"></div>
<a href="../index.php"><img src="Image/left.png"  title="Back to front page" style="width:50px;height:50px"></a>
<p style="font-size:1.5em; text-align:center; font-family:Berlin Sans FB;">Log in your admin account below <img src="image/below arrow.png" style="width:50px;height:30px"></p>
<div style="width:400px; height:500px; padding:0; margin:auto; border-radius:14px; background-color: rgba(255, 86, 115, 0.2)">
	
	<div id="login-title">
		<h4 style="color:#191244; font-family:arial font; margin:0; padding:12px 148px;">Admin Login</h4>
	</div>
	<div id="login-form">
		<form name="loginfrm">
			<p><input type="text" name="admin_id" placeholder="Admin ID" ></p>
			<p><input type="password" name="admin_password" placeholder="Your ID password" ></p>
			<p><input type="checkbox" checked="checked" name="remember"> <span style="padding-right:190px;">Remember me</span></p>

			<a href="overview.php"><input type="button" name="loginbtn" value="LOGIN"></a>
			
		</form>
	</div>
	<div class="login-form">
		<a href="createaccount.php"><input type="button" name="create_account" value="Create a new account"></a>
		<p><a href="forgot_password.php">Forgot your password?</a></p>
	</div>
	
	
</div>

<p style="padding:10px;"><center><span style="color:#b2b2b2;font-family: Raleway,sans-serif;">Developed by UBEAUTY</span></center></p>


<script>

	var preloader = document.getElementById('loading');
	
	function myFunction(){
		preloader.style.display = 'none'
	}
	
</script>

</body>

</html>