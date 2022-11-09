<?php require_once('inc_file/header.php');

$sid = session_id();

// $userid = $_SESSION['fac_id'];
//$login = $_SESSION['fac_id'];



$userid = $_SESSION['user_id'];

//echo $userid;


//  if($userid==false) {
//   header("locatin:user_customer.php");
// }

?>



<!DOCTYPE html>
<html>
<head>
<style>
.payment {
	width: 100%;
	min-height: 150px;
	text-align: center;
	border: 1px solid #ddd;
	margin-top: 30px;
	margin-bottom: 20px;
}
.payment h2 {
	border-bottom: 1px solid #ddd;
	margin-bottom: 40px;
	padding-bottom: 25px;
	color: #636f6f;
}
.payment a {
	background-color: #ff0000;
	border-radius: 3px;
	color: #fff;
	font-size: 25px;
	padding: 5px 30px;
	text-decoration: none;
	cursor: pointer;
	transition: all .3s;
}

.payment a:hover {
	background-color: #fff;
	
	color: #ff0000;
	
}


.table_user{
	width: 100%;
	margin: 0 auto;
	border:2px solid #ddd; 
	
}
.table_user td
{
	text-align: justify;
}
.table_user td h2{
	text-align: left;
}

.table_user tr{
background-color:  #fff;

}
.table_user tr td{
padding: 8px;

}
.devision{
	width: 50%;
	float: left;
}

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

.tbl_two {
	float: right;
	text-align: left;
	width: 40%;
	background: aliceblue;
	margin-top: 40px;
}

.tbl_two td,th{
	border: 1px solid #ddd;
  	padding:5px;
}
.ordernow {
	padding-bottom: 50px;
	margin-top: -215px;
	/* margin: 0 auto; */
	/* width: 250px; */
	margin-left: 83%;
}
.ordernow a {
	width: 200px;
	margin: 20px auto 0;
	text-align: center;
	padding: 5px;
	font-size: 30px;
	display: block;
	background-color: #ff0000;
	color: #fff;
	border-radius: 3px;
	height: 35px;
	line-height: 30px;
	margin-top: 321px;
	text-decoration: none;
	transition: all .3s;
}
.ordernow a:hover {
	
	background-color: #ff0000;
	color: #000;
	
}
</style>
</head>
<body>

    <div class="wrapper">
		<div class="payment">
			
		 
		 	<div class="devision">
		 		<table id="customers" width="100%">
  <tr>
    <th>SL</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Quentity</th>
    <th>Total Price</th>
  
  </tr>
  <?php require_once('dbcon.php');

      $sid = session_id();

     $show = "SELECT * FROM cart WHERE  session_id='$sid'";
        
        $ser_result=mysqli_query($db,$show); 
        $i = 1;
        $sum = 0;
        while($run=mysqli_fetch_array($ser_result)){
         

     ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $run['pro_name'];?></td>
     <td><?php echo $run['pro_price'];?></td>
     <td><?php echo $run['pro_qty'];?></td>
    
   

      <td>
        <?php 

          $total_price = $run['pro_price'] * $run['pro_qty'];
          echo $total_price;

      ?>
      
    </td>

    <!--  <td>
      <a href="customer_edit_profile.php?customer_ID=<?php echo $run['cart_id'];?>">Profile</a>
      
    </td>  -->
   
  </tr>


 <?php 


$sum = $sum + $total_price;
$gtotal = $sum;

  $i++;



  
      
         } ?>
</table>

<table style="float:right;text-align: left;" width="35%">
 
  <tr>
    <th>SUB Total :</th>
    <th><?php echo $sum; ?>/-</th>
    
  </tr>

 <!--  <tr>
    <th>Vat :</th>
    <td>10%</td>
  </tr> -->

  <tr>
    <th>Grand Total :</th>
	<th><?php echo $gtotal;?> /-</th>
  </tr>
</table>
 <div class="ordernow">
			 <a href="order_process.php?s_ID=<?php echo $sid; ?>" name="check">Order Now</a>

		</div>
<?php 

require_once('dbcon.php');
$sid = session_id();

$showtab = "SELECT * FROM cart WHERE session_id='$sid'";
   $tab = mysqli_query($db,$showtab);
    $totalrow= mysqli_num_rows($tab);
    if($totalrow)
      {

     ?>
<!-- <table class="tbl_two">
 
  <tr>
    <th>SUB Total :</th>
    <td><?php
    	$sum = $sum + $total_price;
    	$sum = $sum;
    	 echo $sum; ?> /-</td>
  </tr>

 <tr>
    <th>Vat :</th>
    <td>10% ( <?php echo $vat = $sum * 0.1; ?> ) /- </td>
  </tr>

  <tr>
    <th>Grand Total :</th>
    <td>
      <?php

       $vat = $sum * 0.1;
        $gtotal = $sum + $total_price;
        echo $gtotal;
      ?>
        
      </td>
  </tr>


	<td></td>
		<td></td>
		<td></td>
		


</table>  -->

<?php 


     
}
       

 ?>


		 	</div>

		<!-- <div class="devision">
		 		
    
<?php 

require_once('dbcon.php');
//SELECT * FROM `customer` WHERE cus_email='hasibbd@gmail.com' 
//$sid = session_id();
$userid = $_SESSION['user_id'];
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
		<td>Customer Country</td>
		<td>:</td>
		<td><?php  echo $row['cus_country'];?> </td>
	</tr>
	<tr>
		<td>Customer Zip Code</td>
		<td>:</td>
		<td><?php  echo $row['cus_zip_code'];?></td>
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
    </div> -->

		 
		</div>

		<!-- <div class="ordernow">
			<form action="" method="post">
				<input type="hidden" name="s_ID" value="<?php echo $sid ?>">
				<input type="submit" name="shop" value="SHOP" class="shop_btn">
			</form>

		</div> -->
		

		
    </div>
   <?php 

    // if (isset($_POST['check'])) {
    //     $price = $_POST['price'];
    //   //  $gtotal = 300;
    	
    // 	if ($price==300) {
    // 		echo "go Purches...!!";
    // 	}
    // 	else{
    // 		echo "Not Working...!!";
    // 	}
    // }

     if (isset($_POST['shop'])) {
     	
   
$cot = 299;
 if ($sum>$cot) {?>
    		
 	<a href="order_process.php?s_ID=<?php echo $sid; ?>" name="check">Order Now</a>
 	
 	<?php }
    	else{

    		echo "<script>
           window.alert('Not Working...!! Minimum 300/- please Shop now');
          		</script>";
    		
    	}

    }
     ?>

</body>
</html>
