<?php 

require_once('dbcon.php');

if (isset($_REQUEST['customer_ID'])) {

	$edid_ID = $_REQUEST['customer_ID'];


	//$edit_id = $_POST['customer_ID'];
	$cus_name		    = $_POST['cus_name'];
 	$cus_address		= $_POST['cus_address'];
 	$cus_city 			= $_POST['cus_city'];
 	$cus_phone		    = $_POST['cus_phone'];
 	$cus_email	    	= $_POST['cus_email'];
 	$cus_password	    = $_POST['cus_password'];

	  $up_qry =  "UPDATE customer SET cus_name='$cus_name',cus_address='$cus_address',cus_city='$cus_city',cus_phone='$cus_phone',cus_email='$cus_email',cus_password='$cus_password' WHERE id='$edid_ID'";
	              //UPDATE cart SET pro_qty='10' WHERE cart_id='46' 
	  $update = mysqli_query($db,$up_qry);

	      if ($update) {

	          echo "<script>
	         
	        window.alert('Data Update Successfully ...!!');
	        window.location.href='customer_profile.php';
	        </script>";
	        
	      }
 } 


 ?>