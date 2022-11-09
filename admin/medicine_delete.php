<?php
require_once('conn.php');
if(isset($_GET['delete_id'])){
	
	$delete_id = $_GET['delete_id'];

	$data = "DELETE  FROM all_medicine WHERE id='$delete_id'";
	mysqli_query($conn,$data);
	header("location: medicine_list.php");

}