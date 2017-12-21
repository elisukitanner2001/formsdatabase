<?php

$sql = "INSERT INTO IF NOT EXISTS MyGuests (firstname, lastname, email)
		VALUES ('John', 'Doe', 'john@example.com')";

if ($conn -> query($sql) === TRUE) {
	echo "<br>New single record created successfully<br>";
} else {
	echo "<br>Error: " . $sql . "<br>" . $conn -> error . "<br>";
}

$sql = "INSERT INTO IF NOT EXISTS MyGuests (firstname, lastname, email)
		VALUES ('Jane', 'Doe', 'jane@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($conn -> multi_query($sql) === TRUE) {
	echo "<br>New multiple records created successfully<br><br>";
} else {
	echo "<br>Error: " . $sql . "<br>" . $conn -> error . "<br>";
}
?>