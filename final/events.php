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
        <title>Events</title>
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
            <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like_110px.png" alt="Facebook Page
            " width="110" height="32" class="headerfblike"/></a>
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
				$sql = "SELECT * FROM Events";
                foreach ($dbh->query($sql) as $row){
                    echo "<div class='events'><table><tr><td><img src=$row[ImagePath]></td>";
                    echo "<td><h2>$row[Title]</h2><br><p>$row[Subtitle]</p><br><p>$row[Details]</p></td></tr><tr><td><p>$row[Time] $row[Day] $row[Date] at $row[Place]</p></td>";
                    if ($row[BookingLink] != ""){
                        echo "<td><a href='$row[BookingLink]'><img src=images/ticketshop.jpg></a></td>";
                    }
                    echo "</tr></table></div>";
                 }

                if ($_SESSION['loggedIn']){
                echo "<div class='container'>
                <form id='insert' name='insert' method='post' action='eventInsert.php' enctype='multipart/form-data'>
                    <h2>Create new event:</h2><center><table><tbody>
                    <tr><td align='right'><label for='eventImage'>Display Image: </label></td><td><input type='file' name='eventImage' id='eventImage' /></td></tr>
                    <tr><td align='right'><label for='title'>Title: </label></td><td><input type='text' name='title' id='title' /></td></tr>
                    <tr><td align='right'><label for='subtitle'>Subtitle: </label></td><td><input type='text' name='subtitle' id='subtitle' /></td></tr>
                    <tr><td align='right'><label for='details'>Details: </label></td><td><input type='text' name='details' id='details' /></td></tr>
                    <tr><td align='right'><label for='time'>Time: </label></td><td><input type='text' name='time' id='time' /></td></tr>
                    <tr><td align='right'><label for='day'>Day: </label></td><td><input type='text' name='day' id='day' /></td></tr>
                    <tr><td align='right'><label for='date'>Date: </label></td><td><input type='text' name='date' id='date'/></td></tr>
                    <tr><td align='right'><label for='place'>Where: </label></td><td><input type='text' name='place' id='place' /></td></tr>
                    <tr><td align='right'><label for='bookingLink'>Booking Link: </label></td><td><input type='text' name='bookingLink' id='bookingLink' /></td></tr>
                    </tbody></table>
                    <input type='submit' name='submit' id='submit' value='Submit' />
                </form>
                </div>";
                }
            ?>
            <footer>
                <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like.png" alt="Like Us on Facebook" class="facebooklikefooter"></a>
                <img src="images/index/TCC83100.png" alt="" width="83" height="100" class="councilimgindex"/>
                <img src="images/index/GCBF15091.gif" alt="" width="150" height="92" class="qldgovindeximg"/>
                <br>Contact<br>
                Phone: 07 4724 2086 <br> Mobile: 04 0225 5182 <br>
                Email: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br><br>
                &copy; Townsville Community Business Centre
            </footer>
        </div>
    </body>
</html>