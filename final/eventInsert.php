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
    <title>Event Submission Processing</title>
    <link href="mainstyles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1>Results</h1>
        <?php
            $targetFile = "images/events/" . basename($_FILES["eventImage"]["name"]);
            move_uploaded_file($_FILES["eventImage"]["tmp_name"], $targetFile);
            
            if ($_REQUEST['submit'] == "Submit"){
                $sql = "INSERT INTO Events (ImagePath, Title, Subtitle, Details, Time, Day, EventDate, Place, BookingLink) VALUES ('$targetFile', '$_REQUEST[title]', '$_REQUEST[subtitle]', '$_REQUEST[details]', '$_REQUEST[time]', '$_REQUEST[day]', '$_REQUEST[date]', '$_REQUEST[place]', '$_REQUEST[bookingLink]')";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
                    if($_REQUEST[title] != ""){
                        if ($dbh->exec($sql)){
                            echo "Inserted $_REQUEST[title].";
                        }
                    }else{
                        echo "$_REQUEST[title] failed to be inserted.";
                    }
            }else{
                echo "This page did not come from a valid form submission.<br />\n";
            }
            echo "</strong></p>\n";
            $dbh = null;
        ?>
        <p><a href='events.php'>RETURN</a></p>
    </div>
</body>
</html>