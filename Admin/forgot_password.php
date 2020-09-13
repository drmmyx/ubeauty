<!DOCTYPE html> 
<html> 
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
	<title>Forgot Password Admin</title> 
	<link rel="stylesheet" type="text/css" href="r1form.css">
</head> 
<body> 
<div class="r1form"> 
	<div class="r1form r1form-wrapper"> 
		<div class="r1form-box">
			<div class="r1form-box-inner">
				<form method="post"> 
					<p>Forgot Password</p>
				
					<div class="r1form-group">
						<label>Email</label> 
						<input type="email" name="email" class="r1form-input" required>
					</div>

					<div class="r1form-group">
						<label>Password</label> 
						<input type="password" name="password" class="r1form-input" required>
					</div>
				
					<button type="submit" class="r1form-btn" name="update">Update</button>
					
					<div class="text-foot">
						Don't have an account? <a href="createaccount.php">Register</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>