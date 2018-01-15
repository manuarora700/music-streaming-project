<?php
include("../../config.php");
if(!isset($_POST['username'])) {
	echo "ERROR: Could not set username";
	exit();

}


if(isset($_POST['email']) && $_POST['email'] != "") {
	$username = $_POST['username'];
	$email = $_POST['email'];

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Email is invalid";
		exit();
	}

	$emailCheck = mysqli_query($con, "SELECT email FROM users WHERE email = '$email' AND username != '$username'");
	if(mysqli_num_rows($emailCheck) > 0) {
		echo "Email is already in use";
		exit();
	}

	$updateQuery = mysqli_query($con, "UPDATE users SET email = '$email' WHERE username = '$username'");
	echo "Update successful";
}
else {
	echo "You must provide an email";
}

?>