<?php include 'dbconfig.php';?>

<?php

$username =  $_POST['loginname'];
$password =  $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count == 1){
	header('Location: index.php');
	
	//session 
	
	global $islogin;
	$islogin = 'Yes';

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "Invalid Login Credentials";
}

?>