<?php
include("../../config.php");


if(!isset($_POST['username'])) {
	echo "ERROR: Could not set username";
	exit();

}

if(!isset($_POST['oldPassword']) || !isset($_POST['newPassword1'] || !isset($_POST['newPassword2']))) {
	echo "Not all passwords have been set";
	exit();
}

if(($_POST['oldPassword']) == "" || ($_POST['newPassword1']=="" || ($_POST['newPassword2']) == "")) {
	echo "Please fill in all fields";
	exit();
}

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword1 = $_POST['newPassword1'];
$newPassword2 = $_POST['newPassword2'];

$oldMd5 = md5($oldPassword);

$passwordCheck = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password = '$oldMd5'");

if(mysqli_num_rows($passwordCheck) != 1) {
	echo "Password is incorrect";
	exit();
}
?>