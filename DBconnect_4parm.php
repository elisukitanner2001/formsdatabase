<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "DBb1";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($conn -> connect_error) {
	die("<br>Connection failed (4 parm): " .$conn -> connect_error . "<br");
	
}
echo "<br> Connected succesfully using the 4 parms method<br>";

?>