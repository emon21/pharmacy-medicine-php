 <?php 

require_once('dbcon.php');
session_start();
//$sid = session_id();
$userid = $_SESSION['user_id'];

 if (isset($_REQUEST['s_ID'])) {

    $sid = $_REQUEST['s_ID'];

	$qry = "SELECT * FROM cart WHERE session_id='$sid'";
	$get = mysqli_query($db,$qry);
	while ($run = mysqli_fetch_assoc($get)) {
		
		// echo $run['pro_name']."  ".$run['pro_price']."  ".$run['pro_qty']."  ".$run['pro_img'];
		// echo "<br/>";
		$pro_id		 = $run['pro_id'];
		$pro_name = $run['pro_name'];
		
		$pro_qty = $run['pro_qty'];
		//$pro_price = $run['pro_price']*$pro_qty;
		$pro_price = $run['pro_price'];
		$pro_img = $run['pro_img'];
	
		$in = "INSERT INTO tbl_order(customer_id,product_id,product_name,price,quentity,pro_img,session_id) VALUES ('$userid','$pro_id','$pro_name','$pro_price','$pro_qty','$pro_img','$sid')";
  		  $run_qry = mysqli_query($db,$in);
		  if ($run_qry) {
		    header("location: cart.php");
		  }

		   if ($pro_name <=0 ) {
        
        $showqty = "DELETE FROM cart WHERE  session_id='$sid'";
        $shdel = mysqli_query($db,$showqty);

      }

      header("location:success.php");
  		

	}
   // $in = "INSERT INTO tbl_order(product_id,product_name,  quentity ,  price) VALUES ('cartID','','','','','','','','')";
  
  } 


  ?>