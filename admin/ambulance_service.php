<?php require_once('conn.php');?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home :: Page</title>
	<link rel="stylesheet" href="css/admin.css" />
	<style>
	#reg {
    margin-top: -24px;
    /* background: orange; */
}
	</style>
</head>
<body>
<?php require_once('inc_file/sidebar.php');?>
<div class="content">


</div>

<div class="wrapper">
<br/>
<form id ="reg" action="" method="post" enctype="multipart/form-data">

  <label>Hospital Name</label>
  <input type="text" name="pro_name" class="input_box2" placeholder="Your Hospital Name...!!">
  <label>Address</label>
  <textarea cols="12" rows="5" class="input_box2" name="pro_address" placeholder="Your Address"></textarea>
  <label>Mobile No</label>
  <input type="number" name="mob_no" class="input_box2" placeholder="Your Mobile No...!!">
  </br></br>
  <label>Price:</label>
  <input type="number" name="price" class="input_box2" placeholder="Your Price...!!">
  </br></br>
  <label>Picture:</label>
  <input type="file" name="picture" class="input_box2">
  </br></br>
  <input type="submit" value="Insert Data" class="btn_insert" name="ins_data" />

</form>
</div>

<?php 

require_once('conn.php');

if(isset($_POST['ins_data'])){
	
	//$dept_id = $_POST['dept_id'];
	$pro_name = $_POST['pro_name'];
	$pro_address = $_POST['pro_address'];
	$mob_no = $_POST['mob_no'];
	$price = $_POST['price'];
	//$picture = $_POST['picture'];
	
	//image insert into db
			
			 
	 $icon_image = $_FILES['picture']['name'];
	 $icon_image_tmp = $_FILES['picture']['tmp_name'];
	
	
	
	// //move_uploaded_file($image_tmp,"./images/$post_image");

	 move_uploaded_file($icon_image_tmp,"ambulance_service/$icon_image");
	
	$ins_qry = "INSERT INTO ambulance_service(hospital_name,address,phone_number,price,picture) VALUES ('$pro_name','$pro_address','$mob_no','$price','$icon_image')";
	$qry_run = mysqli_query($conn,$ins_qry);
	if ($qry_run) {
		
		echo "<script>
   				 window.alert('Your Ambulance Is Inserted Successfully...!!');
   				 window.location.href='ambulance_service.php';
			</script>";

	}
}	
	


?>
</body>
</html>