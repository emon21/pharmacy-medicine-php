<?php 

require_once('conn.php');

if(isset($_POST['btn_insert'])){
	
	$dr_name = $_POST['dr_name'];
	$dr_qulif = $_POST['dr_qulif'];
	$dr_des = $_POST['dr_des'];
	
	
	//image insert into db
			
			 
	 $icon_image = $_FILES['image']['name'];
	 $icon_image_tmp = $_FILES['image']['tmp_name'];
	
	
	
	// //move_uploaded_file($image_tmp,"./images/$post_image");

	 move_uploaded_file($icon_image_tmp,"our_team2/$icon_image");
	
	

	$ins_qry = "INSERT INTO our_team(dr_name ,qulafication,dr_massage,profile_picture) VALUES ('$dr_name','$dr_qulif','$dr_des','$icon_image')";
	$qry_run = mysqli_query($conn,$ins_qry);
		if ($qry_run) {
			
			echo "OUR Medicine Is Publish !!";
			//echo "<a href='add_info.php'>Click Here</a>";
			//echo "<script>
   		 	//window.alert('Our Team Has Been Succesfully Publish...!!');
    		//window.location.href='our_team.php';
    	//	</script>";

    		
		}	
	
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home :: Page</title>
	<link rel="stylesheet" href="css/admin.css" />
	<style>
	
	#register_form {
  width: 37%;
  margin: 100px auto;
  padding-bottom: 30px;
  border: 1px solid #918274;
  border-radius: 5px;
  background: white;
}
	.error {
	color: red;
	font-size: 18px;
	/* margin: 0 auto; */
	margin-left: 363px;
	/* height: 16px; */
	/* padding-bottom: 25px; */
	width: 324px;
	text-transform: uppercase;
}

.pass_label {
	color: #0f86f5;
	font-size: 18px;
	/* margin: 0 auto; */
	margin-left: 363px;
	height: 21px;
	/* padding-bottom: 25px; */
	width: 360px;
	/* text-transform: uppercase; */
	/* background: aliceblue; */
	float: left;
	margin-bottom: 10px;
	text-align: left;
	font-weight: bold;
}

.form_error input {
  border: 10px solid #fff;
}

	</style>
</head>
<body>
<div class="navber">
<a href="admin.php">Home</a>
</div>
<div class="content">


</div>

<div class="wrapper">
<form action="" method="post" enctype="multipart/form-data">
<fieldset>
<legend>OUR Team Information: </legend>
<div>
  <label>DR Name</label>
  <input type="text" name="dr_name" class="input_box2" placeholder="Your Name...!!">
</div>
	<div>
  <label>DR  qulafication </label>
  <textarea cols="12" rows="5" class="input_box2" name="dr_qulif" placeholder="Your Qulafication...!!"></textarea>
  </div>

  	<label>DR Decription</label>
  <textarea cols="12" rows="5" class="input_box2" name="dr_des" placeholder="Your Medicine Decription...!!"></textarea>
  
  <label>Picture :</label>
  <input type="file" name="image" class="input_box2"> 
</br></br>
  <input type="submit" value="Insert Data" class="btn_insert" name="ins_data" />
  </fieldset>
</form>
</div>

</body>
</html>