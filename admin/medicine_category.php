<?php require_once('conn.php');?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home :: Page</title>
	<link rel="stylesheet" href="css/admin.css" />
</head>
<body>
<?php require_once('inc_file/sidebar.php');?>
<div class="content">


</div>

<div class="wrapper">
<form action="" method="post" enctype="multipart/form-data">
<fieldset>
<legend>Medicine Information: </legend>
  <label>Medicine Name : </label>
  <input type="text" name="add_cat" class="input_box2" placeholder="Your Medicine Name...!!">
  
  <input type="submit" value="Insert Data" class="btn_insert" name="ins_data" />
  </fieldset>
</form>
</div>
<?php
if(isset($_POST['ins_data'])){
	//VALUES
	$add_cat = $_POST['add_cat'];
	$ins_data ="insert into medicine_list(medicine_name)values('$add_cat')";
	$res_data = mysqli_query($conn,$ins_data);
	if($res_data){
		echo "Category Inserted Successfully...!!";
	}
}
?>
</body>
</html>