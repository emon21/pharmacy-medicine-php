
<?php

require_once('dbcon.php');

	if(isset($_REQUEST['edit_Data'])){
	
	$edid_ID = $_REQUEST['edit_id'];
	
	
	//image insert into db
			
			 
	//$icon_image = $_FILES['icon_image']['name'];
	//$icon_image_tmp = $_FILES['icon_image']['tmp_name'];
	//,pro_img='$icon_image'

	$user_name = $_POST['user_name'];
	$mob_no = $_POST['mob_no'];
	$email = $_POST['email'];

	
	//move_uploaded_file($image_tmp,"./images/$post_image");

	//move_uploaded_file($icon_image_tmp,"img/$icon_image");
			
	$insert_user = "update reg_user SET user_name='$user_name',mob_no='$mob_no',email ='$email' WHERE id='$edid_ID'";
	$run_user = mysqli_query($db,$insert_user);
		
		// if($_FILES['icon_image']['name']){
			
		// 	$sel = "select * from properties where id='$edid_ID'";
		// 	$res = mysqli_query($conn,$sel);
		// 	$rows = mysqli_fetch_assoc($res);
		// 	$image = $rows['pro_img'];
		// 	unlink("img/".$image);
		// 	$icon_image = $_FILES['icon_image']['name'];
		// 	$icon_image_tmp = $_FILES['icon_image']['tmp_name'];
			
		// 	move_uploaded_file($icon_image_tmp,"img/$icon_image");
		// 	//$pic = "img/".$_POST['edid_ID'].$_FILES['icon_image']['name'];
		// 	//move_uploaded_file($_FILES['icon_image']['tmp_name'],$pic);
			
		// 	$sql = "update properties SET pro_img='$icon_image' WHERE id='$edid_ID'";
		// 	mysqli_query($conn,$sql);
		// }
	
	if ($run_user==true){
		
		echo "<script>
    window.alert('Succesfully Updated');
    window.location.href='profile.php';
    </script>User Inserted Has Been Succefully...!";
		
		//echo "<a href='login.php'>Login</a>";
		//header("location: index.php");
		

		
	}
	
	//if($inser_res){
		//	echo 'Attendance Taken Successfully...!';	
		//}
}

?>