<?php
session_start(); //Start Session 

//if session exit, user nither need to signin nor need to signup 
if (isset($_SESSION['login_id'])) {
	if (isset($_SESSION['pageStore'])) {
		$pageStore = $_SESSION['pageStore'];
		header("location: $pageStore"); //Redirecting to profile page
	}
}

//Register process start, if user press the signup button 
if (isset($_POST['signUp'])) {
	if (empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['newPassword'])) {
		echo "Please fill up all the required field.";
	} else {
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];
		$password = $_POST['newPassword'];
		$hash = password_hash($password, PASSWORD_DEFAULT);

		//Make a connection with a MySQL server 
		include('connection.php');

		$sQuery = "SELECT id from adm where email=? LIMIT 1";
		$iQuery = "INSERT into adm(fullName, email, password) VALUES(?, ?, ?)";

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
				echo "Register successfully, Please login with your login details";
			}
		} else {
			echo "Someone already register with this ($email) email address";
		}
		$stmt->close();
		$conn->close(); //Closing database connection
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
	<title>Register Admin</title>
	<link rel="stylesheet" type="text/css" href="r1form.css">
</head>

<body>
	<div class="r1form">
		<div class="r1form r1form-wrapper">
			<div class="r1form-box">
				<div class="r1form-box-inner">
					<form method="post" oninput="validatePassword()">
						<p>Let's create your account</p>

						<div class="r1form-group">
							<label>Full Name</label>
							<input type="text" name="fullName" class="r1form-input" required>
						</div>

						<div class="r1form-group">
							<label>Email</label>
							<input type="email" name="email" class="r1form-input" required>
						</div>

						<div class="r1form-group">
							<label>Password</label>
							<input type="password" name="newPassword" id="newPass" class="r1form-input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
						</div>

						<div class="r1from-group">
							<label>Conform password</label>
							<input type="password" name="conformPassword" id="conformPass" class="r1form-input" required>
						</div>

						<button class="r1form-btn" name="signUp">Sign Up</button>

						<div class="text-foot">
							Already have an account? <a href="login.php">Login</a></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function validatePassword() {
			if (newPass.value != conformPass.value) {
				conformPass.setCustomValidaty('Password do not match.');
			} else {
				conformPass.setCustomValidaty('');
			}
		}

		var myInput = document.getElementById("newPass");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
			document.getElementById("message").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}


		window.onload = function() {
			document.getElementById("newPass").onchange = validatePassword;
			document.getElementById("conformPass").onchange = validatePassword;
		}

		function validatePassword() {
			var pass1 = document.getElementById("newPass").value;
			var pass2 = document.getElementById("conformPass").value;
			if (pass1 != pass2)
				document.getElementById("conformPass").setCustomValidity("Password do not match");
			else
				document.getElementById("conformPass").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
</body>

</html>