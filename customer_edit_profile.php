<?php require_once('inc_file/header.php');



// $userid = $_SESSION['fac_id'];
//$login = $_SESSION['fac_id'];



$userid = $_SESSION['user_email'];

 if($userid==false) {
  header("locatin:user_customer.php");
}

?>

 

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
.table_user{
	width: 650px;
	margin: 0 auto;
	
}
.table_user td
{
	text-align: justify;
}
.table_user td h2{
	text-align: center;
	padding-bottom: 20px;
	padding-top: 10px;
}

.table_user tr{
background-color:  #fff;

}
.table_user tr td{
padding: 6px;

}
.table_user input[type="text"] {
	width: 350px;
	/* padding: 5px; */
	font-size: 15px;
	/* background-color: blue; */
	/* height: 30px; */
	border-radius: 0px;
	border: 1px solid #b5ada3;;
}
</style>
</head>
<body>

    <div class="wrapper">
    
<?php 

require_once('dbcon.php');

if(isset($_REQUEST['customer_ID'])) {
	$edid_ID = $_REQUEST['customer_ID'];

//SELECT * FROM `customer` WHERE cus_email='hasibbd@gmail.com' 

$showtab = "SELECT * FROM customer WHERE id='$edid_ID'";
   $tab = mysqli_query($db,$showtab);
  //$totalrow= mysqli_num_rows($tab);
  while ( $row = mysqli_fetch_assoc($tab)) {
  
  
     ?>
	<form action="customer_edit_profile_process.php" method="POST">
		<table class="table_user">
			<tr>
				<td colspan="3"><h2>Update Profile Page</h2></td>
			</tr>
			
				<input type="hidden" name="customer_ID" value="<?php  echo $edid_ID;?>">
				
		
			<tr>
				<td>Customer Name</td>
				<td><input type="text" name="cus_name" value="<?php  echo $row['cus_name'];?>">
				</td>
			</tr>
			<tr>
				<td>Customer Address</td>
				<td><input type="text" name="cus_address" value="<?php  echo $row['cus_address'];?>" >
				</td>
			</tr>
			<tr>
				<td>Customer City</td>
				<td><input type="text" name="cus_city" value="<?php  echo $row['cus_city'];?>" >
				</td>
			</tr>
			
			<tr>
				<td>Customer Phone</td>
				<td><input type="text" name="cus_phone" value="<?php  echo $row['cus_phone'];?>">
				</td>
			</tr>
			<tr>
				<td>Customer Email</td>
				<td>
				<input type="text" name="cus_email" value="<?php  echo $row['cus_email'];?>">
				</td>
			</tr>
			<tr>
				<td>Customer Passwors</td>
				<td><input type="text" name="cus_password" value="<?php  echo $row['cus_password'];?>"></td>

			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="udate" value="Update Profile" class="cus_reg"></td>
			</tr>
			
		</table>
</form>
<?php 	
 }}
     ?>
    </div>




</body>
</html>
