<?php
include('session.php');
//if session exit, user nither need to signin nor need to submitaddbtn 
// if (isset($_SESSION['login_id'])) {
// 	if (isset($_SESSION['pageStore'])) {
// 		$pageStore = $_SESSION['pageStore'];
// 		header("location: $pageStore"); //Redirecting to profile page
// 	}
// }

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
				echo '<script>alert("Register successfully, Please login with your login details")</script>';
			}
		} else {
			echo '<script>alert("Someone already register with this (' . $email . ') email address")</script>';
		}
		$stmt->close();
		$conn->close(); //Closing database connection
	}
}
?>
<!DOCTYPE html>
<html>
<title>UBEAUTY Admin</title>
<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Css/admincss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	html,
	body,
	h1,
	h2,
	h3,
	h4,
	h5 {
		font-family: "Raleway", sans-serif
	}
</style>

<body class="fd-light-grey">
	<!-- Top container -->
	<div class="fd-bar fd-top fd-pink fd-large" style="z-index:4">
		<span class="fd-bar-item fd-left"><img src="image/logo1.jpeg" style="width:29px"> UBEAUTY</span>
	</div>

	<!-- Sidebar/menu -->
	<?php include('slidebar.php'); ?>

	<!-- !PAGE CONTENT! -->
	<div class="fd-main" style="margin-left:300px;margin-top:43px;">

		<style>
			.collapse-panel {
				display: block;
				vertical-align: top;
				height: auto !important;
			}

			.collapse-panel a {
				font-family: "Lucida Console", Monaco, monospace;
				font-size: 16pt;
				font-weight: bolder;
				text-decoration: none;
			}

			.collapse-panel-content {
				display: none;
				height: auto;
			}

			.show {
				display: none;
			}

			.hide:target+.show {
				display: inline;
			}

			.hide:target {
				display: none;
			}

			.hide:target~.collapse-panel-content {
				display: inline;
			}
		</style>
		<?php
		//submit 
		// if (isset($_POST["submiteditbtn"])) {

		// 	// $pimage = $_POST["image"];
		// 	$fullName = $_POST["fullName"];
		// 	$email = $_POST["email"];
		// 	$changepass = $_POST["changepass"];

		// 	mysqli_query($conn, "UPDATE adm SET fullName = '$fullName', email = '$email',  `password` = '$changepass' where id = '$id'");

		// 	//header("location:productlist.php"); //redirect user back to productlist.php
		// }
		?>
		<div>
			<div>
				<div class="collapse-panel">
					<br><br>
					<a href="#hide1" class="hide" id="hide1" style="font-size:25px; padding-top:5px;">+</a>
					<a href="#show1" class="show" id="show1" style="font-size:25px; padding-top:5px;">-</a>
					<span style="font-size:25px;">Edit Profile</span>
					<div class="collapse-panel-content">
						<div>
							<div>
								<div style="padding:10px;">
									<form name="menu" method="post" action="">
										<fieldset style="padding:2%">
											<label>Username:
												<input type="text" name="fullName" required style="width:100%; height:36px; border-radius:4px;" value="<?php echo $row['fullName']; ?>">
											</label>
											<!--<br><br><label>Phone number: <br></label>
									  <input type="text" name="phonenumber" required placeholder="Enter your phone number" style="width:100%; height:36px; border-radius:4px;">-->
											<br><br><label>Email Address: <br></label>
											<input type="email" name="email" required style="width:100%;height:36px; border-radius:4px;" value="<?php echo $row['email']; ?>">
											<!--<br><br><label>Gender: <br></label>
									  <select name="category" style="width:100%;border-radius:5px;height:30px;" required>
										<option value="1">Male</option>
										<option value="2">Female</option>
									  </select>-->
											<br><br><label>Change Password: <br></label>
											<input type="password" name="changepass" required style="width:100%; height:36px; border-radius:4px;">
											<br><br><input type="submit" name="submiteditbtn" value="Submit" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">

										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div>
			<div>
				<div class="collapse-panel">
					<a href="#hide2" class="hide" id="hide2" style="font-size:25px;">+</a>
					<a href="#show2" class="show" id="show2" style="font-size:25px;">-</a>
					<span style="font-size:25px;">Add Admin</span>
					<div class="collapse-panel-content">
						<div>
							<div>
								<div style="padding:10px;">
									<form name="menu" method="post" action="" oninput="validatePassword()">
										<fieldset style="padding:2%">
											<label>Username:
												<input type="text" name="fullName" required placeholder="Enter your username" style="width:100%; height:36px; border-radius:4px;">
											</label>
											<br><br><label>Email Address: <br></label>
											<input type="text" name="email" required placeholder="Enter your email address" style="width:100%;height:36px; border-radius:4px;">
											<br><br><label>Password: <br></label>
											<input type="password" name="newPassword" id="newPass" placeholder="Enter your password" style="width:100%; height:36px; border-radius:4px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
											<br><br><label>Conform Password: <br></label>
											<input type="password" name="conformPassword" id="conformPass" placeholder="Enter again your password" style="width:100%; height:36px; border-radius:4px;">

											<br><br><input type="submit" name="submitaddbtn" value="Submit" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">

										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<!-- Footer -->
		<footer class="fd-container fd-padding-16 fd-light-grey">
			<p>Copyright © UBEAUTY 2020. Developed by <a href="../index.php" target="_blank">UBEAUTY </a></p>
		</footer>

		<!-- End page content -->
	</div>

	<script>
		// Get the Sidebar
		var mySidebar = document.getElementById("mySidebar");
	</script>

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
<?php

?>