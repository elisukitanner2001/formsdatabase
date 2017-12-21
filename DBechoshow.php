<?php

include 'php/DBconnect_4parm.php';

$sql = "SELECT id, firstname, lastname, email,reg_date FROM MyGuests";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	// output data of each row
	while ($row = $result -> fetch_assoc()) {
		echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - email: " . $row["email"] . " - registration date: " . $row["reg_date"] . "<br>";
	}
} else {
	echo "0 results";
}

include 'DBclose.php';

?>