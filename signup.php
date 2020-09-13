<?php
session_start();
include('dbconfig.php');


//if session exit, user nither need to signin nor need to submitaddbtn 
if (isset($_SESSION['login_id'])) {
	if (isset($_SESSION['pageStore'])) {
		$pageStore = $_SESSION['pageStore'];
		header("location: $pageStore"); //Redirecting to profile page
	}
}

//Register process start, if user press the submitaddbtn button 
if (isset($_POST['submitaddbtn'])) {
	if (empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['newPassword'])) {
		echo "Please fill up all the required field.";
	} else {
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$password = $_POST['newPassword'];
		$hash = password_hash($password, PASSWORD_DEFAULT);

		//Make a connection with a MySQL server 
		// include('connection.php');

		$sQuery = "SELECT id from user where email=? LIMIT 1";
		$iQuery = "INSERT into user(fullName, email, password) VALUES(?, ?, ?)";

		//To protect from MySQL injection 
		$stmt = $conn->prepare($sQuery);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($id);
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		if ($rnum == 0) {
			//if true, insert new data 
			$stmt->close();

			$stmt = $conn->prepare($iQuery);
			$stmt->bind_param("sss", $fullName, $email, $hash);
			if ($stmt->execute()) {
				echo '<script>alert("Register successfully, Please login with your login details")</script>';
			}
		} else {
			echo '<script>alert("Someone already register with this (' . $email . ') email address")</script>';
		}
		$stmt->close();
		// $conn->close(); //Closing database connection
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<!--===============================================================================================-->
	<style>
		.forgot-pass a:hover {
			color: black;
		}
	</style>

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('login/images/3.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Sign Up
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post">

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="fullName"" placeholder=" User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter email address">
						<input class="input100" type="text" name="email" placeholder="Email Address">
						<span class="focus-input100" data-placeholder="&#xe818;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="newPassword" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="conformPassword" placeholder="Comfirm Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button name="submitaddbtn" class="login100-form-btn">
							Sign Up
						</button>
					</div>

				</form>

				<div class="signup-link" style="text-align:center;">
					Already got an account? <a href="login.php">Login Here</a>
				</div>
				<div class="homepage-link" style="text-align:center;">
					<a style="color:black;font-size:25px;text-decoration:underline;font-family:Brush Script MT;" href="index.php">Back to homepage</a>
				</div>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>

</html>