<?php

// Create connection

$conn = mysqli_connect("localhost","root","","pharmacy_shifa");
 
// Check connection

if (!$conn) {
	
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>