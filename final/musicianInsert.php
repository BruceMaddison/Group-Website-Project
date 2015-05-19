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

            $targetFile = "images/musicians/" . basename($_FILES["profImage"]["name"]);
            move_uploaded_file($_FILES["profImage"]["tmp_name"], $targetFile);
			
			$noApostDet = str_replace("'", "", "$_REQUEST[artistDetails]");
			$noApostDesc = str_replace("'", "", "$_REQUEST[artistDescription]");

            if ($_REQUEST['submit'] == "Submit"){
                $sql = "INSERT INTO Artists (ArtistImagePath, ArtistName, Details, Description, Email, PhoneNumber, Website) VALUES ('$targetFile', '$_REQUEST[artistName]', '$noApostDet', '$noApostDesc', '$_REQUEST[artistEmail]', '$_REQUEST[artistPhone]', '$_REQUEST[artistWebsite]')";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
                    if($_REQUEST[artistName] != ""){
                        if ($dbh->exec($sql)){
                            echo "Inserted $_REQUEST[artistName].";
                        }
                    }else{
                        echo "$_REQUEST[artistName] failed to be inserted.";
                    }
            }else{
                echo "This page did not come from a valid form submission.<br />\n";
            }
            echo "</strong></p>\n";
            $dbh = null;
        ?>
        <p><a href='musicians.php'>RETURN</a></p>
    </div>
</body>
</html>