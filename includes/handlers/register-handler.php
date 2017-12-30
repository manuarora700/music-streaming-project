<?php

function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText); //security
	return $inputText; //remove spaces
}

function sanitizeFormUsername($inputText) {

	$inputText = strip_tags($inputText); //security
	$inputText = str_replace(" ", "", $inputText);
	return $inputText; //remove spaces
}

function sanitizeFormString($inputText) {
	$inputText = strip_tags($inputText); //security
	$inputText = str_replace(" ", "", $inputText); //remove spaces
	$inputText = ucfirst(strtolower($inputText));
	return $inputText; //remove spaces
}



if(isset($_POST['registerButton'])) {
	//login buttonw as pressed
	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}


}

?>


