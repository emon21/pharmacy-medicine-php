<?php 

 require_once('dbcon.php');
 
if(isset($_GET['sifted_id'])){
	
	$pay_id = $_GET['sifted_id'];
	
	$show ="SELECT * FROM tbl_order WHERE id='$pay_id'";
	
	 $ser_result=mysqli_query($db,$show); 
       
       
        while($row=mysqli_fetch_array($ser_result)){
			
		$customer_id = $row['customer_id'];
		$product_id = $row['product_id'];
		$product_name = $row['product_name'];
		$quentity = $row['quentity'];
		$price = $row['price'];
		$total_price = $quentity*$price;
		$pro_img = $row['pro_img'];
		
	
	
	
	
	
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


.pro_info {
    background: blue;
    width: 500px;
    color: #fff;
    float: left;
}
.bikash_info{
    background: orange;
    width: 500px;
    color: #fff;
    float: right;
	
}
.bikash_info img{
	padding-left:10px;
	height:120px;
}

</style>
</head>
<body>

    <div class="wrapper">
        <h2 style="color:red"></h2>
		<div class="order">
			
		

<div class="pro_info">
	<h2>Product Information</h2>
	<form action="" method="post">
	
		Product Name : <input type="text" readonly name="pro_name" style="margin-left: 10px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" placeholder="Enter Your Product Name...!!" value="<?php echo $product_name;?>"><br/>
		Quentity : &nbsp;<input type="text" readonly name ="qty" style="margin-left: 43px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" value="<?php echo $quentity;?>" placeholder="Enter Your Product Name...!!"><br/>
		Price : <input type="text"  style="margin-left: 70px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" readonly name="price" value="<?php echo $price;?>" placeholder="Enter Your Product Name...!!"><br/>
		Total Price : <input type="text"  style="margin-left: 35px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" readonly name ="total_price" value="<?php echo $total_price;?>" placeholder="Enter Your Product Name...!!"><br/>
		Bikash Number: <input type="text" style="margin-left: 10px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
"name="bikash_number" placeholder="Enter Your Bikash Number...!!" required><br/>


Bikash TXT ID: <input type="text"   style="margin-left: 10px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
"name="bikash_txt_id" placeholder="Enter Your Bikash TXT  ID...!!" required><br/>
		
		<input type="submit" value="Payment" name="add_now" style="text-align: center;
    margin-left: 159px;padding: 3px;margin-top: 5px;margin-bottom: 5px; background: orange;
    color: #fff;font-size: 18px;border: none padding: 5px;cursor: pointer;"><br/>
	
	</form>
</div>

<div class="bikash_info">
	<h2>Bikash Information</h2>
	<img src="images/bkash-logo.png">
	<p style="color:#000;font-size:50px;padding-left:10px;">01716664794</p>

</div>
		</div>


    </div>


<?php } ?>


<?php 

require_once('dbcon.php');

$sifted_id="";

if(isset($_POST['add_now'])){
	  
if(isset($_GET['sifted_id'])){
	
	$sifted_id1 = $_GET['sifted_id'];
	
	$bikash_number = $_POST['bikash_number'];
	$bikash_txt_id = $_POST['bikash_txt_id'];
	$payment_date = date('y-m-d');
	
	$check_user = "select * from bkash WHERE bikash_no='$bikash_number' 
	and transition_no='$bikash_txt_id'";
		$login_user  = mysqli_query($db,$check_user);
		$checkresult = mysqli_num_rows($login_user);
		
			if($checkresult==true){
		
		$sqlUpdate ="UPDATE tbl_order SET status='2',bikash_number='$bikash_number',bikash_txt_id='$bikash_txt_id',date='$payment_date' WHERE id='$sifted_id1'";
		mysqli_query($db,$sqlUpdate);
		header("location:orderdetails.php");	

    }
		
	
	else{
		echo"
		<script>
		   alert('Please Wait 30 Min and try again...!!');
		  </script>";
		 
		/* <script>
		  alert('Your transition Id not match!!! please check And try again.');
		 </script>";
		 */

	}
		

   
		
	
		
	
	}
}
	



	
 ?>
</body>
</html>


