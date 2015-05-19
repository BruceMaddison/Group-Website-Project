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
    <title>Artist Processing Submission</title>
    <link href="mainstyles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Results</h1>
        <?php
            //for image insertion, w3 schools has been referenced

            if ($_REQUEST['submit'] == "Submit"){
				echo "$_REQUEST[datePosted]";
                $sql = "INSERT INTO Bulletin (DatePosted, Title, Details, Email, Facebook, Website) VALUES ('$_REQUEST[datePosted]', '$_REQUEST[bulletinTitle]', '$_REQUEST[details]', '$_REQUEST[email]', '$_REQUEST[facebook]', '$_REQUEST[website]')";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
                    if($_REQUEST[bulletinTitle] != ""){
                        if ($dbh->exec($sql)){
                            echo "Bulletin Board updated.";
                        }
                    }else{
                        echo "$_REQUEST[bulletinTitle] failed to be inserted.";
                    }
            }else{
                echo "This page did not come from a valid form submission.<br />\n";
            }
            echo "</strong></p>\n";
            $dbh = null;
        ?>
        <p><a href='bulletinBoard.php'>RETURN</a></p>
    </div>
</body>
</html>