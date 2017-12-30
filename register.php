<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}

?>


<!DOCTYPE html>
<html>
<head>

	<title>Welcome to Geet!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!--register.js-->
	<script src="assets/js/register.js"></script>

</head>
<body>

	<?php
		if(isset($_POST['registerButton'])) {

			echo '<script>
					$(document).ready(function() {
						$("#loginForm").hide();
						$("#registerForm").show();
					});
				</script>';
		}
		else {
			echo '<script>
					$(document).ready(function() {
						$("#loginForm").show();
						$("#registerForm").hide();
					});
				</script>';
		}
	?>
	
	<div id="background">

		<div id="loginContainer">
			<div id="inputContainer">
				
				<form id="loginForm" action="register.php" method="post">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed);?>

						<label for="loginUsername">Username</label>
						<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. Manu" value="<?php getInputValue('loginUsername') ?>"required>
					</p>
					
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" type="password" name="loginPassword" placeholder="your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN
					</button>
					
					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here.</span>						
					</div>
				</form>



				<form id="registerForm" action="register.php" method="post">
					<h2>Create your free account</h2>
					<!--username-->
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters);?>
						<?php echo $account->getError(Constants::$usernameTaken);?>

						<label for="username">Username</label>
						<input id="username" type="text" name="username" placeholder="e.g. manuarora"  value="<?php getInputValue('username') ?>" required>
					</p>

					<!--Firstname-->
					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters);?>

						<label for="firstName">Firstname</label>
						<input id="firstName" type="text" name="firstName" placeholder="e.g. Manu" value="<?php getInputValue('firstName') ?>" required>
					</p>
					<!-- lastname -->
					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters);?>

						<label for="lastName">Lastname</label>
						<input id="lastName" type="text" name="lastName" placeholder="e.g. Arora" value="<?php getInputValue('lastName') ?>" required>
					</p>
					<!-- email -->
					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch);?>
						<?php echo $account->getError(Constants::$emailInvalid);?>
						<?php echo $account->getError(Constants::$emailTaken);?>

						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="e.g. arora@gmail.com" value="<?php getInputValue('email') ?>" required>
					</p>
					<!-- confirm email -->
					<p>
						<label for="email2">Comfirm email</label>
						<input id="email2" type="email" name="email2" placeholder="e.g. arora@gmail.com" value="<?php getInputValue('email2') ?>" required>
					</p>


					<!-- password -->
					<p>	
						<?php echo $account->getError(Constants::$passwordsDoNotMatch);?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric);?>
						<?php echo $account->getError(Constants::$passwordCharacters);?>
						<label for="password">Password</label>
						<input id="password" type="password" name="password" 
						placeholder="your password" required>
					</p>



					<!-- confirm password -->
					<p>
						<label for="password2">Confirm password</label>
						<input id="password2" type="password" name="password2"
						placeholder="your password" required>
					</p>

					<button type="submit" name="registerButton">Signup
					</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an Account? Login here.</span>						
					</div>
					
				</form>
			</div>

			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>Listen to loads of music for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlists</li>
					<li>Follow artists to keep up to date</li>
				</ul>	
			</div>
		</div>
	</div>
</body>
</html>