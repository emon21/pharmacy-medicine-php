<?php require_once('inc_file/header.php');



// $userid = $_SESSION['fac_id'];
//$login = $_SESSION['fac_id'];



$userid = $_SESSION['user_id'];




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
	width: 560px;
	margin: 0 auto;
	border:2px solid #ddd; 
	
}
.table_user td
{
	text-align: justify;
}
.table_user td h2{
	text-align: center;
}

.table_user tr{
background-color:  #fff;

}
.table_user tr td{
padding: 8px;

}
</style>
</head>
<body>

    <div class="wrapper">
    
<?php 

require_once('dbcon.php');
//SELECT * FROM `customer` WHERE cus_email='hasibbd@gmail.com' 

$showtab = "SELECT * FROM customer WHERE id='$userid'";
   $tab = mysqli_query($db,$showtab);
  //$totalrow= mysqli_num_rows($tab);
  while ( $row = mysqli_fetch_assoc($tab)) {
  
  
     ?>
<table class="table_user">
	<tr>
		<td colspan="3"><h2>User Profile Page</h2></td>
	</tr>
	<tr>
		<td>Customer Id</td>
		<td width="5%">:</td>
		<td><?php  echo $userid;?></td>
	</tr>
	<tr>
		<td>Customer Name</td>
		<td width="5%">:</td>
		<td><?php  echo $row['cus_name'];?></td>
	</tr>
	<tr>
		<td>Customer Address</td>
		<td>:</td>
		<td><?php  echo $row['cus_address'];?></td>
	</tr>
	<tr>
		<td>Customer City</td>
		<td>:</td>
		<td><?php  echo $row['cus_city'];?></td>
	</tr>
	
	<tr>
		<td>Customer Phone</td>
		<td>:</td>
		<td><?php  echo $row['cus_phone'];?></td>
	</tr>
	<tr>
		<td>Customer Email</td>
		<td>:</td>
		<td><?php  echo $row['cus_email'];?></td>
	</tr>
	<tr>
		<td>Customer Passwors</td>
		<td>:</td>
		<td><?php  echo $row['cus_password'];?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><a href="customer_edit_profile.php?customer_ID=<?php echo $row['id'];?>"> Update Profile</a></td>
	</tr>
	
</table>
<?php 	
  }
     ?>
    </div>




</body>
</html>
