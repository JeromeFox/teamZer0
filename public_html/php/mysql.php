<?php
function dbUpdate ($query) {
	require "../../library/connect.php";
	$conn = server_connect();

	if ($conn->query($query) === TRUE) {
	    //echo "Record updated successfully";
	} else {
	    //echo "Error updating record: " . $conn->error;
	}

	$conn->close();
}
