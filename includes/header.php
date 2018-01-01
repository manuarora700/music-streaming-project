<?php
	include("includes/config.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Album.php");
	include("includes/classes/Song.php");

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
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="assets/js/script.js"></script>
	<title>Welcome to Geet! Your one stop destination for music</title>
</head>
<body>

	<div id="mainContainer">

		<div id="topContainer">
			
			<?php include("includes/navBarContainer.php"); ?>	

			<div id="mainViewContainer">
				<div id="mainContent">