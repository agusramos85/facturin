<html>
	<head>
		<?php echo link_tag('/css/home.css'); ?>
		<title>Login</title>
	</head>
	<body>
		<div class="login-form-container">
			<h2>
				Login
			</h2>
			<form method="POST" action="admin/login">
				Username: <input type="text" name="username"><br>
				Password: <input type="password" name="password"><br>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>