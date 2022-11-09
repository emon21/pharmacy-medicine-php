
<?php
 require_once('conn.php');
 
if(isset($_GET["status_id"])){
	$status_id = $_GET['status_id'];
	$sqledit = "select * from sign_up_user user_type where  id='$status_id'";
	$rs = mysqli_query($conn,$sqledit);
	while($row = mysqli_fetch_assoc($rs)){
	
		if($row['user_type']=='Active'){
			
			$st='Inactive';
		}
		else{
			$st='Active';
		}
	}
	
	$sqlUpdate ="update sign_up_user SET user_type='$st' WHERE id='$status_id'";
	mysqli_query($conn,$sqlUpdate);
	header("location: all_user.php");
}
?>