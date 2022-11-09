<?php require_once('inc_file/header.php');
$sid = session_id();



 ?>

<?php 

require_once('dbcon.php');
if(isset($_GET['sifted_id'])){
	$status_id = $_GET['sifted_id'];
	
	$bikash_txt_id = $_GET['bikash_txt_id'];
	//$sqledit = "select * from tbl_order status where customer_id='$status_id'";
	//$rs = mysqli_query($conn,$sqledit);
	// while($row = mysqli_fetch_assoc($rs)){
	
	// 	if($row['status']=='1'){
			
	// 		$st='Inactive';
	// 	}
	// 	else{
	// 		$st='Active';
	// 	}
	// }
	
	$sqlUpdate ="UPDATE tbl_order SET status='2',bikash_txt_id='$bikash_txt_id' WHERE id='$status_id'";
	mysqli_query($db,$sqlUpdate);
	//header("location: order_list.php");
} ?>

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
</style>
</head>
<body>

    <div class="wrapper">
        <h2 style="color:red"></h2>
		<div class="order">
			<h2 style="color:#fff;padding-top:20px;">Order Details Page</h2>
			<a href="order.php" style="float: right;
    font-size: 20px;
    color: #f7f4f4;
    padding-top: -20px;
    margin-bottom: 10px;
    text-decoration: none;
    margin-top: -38px;
    background-color: #15b70a;
    width: 120px;
    height: 36px;
    padding-top: 10px;
    text-align: center;">Order Page</a>
			<table id="customers">
  <tr>
    <th>SL</th>
    <th>Product Name</th>
    <th>Picture</th>
    <th>Price</th>
    <th>Quentity</th>
    <th>Total Price</th>
    <th>Date</th>
    <th>Bikash Status</th>
	<th>Status</th>
    
  
  </tr>
  <?php require_once('dbcon.php');

      $userid = $_SESSION['user_id'];

     $show = "SELECT * FROM tbl_order WHERE customer_id='$userid' ORDER BY product_id DESC";
        
        $ser_result=mysqli_query($db,$show); 
        $i = 1;
       
        while($row=mysqli_fetch_array($ser_result)){
         

     ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['product_name'];?></td>
    <td>
      <img src="admin/medicine_pic/<?php echo $row['pro_img'];?>" alt="" width="120" height="75">
    </td>
     <td><?php echo $row['price'];?></td>
    <td>
    <?php echo $row['quentity'];?>
    </td>
    <td>
        <?php 

          $total_price = $row['price'] * $row['quentity'];
          echo $total_price;

      ?>
      
    </td>
    <td><?php echo $row['date'];?></td>
	
    <td><?php if ($row['bikash_txt_id']=="") {
    		echo "<h2 style='color:red;font-size:20px;'>".'Not Payment '."</h2>";

    	}
    	else{
    		
    		echo "<h2 style='color:green;font-size:20px;'>".'Payment Success'."</h2>";
		} ?>
    		
		</td>
    <td>
    	<?php 
    	
    	if ($row['status']=="0") {
    		echo "<h2 style='color:blue;font-size:20px;'>".'Pending'."</h2>";

    	}
    	else if($row['status']=="1"){
    		//echo "Shifted";
    		//echo "<h2 style='color:green;font-size:20px;'>".'Shifted'."</h2>";
    		?>
    		<a href="info.php?sifted_id=<?php echo $row['id'];?>">Payment Now</a>
    		<?php } else{

    		echo "confirm";
    		}
 
    	
		
    	
    	?>
    	
    	
    </td>
    	
   
    
    
    <!--td><?php if ($row['bikash_txt_id']=="") {
    		echo "N/A";

    	}
    	else{?>
		<a href="sms_send.php?sms_id=<?php echo $row['id'];?>">SMS Send</a>
    		<?php } ?>
			</td-->
		
  </tr>

<?php $i++;} ?>
</table>

		</div>


    </div>




</body>
</html>
