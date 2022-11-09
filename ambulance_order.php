<?php 
require_once('dbcon.php');
session_start();
$userid = $_SESSION['user_id'];


if (isset($_REQUEST['orderID'])) {
	 $orderID = $_REQUEST['orderID'];


	$qry = "SELECT * FROM ambulance_service WHERE id='$orderID'";
	$get = mysqli_query($db,$qry);
	while ($run = mysqli_fetch_assoc($get)) {
		
		// echo $run['pro_name']."  ".$run['pro_price']."  ".$run['pro_qty']."  ".$run['pro_img'];
		// echo "<br/>";
		$hospital_name		 = $run['hospital_name'];
		//$pro_price = $run['pro_price']*$pro_qty;
		$address = $run['address'];
		$mobile_no = $run['phone_number'];
		$price = $run['price'];
		
		$picture = $run['picture'];
		$cur_date = date('d-M-Y');
		
		
		$in = "INSERT INTO ambulance_order(hospital_name,mobile_no,address,price,picture,user_id,date) VALUES ('$hospital_name','$mobile_no','$address','$price','$picture','$userid','$cur_date')";
  		  $run_qry = mysqli_query($db,$in);
		  if ($run_qry) {
		    header("location: cart.php");
		  }

		   if ($pro_name <=0 ) {
        
        $showqty = "DELETE FROM cart WHERE  session_id='$sid'";
        $shdel = mysqli_query($db,$showqty);

      }

      header("location:ambulance_service_success.php");
  		

	}
   // $in = "INSERT INTO tbl_order(product_id,product_name,  quentity ,  price) VALUES ('cartID','','','','','','','','')";
  
  } 



 ?>