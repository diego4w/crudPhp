<?php
include("../conection.php");
function readUserDb($conn) {
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["nome"]. "<br>";
	}
	} else {
	echo "0 results";
	}
	$conn->close();

}
?>