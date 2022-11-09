<?php
require_once('conn.php');
if(isset($_GET['delete_id'])){
	
	$delete_id = $_GET['delete_id'];

	/*$del_data = "SELECT * FROM sign_up_user WHERE id='$delete_id'";
	$run_query = mysqli_query($conn,$del_data);
	$row = mysqli_fetch_assoc($run_query); 
	$image = $row['pro_img'];
	unlink("img/".$image);*/
	
	$data = "DELETE FROM medicine_list WHERE id='$delete_id'";
	$run_query = mysqli_query($conn,$data);
	if($run_query){
		 echo "Record deleted successfully";
	
	//mysqli_query($conn,$data);
	header("location: all_category.php");
}
}


/*$delete_id=$_GET['delete_id'];
$select=mysqli_query($conn,"select * from properties where id='$delete_id'");
$res=mysqli_fetch_array($select);
$imgag=$res['pro_img'];
unlink("img/".$imgag);
$result=mysqli_query($conn,"delete from properties where id='$delete_id'");
header("location: index.php");


$delete_id=$_GET['delete_id'];
$select=mysql_query("select image from properties where id='$delete_id'");
$image=mysql_fetch_array($select);
@unlink($image['image']);
$result=mysql_query("delete from properties where id='$delete_id'");
*/


?>