<?php
	session_start();
	error_reporting(E_ALL);
	
	if (++$_SESSION['lastRegeneration'] >= 10) {
		$_SESSION['last_regeneration'] = 0;
		session_regenerate_id(true);
	}
	
    include("dbconnect.php");
    //All php on this page written/repurposed by Christian Thorpe
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member Submission Processing</title>
    <link href="mainstyles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Results</h1>
        <?php
            if ($_REQUEST['submit'] == "Submit"){
                $sql = "INSERT INTO Members (Username, Password, FirstName, LastName, MemberType, MemberStreetNum, MemberStreetName, MemberSuburb, MemberPhoneNum, MemberEmail) VALUES ('$_REQUEST[username]', '$_REQUEST[password]', '$_REQUEST[firstName]', '$_REQUEST[lastName]', 'member', '$_REQUEST[streetNum]', '$_REQUEST[streetName]', '$_REQUEST[suburb]', '$_REQUEST[memPhoneNum]', '$_REQUEST[memberEmail]')";
                if($_REQUEST[username] != ""){
                    if ($dbh->exec($sql)){
                        echo "Inserted $_REQUEST[firstName].";
                    }
                }else{
                    echo "$_REQUEST[firstName] failed to be inserted.";
                    }
            }else{
                echo "This page did not come from a valid form submission.<br />\n";
            }
            $dbh = null;
        ?>
        <p><a href='membership.php'>Back</a></p>
    </div>
</body>
</html>