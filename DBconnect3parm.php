<?php
$servername = "localhost";
//127.0.0.1 ISP will give you server name
$username = "root";
$password = "toor";

//Create connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if($conn -> connect_error) {
	die("<br>Connection failed (3 parm): " .$conn -> connect_error . "<br");
	
}
echo "<br> Connected succesfully using the 3 parms method<br>";

?>