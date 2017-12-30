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
</head>
<body>

	<div id="background">

		<div id="loginContainer">
			<div id="inputContainer">
				
				<form id="loginForm" action="register.php" method="post">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed);?>

						<label for="loginUsername">Username</label>
						<input id="loginUsername" type="text" name="loginUsername" placeholder="e.g. Manu" required>
					</p>
					
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" type="password" name="loginPassword" placeholder="your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN
					</button>
					
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
						<input id="lastName" type="lastName" name="lastName" placeholder="e.g. Arora" value="<?php getInputValue('lastName') ?>" required>
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
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>