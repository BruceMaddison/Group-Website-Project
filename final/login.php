<?php 
	//All php on this page written/repurposed by Christian Thorpe
	
	session_start();
	error_reporting(E_ALL);
	
	$_SESSION['loggedIn'] = false;
 ?>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>Login Page</title>
		<link href="mainstyles.css" rel="stylesheet">
	</head>
	<body>
		<div class='container'>
			<h1>Login Page</h1>
			<form id="login" name="login" method="post" action="secure.php">
				<label for="username">Username:</label>
				<input type="text" name="formUsername" id="formUsername">
				<br>
				<label for="password">Password:</label>
				<input type="password" name="formPassword" id="formPassword">
				<br>
				<input type="submit" name="submit" value="Login">
			</form>
		</div>
	</body>
</html>