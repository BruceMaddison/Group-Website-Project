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
    <title>Artists</title>
    <link href="mainstyles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <form id="alter" name="alter" method="post" action="musicianAltering.php">
            <center><h2>Current data:</h2>
            <?php
            $id = $_GET['tag'];
            $sql = ("SELECT * FROM Artists WHERE ArtistID = $id");
                foreach ($dbh->query($sql) as $row){
                    echo "<table><tbody>
                        <tr><td align='right'>Artist Number: </td><td><input type='text' name='artistID' value='$row[ArtistID]' /></td></tr>
                        <tr><td align='right'>Musician/Group Name: </td><td><input type='text' name='artistName' value='$row[ArtistName]' /></td></tr>
                        <tr><td align='right'>Artist Details: </td><td><input type='text' name='artistDetails' value='$row[Details]' /></td></tr>
                        <tr><td align='right'>Artist/Group Description: </td><td><input type='text' name='artistDescription' value='$row[Description]' /></td></tr>
                        <tr><td align='right'>Email: </td><td><input type='text' name='artistEmail' value='$row[Email]' /></td></tr>
                        <tr><td align='right'>Phone Number:<br></td><td><input type='text' name='artistPhone' value='$row[PhoneNumber]' /></td></tr>
                        <tr><td align='right'>Website:<br></td><td><input type='text' name='artistWebsite' value='$row[Website]' /></td></tr>
                        <tr><td align='right'>Featured Artist:<br></td><td><input type='checkbox' name='artistFeatured' /></td></tr>
                    </tbody></table></center>";
                }
            ?>
            <center>
            <input type="submit" name="submit" value="Update" />
            <input type="submit" name="submit" value="Delete" class="deleteButton"><br><br>
            <br>
            <br>
            </center>
        </form>
        <form action="musicians.php">
            <input type="submit" value="Home">
        </form>
    </div>
</body>
</html>