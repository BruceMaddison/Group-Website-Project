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
    <title>Musicians</title>
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
        <h1 id="musicians">Musicians</h1>
        <form action="sortedMusicians.php">
            Genres
            <select name='type'>
                <?php
                    $sql = "SELECT DISTINCT Genre FROM genres";
                    foreach ($dbh->query($sql) as $row) {
                        echo "<option value='$row[Genre]'>$row[Genre]</option>";
                    }
                ?>
            </select>
            <input type='submit'>
        </form>
        
        <?php
            $memberTypeSQL = "SELECT MemberType FROM Members WHERE Username = '$_SESSION[username]'";
            foreach($dbh->query($memberTypeSQL) as $row4){
                $loggedMemberType = $row4[MemberType];
            }

            $sql2 = "SELECT artistID FROM genres WHERE Genre = '$_GET[type]'";
            foreach ($dbh->query($sql2) as $row2) {
                $sql3 = "SELECT * FROM Artists WHERE ArtistID='$row2[artistID]'";
                foreach ($dbh->query($sql3) as $row3) {
                    echo "<div class='dbBox'><h2>$row3[ArtistName]</h2><img src=$row3[ArtistImagePath]>";
				
                    if ($_SESSION['loggedIn'] && ($loggedMemberType == 'admin')){
                        echo "<a href = 'musicianInfo.php?tag=$row3[ArtistID]'><h3>EDIT</h3></a>";
                    }

                    echo "<p><br>$row3[Details]</p><br><p>$row3[Description]</p><table><tr><td colspan='2'><h3>For more information or bookings:</h3></td></tr>";
                    if ($row3[Email] != ""){    
                        echo "<tr><td>Email: </td><td><a href='mailto:$row3[Email]'>$row3[Email]</a></td></tr>";
                    }
                    if ($row3[PhoneNumber] != null){ 
                        echo "<tr><td>Phone: </td><td>$row3[PhoneNumber]</td></tr>";
                    }
                    if ($row3[Website] != ""){ 
                        echo "<tr><td>Website: </td><td><a href='mailto:$row3[Website]'>$row3[Website]</td></tr>";
                    }
                    echo "</table></div>";
                }
            }


            if ($_SESSION['loggedIn'] && ($loggedMemberType == 'admin' || $loggedMemberType == 'member')){
                echo "<div class='container'>
                <form id='insert' name='insert' method='post' action='musicianInsert.php' enctype='multipart/form-data'>
                    <h2>Insert new artist:</h2><center><table><tbody>
                    <tr><td align='right'><label for='profImage'>Profile Image: </label></td><td><input type='file' name='profImage' id='profImage' /></td></tr>
                    <tr><td align='right'><label for='artistName'>Musician/Group's Name: </label></td><td><input type='text' name='artistName' id='artistName' /></td></tr>
                    <tr><td align='right'><label for='artistDetails'>Artist Details: </label></td><td><input type='text' name='artistDetails' id='artistDetails' /></td></tr>
                    <tr><td align='right'><label for='artistDescription'>Artist Description: </label></td><td><input type='text' name='artistDescription' id='artistDescription' /></td></tr>
                    <tr><td align='right'><label for='artistEmail'>Email (if available): </label></td><td><input type='text' name='artistEmail' id='artistEmail' /></td></tr>
                    <tr><td align='right'><label for='artistPhone'>Phone Number (if available): </label></td><td><input type='text' name='artistPhone' id='artistPhone'/></td></tr>
                    <tr><td align='right'><label for='artistWebsite'>Website (if available): </label></td><td><input type='text' name='artistWebsite' id='artistWebsite' /></td></tr>
                    <tr><td align='right'><label for='artistGenres'>Genres (separate by commas): </label></td><td><input type='text' name='artistGenres' id='artistGenres' /></td></tr>
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