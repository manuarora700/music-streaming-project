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
	
	<div id="nowPlayingBarContainer">
		
		<div id="nowPlayingBar">
			
			<div id="nowPlayingLeft">
				

			</div>

			<div id="nowPlayingCenter">
				
				<div class="content playerControls">
					
					<div class="buttons">
						
						<button class="controlButton shuffle" title="shuffle button">
							<img src="assets/images/icons/shuffle.png" alt="shuffle">
						</button>

						<button class="controlButton previous" title="previous button">
							<img src="assets/images/icons/previous.png" alt="previous">
						</button>

						<button class="controlButton play" title="play button">
							<img src="assets/images/icons/play.png" alt="play">
						</button>
						<button class="controlButton pause" title="pause button" style="display: none;">
							<img src="assets/images/icons/pause.png" alt="pause">
						</button>

						<button class="controlButton next" title="next button">
							<img src="assets/images/icons/next.png" alt="next">
						</button>

						<button class="controlButton repeat" title="repeat button">
							<img src="assets/images/icons/repeat.png" alt="repeat">
						</button>

					</div>

					<div class="playbackBar">
						<span class="progressTime current">0.00</span>
						<div class="progressBar"></div>
						<span class="progressTime remaining">0.00</span>
					</div>

				</div>

			</div>

			<div id="nowPlayingRight">
				

			</div>

		</div>

	</div>

</body>
</html>