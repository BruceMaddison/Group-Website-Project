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
        <meta charset="utf-8">
        <title>Townsville Music Center</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link href="mainstyles.css" rel="stylesheet" type="text/css">
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
            
			<?php
				if (!$_SESSION['loggedIn']){
					echo "<h2 class='becomembrindex'>
						<a href='membership.php'>Become a member</a> or <a href='login.php'>Log In</a> and recieve up to <strong>50% off tickets, <br>tickets purchased at the <a href='https://au.patronbase.com/_TVCC/Productions'>TicketShop</a></strong></h2>";
				} else {
					echo "<h2 class='becomembrindex'>
						<a href='logout.php'>Log Out</a></h2>";
				}
			?>
			
            
			
				<?php
					$sql = "SELECT * FROM Events";
					$lowestDate = "2020-01-01";
					foreach ($dbh->query($sql) as $row){
						if ($row[EventDate] < $lowestDate){
							$lowestDate = $row[EventDate];
						}
					}
					$eventSQL = "SELECT * FROM Events WHERE EventDate = '$lowestDate'";
					foreach ($dbh->query($eventSQL) as $eventRow){
							echo "<div class='maincontent'><h3>Upcoming Events</h3>
								<img src='$eventRow[ImagePath]' alt='eventRow[Title]' id='featuredEvent'/>
								<table>
									<tr><td><h2 class='contentheading2'><a href = 'events.php'>$eventRow[Title]</a></h2></td></tr>
									<tr><td><p>$eventRow[Details]</p></td></tr>
								</table>
							</div>";
					}
				?>
				
				<?php
					$sql = "SELECT * FROM Artists WHERE FeaturedArtist = 'Y'";
					foreach ($dbh->query($sql) as $row){
						echo "<div class='maincontent'><h3>Featured Musician</h3>
								<img src='$row[ArtistImagePath]' alt='Artists' id='featuredArtist'/>
								<table>
									<tr><td><h2 class='contentheading2'><a href = 'musicians.php'>$row[ArtistName]</a></h2></td></tr>
									<tr><td><p>$row[Details]</p></td></tr>
								</table>
							</div>";
					}
				?>
            
			
            <div class="maincontent"><h3>What is Townsviile Music Center?</h3><br>
				<p>In 1983 the Townsville music centre was established and presented with a $50 dollar cheque from the Townsville City Council. In 2003, 20 years after establishment the Townsville Music Centre relocated their office to the Townsville Civic Theatre building located on Boundry Street Townsville. A number of events are held by the Townsville Music centre on a regular basic and it is always searching for  <a href="membership.php">new members</a> and inspiring musicians. Current or future event information can be found on the <a href="events.php">Events page</a>, while information about the associated musicians can be found on the <a href="musicians.php">Musicians page</a> on this website.<br><br>
				Further information about the Townsville Music Centre can be found in the book titled "Townsville Community Music Centre: some memories of the first 25 years" by Jean Dartnall, which are available from the Main office. For any other questions that may arise feel free to  <a href="#">contact</a> the office.</p>
			</div>
			
		</div>
		<footer>
			<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like.png" alt="Like Us on Facebook" class="facebooklikefooter"></a>
			<img src="images/index/TCC83100.png" alt="" width="83" height="100" class="councilimgindex"/>
			<img src="images/index/GCBF15091.gif" alt="" width="150" height="92" class="qldgovindeximg"/>
			<br>Contact<br>
			Phone: 07 4724 2086 <br> Mobile: 04 0225 5182 <br>
			Email: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br><br>
			&copy; Townsville Community Business Centre
		</footer>
    </body>
</html>