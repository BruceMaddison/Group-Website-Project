<?php
include("dbconnect.php")
/* Fairly simple example - there's a form for inserting a new phone record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artists</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 33%;
	float: left;
}
.deleteButton {
	color: red;
}
</style>
</head>

<body>
<h1>Phone Database</h1>
<form id="insert" name="insert" method="post" action="artistdbProcessing.php">
<fieldset class="subtleSet">
    <h2>Insert new phone record:</h2>
	
	
	<center><table><tbody>
		<tr><td align='right'><label for="profImage">Profile Image: </label></td><td><input type="file" name="profImage" id="profImage" /></td></tr>
		
		<tr><td align='right'><label for="fName">First Name: </label></td><td><input type="text" name="fName" id="fName" /></td></tr>
		
		<tr><td align='right'><label for="lName">Last Name: </label></td><td><input type="text" name="lName" id="lName" /></td></tr>
		
		<tr><td align='right'><label for="details">Details: </label></td><td><input type="text" name="details" id="details" /></td></tr>
		
		<tr><td align='right'><label for="performanceType">TypeID: </label></td><td>
			<!--In the future, the following drop-down menu will be filled using a loop and the Performance table, but for now I manually 
			entered the values for simplicity's sake-->
			<select name="performanceType" id="performanceType">
				<option value="1">Rock Band</option>
				<option value="2">Orchestra</option>
				<option value="3">Barbershop Quartet</option>
			</select></td></tr>
		
		<tr><td align='right'><label for="performanceHandle">Performance Handle (e.g. Band Name): </label></td><td><input type="text" name="performanceHandle" id="performanceHandle" /></td></tr>
		
		<tr><td align='right'><label for="instrument">Preferred Instrument: </label></td><td><input type="text" name="instrument" id="instrument" /></td></tr>
	</tbody></table>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry" />
    </p></center>
	
</fieldset>
</form>

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM Artists, Performance WHERE Artists.TypeID=Performance.TypeID";
foreach ($dbh->query($sql) as $row){
?>
<form id="deleteForm" name="deleteForm" method="post" action="artistdbProcessing.php">
<?php
	echo "<center><table><tbody>
		<tr><td align='right'>First Name: </td><td><input type='text' name='fName' value='$row[FirstName]' /></td></tr>
		<tr><td align='right'>Last Name: </td><td><input type='text' name='lName' value='$row[LastName]' /></td></tr>
		<tr><td align='right'>Details: </td><td><input type='text' name='details' value='$row[Details]' /></td></tr>
		<tr><td align='right'>Performance Type: </td><td><input type='text' name='pType' value='$row[PerformanceType]' /></td></tr>
		<tr><td align='right'>Performance Handle:<br></td><td><input type='text' name='pHandle' value='$row[PerformanceHandle]' /></td></tr>
		<tr><td align='right'>Preferred Instrument:<br></td><td><input type='text' name='instrument' value='$row[PreferredInstrument]' /></td></tr>
	</tbody></table></center>";
?>
<center>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
<br>
<br>
</center
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>