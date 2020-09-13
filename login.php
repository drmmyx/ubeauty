<?php
session_start();
include('dbconfig.php');
//if session exit, user neither need to signin nor need to signup
// if (isset($_SESSION['login_id'])) {
// 	if (isset($_SESSION['pageStore'])) {
// 		$pageStore = $_SESSION['pageStore'];
// 		header("location: $pageStore"); //Redirecting to profile page
// 	}
// }

//Login process start, if user press the signin button 
if (isset($_POST['signIn'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
		echo "Username and password should not empty";
	} else {
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Make a connection with MySQL server 
		// include('connection.php');

		$sQuery = "SELECT id, password from user where email=? LIMIT 1";

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
					$pageStore = "index.php";
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
	<!-- &#xe82a; -->
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login/images/3.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate="Enter email">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe818;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="forgot-pass" style="text-align:right; padding-right:10px;">
						<a href="forgotpassword.php">Forgot Password?</a>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<a href="index.php">
							<button class="login100-form-btn" name="signIn">
								Login
							</button>
						</a>
					</div>

				</form>

				<div class="signup-link" style="text-align:center;">
					Don't have an account? <a href="signup.php">Signup Here</a>
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

<?php
// if (isset($_POST['login_btn'])) {
// 	// session_start();
// 	$username = ($_POST['username']);
// 	$email = ($_POST['email']);
// 	$password = ($_POST['password']);

// 	$sql = "SELECT * FROM user WHERE user_Email = '$email' and user_Name = '$username' and User_password = '$password'";

// 	$stmt = $conn->prepare('SELECT * FROM user WHERE user_Email = ? LIMIT 1');
// 	$stmt->bind_param('s', $email); // 's' specifies the variable type => 'string'
// 	$stmt->execute();
// 	$stmt->bind_result($id, $hash);
// 	$stmt->store_result();

// 	$result = $stmt->get_result();
// 	if(mysqli_num_rows($result) == 1) {
// 		while ($row = $result->fetch_assoc()) {
// 			// Do something with $row
// 			$_SESSION['user_ID'] = $row;
// 			header("location:index.php");
// 		}
// 	}else {
?>
<!-- <script>
					alert("Wrong Password / Invalid Account");
				</script>
		<?php
		//die(header('refresh: 3; url=login.php') . 'Invalid Credentials, wait 3 seconds or just click <a href="index.php">HERE</a> to check again.');



		?>