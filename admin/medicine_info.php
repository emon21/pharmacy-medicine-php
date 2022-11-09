<?php 

require_once('conn.php');
require_once('add_register_process.php');

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
	color: #fd0202;
	font-size: 18px;
	/* margin: 0 auto; */
	/* margin-left: 363px; */
	/* height: 16px; */
	/* padding-bottom: 25px; */
	width: 324px;
	/* text-transform: uppercase; */
	/* float: left; */
	text-align: left;
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

<form id="reg" action="" method="post" enctype="multipart/form-data">

<div 
<?php if(isset($medicine_name)):?>
		 	 class="form_error"
			<?php endif ?>

			>
  <label>Medicine Name</label>
  <input type="text" name="medicine_name" class="input_box2" placeholder="Your Medicine Name...!!">
</div>
	<div
						
			<?php if(isset($medicine_des)):?>
		 	 class="form_error"
			<?php endif ?>

			>
  <label>Medicine Decription</label>
  <textarea cols="12" rows="5" class="input_box2" name="medicine_des" placeholder="Your Medicine Decription...!!"></textarea>
  </div>
  
  <label for="sel1">Select Medicine list:</label>
   <select name="medicine_id" class="formtext form-control" style="width:318px; height:35px;">
                                <option selected="selected"><center>>> Choose Medicine list << </center></option>
                                    <?php
                                    require_once('conn.php');
                                $query = mysqli_query($conn,"SELECT * FROM medicine_list");
                                while($row = mysqli_fetch_array($query))
                                                    {
                                                    ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['medicine_name']; ?></option>
                                <?php } ?>
                          </select>
  <label>Medicine Price</label>
  <input type="text" name="price" class="input_box2" placeholder="Enter Your Medicine Price...!!">
  <label>Picture :</label>
  <input type="file" name="image" class="input_box2"> 
</br></br>
  <label>Publish Date :</label>
 <input type="date" name="date" class="input_box2" placeholder="Enter Your Medicine Price...!!">

  <input type="submit" value="Insert Data" class="btn_insert" name="ins_data" />

</form>
</div>


<?php 

require_once('conn.php');


	$medicine_name = "";
	$medicine_des = "";
	$medicine_id = "";
	$price = "";

if(isset($_POST['ins_data'])){
	
	$medicine_name = $_POST['medicine_name'];
	$medicine_des = $_POST['medicine_des'];
	$medicine_id = $_POST['medicine_id'];
	$price = $_POST['price'];
	$cur_date = $_POST['date'];
	//$cur_date = date['Y-m-d'];
	
	
	//image insert into db
			
			 
	 $icon_image = $_FILES['image']['name'];
	 $icon_image_tmp = $_FILES['image']['tmp_name'];
	
	
	
	// //move_uploaded_file($image_tmp,"./images/$post_image");

	 move_uploaded_file($icon_image_tmp,"medicine_pic/$icon_image");
	
	if(empty($medicine_name))
        
        {
        
        $medicine_name = "Customer Name IS Required *";
        //echo "<script>alert('$error_message')</script>";
        }


        if(empty($medicine_des))
        
        {
        
        $medicine_des = "E-mail IS Required *";
        //echo "<script>alert('$error_message')</script>";
        }
       
   if(empty($medicine_id))
        
        {
        
         $pass_error = "Password is Required *";
        //echo "<script>alert('Roll Missing...!!')</script>";
        
        }
	
 if(empty($price))
        
        {
        
         $nid_error = "NID  is Required *";
        //echo "<script>alert('Roll Missing...!!')</script>";
        
        }
		
		
//$dept_id = $_POST['dept_id'];
	
else{

	$ins_qry = "INSERT INTO all_medicine(medicine_name,medicine_id,medicine_des,price,img,date)
	VALUES ('$medicine_name','$medicine_id','$medicine_des','$price','$icon_image','$cur_date')";
	$qry_run = mysqli_query($conn,$ins_qry);
	if ($qry_run) {


   	 echo "<script>
			alert('OOUR Medicine Is Publish !!');
			window.location.href='medicine_list.php';
			</script>";	
		
		//echo "OUR Medicine Is Publish !!";
		//echo "<a href='medicine_list.php'>Click Here</a>";
	}
}	
	
}

?>
</body>
</html>