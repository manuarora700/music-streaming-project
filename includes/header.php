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
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Welcome to Geet! Your one stop destination for music</title>
</head>
<body>

	<div id="mainContainer">

		<div id="topContainer">
			
			<?php include("includes/navBarContainer.php"); ?>	

			<div id="mainViewContainer">
				<div id="mainContent">