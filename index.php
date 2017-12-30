<?php
	include("includes/config.php");

	// session_destroy(); LOGOUT MANUALLY

	if(isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
	}
	else {
		header("Location: register.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Geet! Your one stop destination for music</title>
</head>
<body>
	This is the index page
</body>
</html>