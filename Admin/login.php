<?php
session_start(); //Starting session_start

//if session exit, user neither need to signin nor need to signup
if (isset($_SESSION['login_id'])) {
	if (isset($_SESSION['pageStore'])) {
		$pageStore = $_SESSION['pageStore'];
		header("location: $pageStore"); //Redirecting to profile page
	}
}

//Login process start, if user press the signin button 
if (isset($_POST['signIn'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
		echo "Username and password should not empty";
	} else {
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Make a connection with MySQL server 
		include('connection.php');

		$sQuery = "SELECT id, password from adm where email=? LIMIT 1";

		//To protect from MySQL injection for a security purpose 
		$stmt = $conn->prepare($sQuery);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($id, $hash);
		$stmt->store_result();

		if ($stmt->fetch()) {
			echo "<br />hash" . $hash;
			echo "<br />password hash" . password_hash($password, PASSWORD_DEFAULT);
			echo "<br />password" . $password;
			echo "<br />result" . password_verify($password, $hash) . "resi;t";
			if (password_verify($password, $hash)) {
				$_SESSION['login_id'] = $id;

				if (isset($_SESSION['pageStore'])) {
					$pageStore = $_SESSION['pageStore'];
				} else {
					$pageStore = "overview.php";
				}
				header("location: $pageStore"); //Redirecting to profile page
				$stmt->close();
				$conn->close();
			} else {
				echo "Invalid Username and Password";
			}
		} else {
			echo "Invalid username and password";
		}
		$stmt->close();
		$conn->close();
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
	<title>Login Admin </title>
	<link rel="stylesheet" type="text/css" href="r1form.css">
</head>

<body>
	<div class="r1form">
		<div class="r1form r1form-wrapper">
			<div class="r1form-box">
				<div class="r1form-box-inner">
					<form method="post">
						<p>Admin Login</p>

						<div class="r1form-group">
							<label>Email</label>
							<input type="email" name="email" class="r1form-input" required>
						</div>

						<div class="r1form-group">
							<label>Password</label>
							<input type="password" name="password" class="r1form-input" required>

							<div class="forgot-pass" style="text-align:right; padding-right:5px;">
								<a href="forgot_password.php">Forgot Password?</a>
							</div>

						</div>



						<button style="cursor:pointer;" type="submit" class="r1form-btn" name="signIn">Sign In</button>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>