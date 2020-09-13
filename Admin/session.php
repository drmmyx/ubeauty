<?php
// Make a connection with database 
include("connection.php");
ob_start();
session_start(); //Start session 

if (isset($_SESSION['login_id'])) {
	$user_id = $_SESSION['login_id'];
	$sQuery = "SELECT * from adm where id = " . $user_id . " LIMIT 1";
	$result = $conn->query($sQuery);
	$row = $result->fetch_assoc();
	//echo "id: " . $row["id"] . " - Name: " . $row["email"] . " ";
	$session_fullName = $row['fullName'];

	//To protect from MySQL injection 
	// $stmt = $conn->prepare($sQuery);
	// $stmt->bind_param("i", $user_id);
	// $stmt->execute();
	// $stmt->bind_result($fullName);
	// $stmt->store_result();

	// if ($stmt->fetch()) //fetching the content of the row 
	// {
	// 	$session_fullName = $fullName;
	// 	$stmt->close();
	// 	// $conn->close();
	// }
}
