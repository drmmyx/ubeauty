<!DOCTYPE html>
<html>
<head><title>Forget Password</title></head>
<link rel="shortcut icon" type="Images/jpeg" href="Image/logo1.jpeg">
<script>
function send()
{
	alert("Please check your email now.");
}
function verify()
{
	alert("We will send your old password to your email.");
}
</script>
<style>
#loading{position: fixed;width: 100%;height: 100vh;background: white url('image/loading.gif') no-repeat center;z-index:99999;}
#login-title{height:40px; background-color:rgba(195,228,249); border-top-radius: 8px;}
#password_form,#verify_form{padding:10px; text-align:center;}
#password_form input[type=email]{width:350px; height: 45px; border:1px #DDD solid; border-radius:5px; padding-bottom:5px; padding-top:5px; padding-right:10px; padding-left:40px;}
input[type=email]{background-image:url("image/email.png"); background-repeat: no-repeat; background-position:10px 10px;}
#password_form input[type=button]{background-color:#191244; color:white; font-weight:bold; width:400px; height: 25; padding:10px; border:none;}
#password_form input[type=button]:hover{background-color:#2C61B7; cursor:pointer;}
#verify_form input[type=text]{width:350px; height: 45px; border:1px #DDD solid; border-radius:5px; padding-bottom:5px; padding-top:5px;text-align:center;}
#verify_form input[type=button]{background-color:red; color:white; font-weight:bold; width:350px; height: 25; padding:10px; border:none;}
#verify_form input[type=button]:hover{opacity:0.6; cursor:pointer;}
</style>
<body onload="setTimeout(myFunction, 2000);">
<div id="loading"></div>
<a href="login.php"><img src="image/left.png"  title="Back to front page" style="width:50px;height:50px"></a>
<div style="width:500px; height:200px; padding:0; margin:auto;  background-color: rgba(255, 86, 55, 0.2);">

	<div id="login-title" style="border-radius:6px;">
		<h4 style="color:#191244; font-family:arial font; margin:0; padding:12px 40px;">Reset Password</h4>
	</div>
	
	<div id="password_form">
		<form name="passwordfrm">
			<p><input type="email" name="admin_email" placeholder="Your email address"></p>
			<p><input type="button" name="sendbtn" value="Send" title="We will send a verify code to your email address" onclick="send()"></p>
		</form>
	</div><hr>
</div>
<div style="width:500px; height:200px; padding:0; margin:auto;  background-color: rgba(255, 86, 55, 0.2);">
	<div id="verify_form">
		<form name="verfyfrm">
			<p><input type="text" name="admin_verify" placeholder="The number of send to your email" title="Please complete the thing above first."></p>
			<p><input type="button" name="verifybtn" value="Verify" title="Verify the number" onclick="verify()"></p>
		</form>
	</div>
</div>

<script>

	var preloader = document.getElementById('loading');
	
	function myFunction(){
		preloader.style.display = 'none'
	}
	
</script>

</body>

</html>