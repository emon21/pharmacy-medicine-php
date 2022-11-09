
<?php
 require_once('conn.php');
 
// if(isset($_GET["status_id"])){
// 	$status_id = $_GET['status_id'];
// 	$sqledit = "select * from properties status where  id='$status_id'";
// 	$rs = mysqli_query($conn,$sqledit);
// 	while($row = mysqli_fetch_assoc($rs)){
	
// 		if($row['status']=='Active'){
			
// 			$st='Inactive';
// 		}
// 		else{
// 			$st='Active';
// 		}
// 	}
	
// 	$sqlUpdate ="UPDATE properties SET status='$st' WHERE id='$status_id'";
// 	mysqli_query($conn,$sqlUpdate);
// 	header("location: all_flat.php");
// }




if(isset($_GET['status_id'])){
	$status_id = $_GET['status_id'];
	//$sqledit = "select * from tbl_order status where customer_id='$status_id'";
	//$rs = mysqli_query($conn,$sqledit);
	// while($row = mysqli_fetch_assoc($rs)){
	
	// 	if($row['status']=='1'){
			
	// 		$st='Inactive';
	// 	}
	// 	else{
	// 		$st='Active';
	// 	}
	// }
	
	$sqlUpdate ="UPDATE tbl_order SET status='1' WHERE id='$status_id'";
	mysqli_query($conn,$sqlUpdate);
	header("location: order_list.php");
}


if(isset($_GET['del_id'])){
	$del_id = $_GET['del_id'];
	//$sqledit = "select * from tbl_order status where customer_id='$status_id'";
	//$rs = mysqli_query($conn,$sqledit);
	// while($row = mysqli_fetch_assoc($rs)){
	
	// 	if($row['status']=='1'){
			
	// 		$st='Inactive';
	// 	}
	// 	else{
	// 		$st='Active';
	// 	}
	// }
	
	$sqldel ="Delete FROM tbl_order WHERE id='$del_id'";
	mysqli_query($conn,$sqldel);
	header("location: order_list.php");
}
?>