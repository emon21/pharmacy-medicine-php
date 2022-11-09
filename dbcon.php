<?php 

// Create connection
$db = mysqli_connect("localhost","root","","pharmacy_shifa");

// Check connection

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

 ?>