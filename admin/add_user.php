<?php require_once('conn.php');?>
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
<?php require_once('inc_file/sidebar.php');?>
<div class="content">

</div><br><br>

<div class="wrapper">
<form action="" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Medicine Information: </legend>

  <label>User Name</label>
  <input type="text" name="user_name" class="input_box2" placeholder="Your User Name...!!">

  <label>User Password</label>
  <input type="password" name="user_pass" class="input_box2" placeholder="Enter Your Password...!!"><br/>

  <label for="sel1">Select User Type:</label>
   <select name="user_type" class="formtext form-control" style="width:318px; height:35px;">
                                <option selected="selected"><center>>> Choose User Type << </center></option>
                                    
                                <option value="admin">Admin</option>
                                <option value="co_admin">Co Admin</option>
                               
                          </select>
  </br></br>
  <input type="submit" value="Insert Data" class="btn_insert" name="ins_data" />
  </fieldset>
</form>
</div>

<?php 

require_once('conn.php');


	$user_name = "";
	$user_pass = "";
	$user_type = "";

if(isset($_POST['ins_data'])){
	
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	$user_type = $_POST['user_type'];
	
	
	$ins_qry = "INSERT INTO admin_user(user_name,user_pass,user_type) VALUES ('$user_name','$user_pass','$user_type')";
	$qry_run = mysqli_query($conn,$ins_qry);
	if ($qry_run) {
		
		echo "User Inserted Succefully...!!";
		echo "<a href='add_user.php'>Click Here</a>";
	}
	
	
// 	if(empty($medicine_name))
        
//         {
        
//         $medicine_name = "Customer Name IS Required *";
//         //echo "<script>alert('$error_message')</script>";
//         }


//         if(empty($medicine_des))
        
//         {
        
//         $medicine_des = "E-mail IS Required *";
//         //echo "<script>alert('$error_message')</script>";
//         }
       
//    if(empty($medicine_id))
        
//         {
        
//          $pass_error = "Password is Required *";
//         //echo "<script>alert('Roll Missing...!!')</script>";
        
//         }
	
//  if(empty($price))
        
//         {
        
//          $nid_error = "NID  is Required *";
//         //echo "<script>alert('Roll Missing...!!')</script>";
        
//         }
		
		
// //$dept_id = $_POST['dept_id'];
	
// else{

	
// }	
	
}

?>
</body>
</html>