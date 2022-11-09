<?php
require_once('conn.php');
if(isset($_GET['del_id'])){
	
	$delete_id = $_GET['del_id'];
	$data = "DELETE  FROM ambulance_order WHERE id='$delete_id'";
	mysqli_query($conn,$data);

		 echo "<script>
   				 window.alert('Data Delete Successfully...!!');
   				 window.location.href='ambulance_order_list.php';
			</script>";



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