<?php

// sql to create table
/*
$sql = "DROP TABLE MyGuests";
if ($conn -> query($sql) === TRUE) {
	echo "<br>Table MyGuests droped successfully<br>";
} else {
	echo "<br>Error droppingtable: " . $conn -> error . "<br>";
} */
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
		id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP,
		website VARCHAR(50),
		comments VARCHAR(255)
		)";

if ($conn -> query($sql) === TRUE) {
	echo "<br>Table MyGuests created successfully<br>";
} else {
	echo "<br>Error creating table: " . $conn -> error . "<br>";
}

?>