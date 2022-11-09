<?php
require_once('conn.php');
if(isset($_GET['del_id'])){
	
	$delete_id = $_GET['del_id'];

	$data = "DELETE  FROM admin_user WHERE id='$delete_id'";
	mysqli_query($conn,$data);
	header("location: all_user_list.php");

}