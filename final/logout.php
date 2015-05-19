<?php session_start();
	$username = $_SESSION['username'];
	unset($_SESSION['username']);
	unset($_SESSION['msg']);
	session_destroy();
?>
<html>
	<head>
		<title>Logout</title>
		<link href="mainstyles.css" rel="stylesheet">
	</head>

	<body>
		<div class='container'>
			<h1>Logged out</h1>
			<p>Goodbye <?php echo $username; ?>.</p>
			<nav>
				<a href="index.php">Home</a>
			</nav>
		</body>
	</div>
</html>
