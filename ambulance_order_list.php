<?php require_once('inc_file/header.php');
$sid = session_id();



 ?>

<?php 

require_once('dbcon.php');
if(isset($_GET['sifted_id'])){
	$status_id = $_GET['sifted_id'];
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
	
	$sqlUpdate ="UPDATE ambulance_order SET status='2' WHERE id='$status_id'";
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
			<h2 style="color:#fff;padding-top:20px;">Ambulance Order Details Page</h2>
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
    <th>Hospital Name</th>
    <th>Mobile No</th>
    <th>Address</th>
    <th>price</th>
    <th>picture</th>
    <th>Date</th>
    <th>Status</th>
    
  
  </tr>
  <?php require_once('dbcon.php');

      $userid = $_SESSION['user_id'];

     $show = "SELECT * FROM ambulance_order WHERE user_id='$userid'";
        
        $ser_result=mysqli_query($db,$show); 
        $i = 1;
       
        while($row=mysqli_fetch_array($ser_result)){
         

     ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['hospital_name'];?></td>
     <td><?php echo $row['mobile_no'];?></td>
    <td>
    <?php echo $row['address'];?>
    </td> 
    <td><?php echo $row['price'];?></td>
    
     <td>
     <img src="admin/ambulance_service/<?php echo $row['picture']; ?>" alt="" width="120" height="50">
    </td>
	<td><?php echo $row['date'];?></td>
    <td>
    	<?php 
    	
    	if ($row['status']=="0") {
    		echo "<h2 style='color:red;font-size:20px;'>".'Pending'."</h2>";

    	}
    	else if($row['status']=="1"){
    		//echo "Shifted";
    		//echo "<h2 style='color:green;font-size:20px;'>".'Shifted'."</h2>";
    		?>
    		<a href="ambulance_order_list.php?sifted_id=<?php echo $row['id'];?>" onclick="return confirm('Are You Sure To Confirm')">Confirm</a>
    		<?php } else{

    		echo "<h2 style='color:green;font-size:20px;'>".'Confirm'."</h2>";
    		}


    	?>
    	
    	
    </td>
    	
		<!--?php 
   		 if ($row['status']=="2") {
     	?>
     	<td><a href="" onclick="return confirm('Are You Sure To Delete')">X</a></td>
     	<!--?php } else{
		?>
		<td>N/A</td>
		<!--?php } ? -->
		
		
   
    
    
    
  </tr>

<?php $i++;} ?>
</table>

		</div>


    </div>




</body>
</html>
