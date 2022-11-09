<?php require_once('conn.php');?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home :: Page</title>
	<link rel="stylesheet" href="css/admin.css" />
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" /-->
	<style type="text/css">
	div.dataTables_wrapper {
        width: 98%;
        margin: 0 auto;
    }
	#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    float: left;
    margin-left: 238px;
    margin-top: -630px;
}
	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="main_container">

</div>
<?php require_once('inc_file/sidebar.php');?>
<div class="content">

	<table id="customers" class="table table-striped table-bordered table-hover table-responsive" style="width:100%">
		
		<thead>
            <tr>
				<th width="2%">ID</th>
				<th>Date</th>
				<th>Product</th>
				<th>Quentity</th>
				<th>Price</th>
				<th>Cus ID</th>
				<th>Statuc</th>
				<th width="15%" text-align="center">Action</th>
            </tr>
        </thead>
		<?php
  
	$sql = "SELECT tbl_order.id,customer.cus_name,customer.cus_city,tbl_order.date,tbl_order.product_name,tbl_order.quentity,tbl_order.price,tbl_order.status,tbl_order.customer_id FROM customer,tbl_order WHERE tbl_order.customer_id=customer.id";
	
	//$sql = "SELECT * FROM tbl_order";
	$result = mysqli_query($conn,$sql);
	$count = 1;
	foreach($result as $output){
  //print_r ($output['name']);
  //echo "<br>";
  //echo $count."&nbsp;";
 
  ?>
		<tr>
		
			<td><?php echo $count;?></td>
			<td><?php echo $output['date'];?></td>
			<td><?php echo $output['product_name'];?></td>
			<td><?php echo $output['quentity'];?></td>
			<td><?php echo $output['price'];?></td>
			<td><?php echo $output['customer_id'];?></td>
			<td><a href="customer_details.php?cus_id=<?php echo $output['customer_id'];?>">View Details</a>
			 <!--a href="product_details.php?cus_id=<?php echo $output['customer_id'];?>">View Product</a-->

			</td>
			<!--td><?php echo $output['user_type'];?></td-->
			<!--td><?php 
					if($output['user_type']=='Active'){
						echo"<p style='color:green'>Active</p>";
						
					}
					else{
						echo"<p style='color:red'>Inactive</p>";
					}
			
			
			?></td-->
			<!-- <td>
				<a href="user_status.php?status_id=<?php echo $output['id'];?>">Status</a> |
				<a href="user_edit.php?edit_id=<?php echo $output['id'];?>">Edit</a> |
				<a href="user_delete.php?delete_id=<?php echo $output['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
			</td> -->
			<td>
				<?php 
    	
	    		if ($output['status']=="0") {?>
					<a href="status.php?status_id=<?php echo $output['id'];?>">Shifted</a>
	    		<?php }
	    		else if($output['status']=="1")
	    		{ ?>
					<p>Pending</p>
				<?php } 

				else{
				
				?>
				<a href="status.php?del_id=<?php echo $output['id'];?>">Remove</a>
			<?php }?>




			</td>

		</tr>
		<?php
 $count++;
}

  ?>
	</table>
	
</div>
<!--script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/dataTables.min.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
    $('#example').DataTable();
		} );
	</script-->
</body>
</html>