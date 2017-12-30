<?php
 

if(isset($_POST['loginButton'])) {
	//login buttonw as pressed
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	//Login function

	$result = $account->login($username, $password);
	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("location: index.php");
	}
}

?>