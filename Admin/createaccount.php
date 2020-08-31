<!DOCTYPE html>
<html>
<head><title>Account</title>
<script>
function create()
{
	alert("Your account is successfully set.");
}
</script>
<style type="text/css">
body{font-family: "Berlin Sans FB", Georgia, Serif;}
#loading{position: fixed;width: 99%;height: 100vh;background: white url('image/loading.gif') no-repeat center;z-index:99999;}
fieldset{width:600px; border:0.5px solid #21759b; box-shadow:3px 3px 10px pink; background-color:rgba(226, 46, 93, 0.2);}
label{width:150px; text-align:right; font-size:13px; margin-right:10px;}
input[type=text],input[type=password]{border:1px solid grey; height:20px; padding:5px 15px;width:250px;}
input[type=email]{border:1px solid grey; height:20px; padding:5px 15px;width:250px;}
input[type=email]:hover,[type=text]:hover,[type=password]:hover{border-color:blue;}
input[type=submit]{background-color: rgba(0, 154, 255, 0.3); border-radius: 7px;border-color: rgba(65, 109, 255, 0.2);float: right;color: black;}
input[type=submit]:hover{opacity:0.6;}	
</style>
</head>
<body onload="setTimeout(myFunction, 2000);">
<div id="loading"></div>
<a href="login.php"><img src="image/left.png"  title="Back to front page" style="width:50px;height:50px"></a>
<div style="width:600px; padding:0; margin:auto; border-radius:10px;">
	<p style="font-size:1.5em;">Create your admin account below <img src="image/below arrow.png" style="width:50px;height:30px"></p>
	<form name="admin_account">
		<fieldset>
			<label>Admin ID: <br></label>
			<input type="text" name="admin-id" style="border-radius:4px;" placeholder="Enter your ID..." >
			<br><br><label>Contact Number: <br></label>
			<div>
				<input type="text" name="admin_contact_num" style="border-radius:4px;" placeholder="Enter your contact...">
			</div>
			<br><label style="clear:left;">Email Address: <br></label>
			<input type="email" name="admin_email" style="border-radius:4px;" placeholder="Enter your email..." />
			<br><br><label>Password: <br></label>
			<input type="password" name="admin_password" style="border-radius:4px;" placeholder="Enter your password..." />
			<br><br><label>Confirm Password: <br></label>
			<input type="password" name="admin_password" style="border-radius:4px;" placeholder="Confirm password..." />
			<br><br><input type="submit" name="submitbtn" value="Submit" onclick="create()">
		</fieldset>		
	</form>
</div>

<script>

	var preloader = document.getElementById('loading');
	
	function myFunction(){
		preloader.style.display = 'none'
	}
	
</script>

</body>
</html>