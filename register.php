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
				<input id="loginPassword" type="password" name="loginPassword" required>
			</p>

			<button type="submit" name="loginButton">LOG IN
			</button>
			
		</form>
	</div>

</body>
</html>