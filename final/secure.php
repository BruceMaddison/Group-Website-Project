<?php
	//All php on this page written/repurposed by Christian Thorpe

	session_start();
	error_reporting(E_ALL);
	
	include("dbconnect.php");
	
	$_SESSION['lastRegeneration'] = 0;
	$_SESSION['username'] = $_REQUEST['formUsername'];
	$_SESSION['password'] = md5($_REQUEST['formPassword']);
?>
<html>
	<head>
		<title>Redirecting</title>
		<link href="mainstyles.css" rel="stylesheet">
	</head>
	<body>
		<div class='container'>
			<h1>Secure Page</h1>
			<p><?php 
				$sql = "SELECT * FROM Members";
				foreach ($dbh->query($sql) as $row){
					if ($_SESSION['username'] == $row[Username] AND $_SESSION['password'] == $row[Password]){
						$_SESSION['loggedIn'] = true;
						header('Refresh: 6; URL=index.php');
						echo "Welcome ".$_SESSION['username'];
						echo "<br>You are now being redirected to the home page, but if you do not wish to wait click <a href='index.php'>HERE</a>";
						break;
					}
				}
				if (!$_SESSION['loggedIn']) {
					header('Refresh: 6; URL=login.php');
					echo "That was not a valid login, please try again";
				}
			?></p>

			<nav>
				<h3><a href="index.php">Home</a></h3>
			</nav>
		</div>
	</body>
</html>
