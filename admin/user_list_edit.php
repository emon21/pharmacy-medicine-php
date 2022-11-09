<?php 
require_once('conn.php');

if (isset($_GET['edit_id'])) {
	
	$editId = $_GET['edit_id'];

	$showtab = "SELECT * FROM admin_user WHERE id='$editId'";
   $tab = mysqli_query($conn,$showtab);
  //$totalrow= mysqli_num_rows($tab);
  while ( $row = mysqli_fetch_assoc($tab)) {
  


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
<?php require_once('inc_file/sidebar.php');?>
<div class="content">


</div>

<div class="wrapper">
<form action="user_edit_process.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Medicine Information: </legend>
<input type="text" name="editId" value="<?php echo $editId;?>">
  <label>User Name</label>
  <input type="text" name="user_name" class="input_box2" placeholder="Your User Name...!!" value="<?php echo $row['user_name']; ?>">

  <label>User Password</label>
  <input type="password" name="user_pass" class="input_box2" placeholder="Enter Your Password...!!" value="<?php echo $row['user_pass']; ?>"><br/>

  <label for="sel1">Select User Type:</label>
   <select name="user_type" class="formtext form-control" style="width:318px; height:35px;">
                                <option selected="selected"><center>>> Choose User Type << </center></option>
                                 
                                <option value="admin">Admin</option>
                                <option value="co_admin">Co Admin</option>
                               
                          </select>
  </br></br>
  <input type="submit" value="Update User" class="btn_insert" name="ins_data" />
  </fieldset>
</form>
</div>
<?php 	
 }}
     ?>
</body>
</html>