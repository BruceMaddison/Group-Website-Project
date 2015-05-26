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
<!DOCTYPE html><html>
    <head>
        <title>Bulletin Board</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link href="mainstyles.css" rel="stylesheet" type="text/css">
        <link href="musicians.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <header>
                <img src="images/title_heading4_750px.png" alt="TOWNSVILLE MUSIC CENTRE" width="750" height="70" class="titleimg"/>
                <img src="images/index/TCMCtrans10067.gif" alt="townsville music centre logo" width="100" height="67" class="logotitle"/>
            </header>
            <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like_110px.png" alt="Facebook Page" width="110" height="32" class="headerfblike"/></a>
            <nav>
                <ul>
                    <li><a href="index.php" class="linkhome">Home</a></li>
                    <li><a href="events.php" class="linkevents">Events</a></li>
                    <li><a href="bulletinBoard.php" class="linkbulliten">Bulletin Board</a></li>
                    <li><a href="musicians.php" class="linkmusician">Musicians</a></li>
                    <li><a href="membership.php" class="linkbecommbr">Become A Member</a></li>
                    <li><a href="about.php" class="linkaboutus">About Us</a></li>
                    <li><a href="instruments.php" class="linkinstrument">Instruments We Use</a></li>
                </ul>
            </nav>
			<div class="container">
            <h1>Bulletin Board</h1>
            <?php
				
                
				if ($_SESSION['loggedIn']) {
					echo "<div class='container'><form id='insert' name='insert' method='post' action='bulletinInsert.php' enctype='multipart/form-data'>
						<h2>Insert new post (for a new line, input two ~ symbols):</h2><center><table><tbody>
						<tr><td align='right'><label for='bulletinTitle'>Title: </label></td><td><input type='text' name='bulletinTitle' id='bulletinTitle' /></td></tr>
						<tr><td align='right'><label for='details'>Details: </label></td><td><input type='text' name='details' id='details' /></td></tr>
						<tr><td align='right'><label for='email'>Email: </label></td><td><input type='text' name='email' id='email' /></td></tr>
						<tr><td align='right'><label for='facebook'>Facebook: </label></td><td><input type='text' name='facebook' id='facebook' /></td></tr>
						<tr><td align='right'><label for='website'>Website: </label></td><td><input type='text' name='website' id='website' /></td></tr>
						</tbody></table>
						<input type='submit' name='submit' id='submit' value='Submit' />
					</form></div>";
				}
				
                $sql = "SELECT * FROM Bulletin ORDER BY DatePosted DESC";
                foreach ($dbh->query($sql) as $row){
                    $lineBreaks = str_replace("~~", "<br><br>", "$row[Details]");

                    echo "<div class='dbBox'><h4>$row[DatePosted]</h4><h2>$row[Title]</h2><br><p><b>$lineBreaks</b></p><br><br>";
                    if ($row[Email] != ""){    
                        echo "<a href='mailto:$row[Email]'>$row[Email]</a><br><br>";
                    }
                    if ($row[Facebook] != ""){ 
                        echo "<a href='$row[Facebook]'>Facebook Link</a><br><br>";
                    }
                    if ($row[Website] != ""){ 
                        echo "<tr><td>Website: </td><td><a href='$row[Website]'>$row[Website]</a></td></tr><br>";
                    }
                    echo "</div>";
                }
				echo "</div><br><br>";
				
            ?>
            <footer>
                <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like.png" alt="Like Us on Facebook" class="facebooklikefooter"></a><img src="images/index/TCC83100.png" alt="" width="83" height="100" class="councilimgindex"/>
                <img src="images/index/GCBF15091.gif" alt="" width="150" height="92" class="qldgovindeximg"/>
                <br>Contact<br>
                Phone: 07 4724 2086 <br> Mobile: 04 0225 5182 <br>
                Email: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br><br>
                &copy; Townsville Community Business Centre
            </footer>
        </div>
    </body>
</html>
