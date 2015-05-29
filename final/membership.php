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
        <link href="becomemember.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link href="mainstyles.css" rel="stylesheet" type="text/css">
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
            </header>

            <h2><img src="images/Become Memeber/piano.png" alt="" width="82" height="90" class="pianoimg"/><img src="images/Become Memeber/bass.png" alt="" width="59" height="90" class="bassimg"/><img src="images/Become Memeber/drums01.png" alt="" width="94" height="85" class="drumimg"/>Become a Member</h2>
            <h3>Members can benefit from up to 50% savings on tickets, THATS HUGE. </h3>
            <h4>Help the Townsville music centre grow while reaping the benifits at the same time.</h4>
            <div class="maincontent"><strong>
				<?php
				if ($_SESSION['loggedIn']){
					echo "<p><a href='logout.php'>Log Out</a></p>";
				} else {
					echo "<p>Already a member? Login <a href='login.php'>HERE</a></p><br><br>";
				}
				?>
                <p>Simply complete the form below, and after the first month free pay a small fee of $25 to recieve a yearly membership  great rewards that come with it!</p></strong>
                <?php 
                    echo "<form id='insert' name='insert' method='post' action='memberInsert.php' enctype='multipart/form-data'>
                        <center><table><tbody>
                        <tr><td align='right'><label for='username'>Username: </label></td><td><input type='text' name='username' id='username' required/></td></tr>
                        <tr><td align='right'><label for='password'>Password: </label></td><td><input type='password' name='password' id='password' required/></td></tr>
                        <tr><td align='right'><label for='firstName'>Given Name: </label></td><td><input type='text' name='firstName' id='firstName' required/></td></tr>
                        <tr><td align='right'><label for='lastName'>Surname: </label></td><td><input type='text' name='lastName' id='lastName' /></td></tr>
                        <tr><td align='right'><label for='streetNum'>Street Number: </label></td><td><input type='number' name='streetNum' id='streetNum' /></td></tr>
                        <tr><td align='right'><label for='streetName'>Street Name: </label></td><td><input type='text' name='streetName' id='streetName' /></td></tr>
                        <tr><td align='right'><label for='suburb'>Suburb: </label></td><td><input type='text' name='suburb' id='suburb' /></td></tr>
                        <tr><td align='right'><label for='memPhoneNum'>Phone Number: </label></td><td><input type='text' name='memPhoneNum' id='memPhoneNum' /></td></tr>
                        <tr><td align='right'><label for='memberEmail'>Email: </label></td><td><input type='text' name='memberEmail' id='memberEmail' /></td></tr>
                        </tbody></table>
                        <input type='submit' name='submit' id='submit' value='Submit' />
                    </form>";
                ?>
                <p id="becomeMbrP4">Membership not for you? you can still help the Townsville music center and insipiring musicians keep thier dream alive by donating as little or as much as you want. All donatations are <strong>TAX DEDUCTIBLE.</strong></p>
                <p id="becomeMbrP5">For futhur assistance feel free to <a href="about.html">Contact Us </a></p>
                Individual membership
                <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ" />
                    <input name="submit" type="image" id="payNowButton" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" alt="PayPal � The safer, easier way to pay online." />
                    <img alt="membership paypal" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" />
                </form>Donations (Tax decuctible)
                <form action="https://www.paypal.com/cgi-bin/webscr" target="_blank" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L" />
                    <input name="submit" type="image" id="donateButton" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" alt="PayPal � The safer, easier way to pay online." />
                    <img alt="donate paypal" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif"/>
                </form>
            </div>
            <footer>
                <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like.png" alt="Like Us on Facebook" class="facebooklikefooter"></a>
                <img src="images/index/TCC83100.png" alt="" width="83" height="100" class="councilimgindex"/><img src="images/index/GCBF15091.gif" alt="" width="150" height="92" class="qldgovindeximg"/>
                <br>Contact<br>
                Phone: 07 4724 2086 <br>
                Mobile: 04 0225 5182 <br>
                Email: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br><br>
                &copy; Townsville Community Business Centre
            </footer>
        </div>
    </body>
</html>