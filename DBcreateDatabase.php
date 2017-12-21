<?php
//Create database
//USE EITHER ONE OF THE METHODS DO NOT NEED BOTH!

$sql = "CREATE DATABASE IF NOT EXISTS DBb1";
if ($conn -> query($sql) === TRUE) {
	echo "<br>Database created successfully<br>";
} else {
	echo "<br>Error creating database: " . $conn -> error . "<br>";
}

?>

