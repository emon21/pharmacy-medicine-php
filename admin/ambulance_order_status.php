<?php
 require_once('conn.php');
 
if(isset($_GET["status_id"])){
	$status_id = $_GET['status_id'];
	//$sqledit = "select * from ambulance_order status where id='$status_id'";
	// $rs = mysqli_query($conn,$sqledit);
	// while($row = mysqli_fetch_assoc($rs)){
	
	// 	if($row['status']=='Active'){
			
	// 		$st='Inactive';
	// 	}
	// 	else{
	// 		$st='Active';
	// 	}
	// }
	
	$sqlUpdate ="update ambulance_order SET status='1' WHERE id='$status_id'";
	mysqli_query($conn,$sqlUpdate);
	header("location: ambulance_order_list.php");
}
?>