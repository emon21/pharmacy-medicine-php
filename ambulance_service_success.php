<?php require_once('inc_file/header.php');?>

<!DOCTYPE html>
<html>
<head>
<style>
.success {
	width: 650px;
	min-height: 150px;
	text-align: center;
	border: 1px solid #ddd;
	margin: 0 auto;
	padding: 50px;
	margin-top: 30px;
	margin-bottom: 20px;
}
.success h2 {
	border-bottom: 1px solid #ddd;
	margin-bottom: 40px;
	padding-bottom: 25px;
}
.success p{
	color: #fff;
	font-size: 20px;
	text-align: justify;
}


</style>
</head>
<body>

    <div class="wrapper">
		<div class="success">
			<h2 style="color: green;font-size: 22px;">Success</h2>
			<?php 
			require_once('dbcon.php');

			
			//$sid = session_id();
			$userid = $_SESSION['user_id'];
			$sel_qry = "SELECT price FROM ambulance_order WHERE user_id='$userid'";
			$run_qry = mysqli_query($db,$sel_qry);
			if ($run_qry) {
				$sum = 0;

				while ($result = mysqli_fetch_assoc($run_qry)) {

					 $price = $result['price'];
					//$qty = $result['quentity'];
					///$pro_price = $price*$qty;
					//$sum = $sum+$price;
}
			 ?>
			<p>Total Payable Amount : 
			<?php
					//$vat = $sum * 0.1;
					//$pro_price = $run['pro_price']*$pro_qty;

					
				 echo $price;

			  ?> /-
			  </p>
			<p>Thanks for Purchase.Recive Your Order Successfully.We Will Contact you ASAP with delivery details . Here is your order details .....<a href="ambulance_order_list.php">Visit Here...</a> </p>
		 	
		  <?php 	
			}
			 ?>
		</div>
		
    </div>
</body>
</html>
