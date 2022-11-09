<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/admin.css" />
</head>
<body>

<?php
require_once('conn.php');
if(isset($_REQUEST['cus_id'])){
	
	$cus_id = $_REQUEST['cus_id'];

$selectInfo = "SELECT * FROM customer WHERE id=$cus_id";
$runInfo = mysqli_query($conn,$selectInfo);

while($getData = mysqli_fetch_array($runInfo)){
	//echo $getData['pro_name'];
	//$status=$getData['status'];
	//header("location:order_list.php");
	
	?>
	
<?php require_once('inc_file/sidebar.php');?>
<div class="content">


</div>
	<div class="wrapper">
<form action="order_list.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="cus_id" value="<?php echo $cus_id;?>">
<fieldset>
<legend> Customer information: </legend>
  <label>Customer Name</label>
  <input type="text" name="pro_name" readonly="readonly" class="input_box2" value="<?php echo $getData['cus_name'];?>"placeholder="Enter Your Name">
  <label>Customer Address</label>
  
  <textarea class="input_box2" name="pro_address" readonly="readonly" placeholder="Course Short Description" value=""><?php echo $getData['cus_address'];?></textarea>
  
  </br>
  <label>Customer City</label>	
  <input type="text" name="cus_city" class="input_box2" readonly="readonly" value="<?php echo $getData['cus_city'];?>" placeholder="Enter Your Name">
  <label>Customer E-mail</label>
  <input type="text" name="cus_email" class="input_box2" readonly="readonly" value="<?php echo $getData['cus_email'];?>" placeholder="Enter Your Name">
 
  <label>Customer Phone</label>
  <input type="text" name="cus_password" readonly="readonly" class="input_box2" value="<?php echo $getData['cus_phone'];?>" placeholder="Enter Your Price">
  				  
 <input type="submit" name='edit_Data' class="btn_insert" value="View Data">
  </fieldset>
</form>
</div>
	
	
	<?php
	
	}

//header("location:order_list.php");
}
	?>
	
</body>
</html>