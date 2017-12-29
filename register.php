<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Geet!</title>
</head>
<body>

	<div id="inputContainer">
		
		<form id="loginForm" action="register.php" method="post">
			<h2>Login to your account</h2>
			<p>
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
				<label for="username">Username</label>
				<input id="username" type="text" name="username" placeholder="e.g. manuarora" required>
			</p>

			<!--Firstname-->
			<p>
				<label for="firstName">Firstname</label>
				<input id="firstName" type="text" name="firstName" placeholder="e.g. Manu" required>
			</p>
			<!-- lastname -->
			<p>
				<label for="lastName">Lastname</label>
				<input id="lastName" type="lastName" name="email" placeholder="e.g. Arora" required>
			</p>
			<!-- email -->
			<p>
				<label for="email">Email</label>
				<input id="email" type="email" name="email" placeholder="e.g. arora@gmail.com" required>
			</p>
			<!-- confirm email -->
			<p>
				<label for="email2">Comfirm email</label>
				<input id="email2" type="email" name="email2" placeholder="e.g. arora@gmail.com" required>
			</p>


			<!-- password -->
			<p>	
				<label for="password">Password</label>
				<input id="password" type="password" name="password" 
				placeholder="your password"required>
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

</body>
</html>