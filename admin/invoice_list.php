<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/admin.css" />
</head>
<body>

	
<?php require_once('inc_file/sidebar.php');?>
<div class="content">

		<table id="example" class="table table-striped table-bordered table-hover table-responsive" style="width:100%">
				
				<thead>
		            <tr>
						<th width="2%">ID</th>
						<th>Invoice ID</th>
						<th>Product</th>
						<th>Quentity</th>
						<th>Price</th>
						<th>Date</th>
						
		            </tr>
		        </thead>
		<?php

 		require_once('conn.php');
		
		$sql ="SELECT * FROM invoice";
		$result = mysqli_query($conn,$sql);
		$count = 1;
		foreach($result as $output){ ?>
		        <tr>
				
					<td><?php echo $count;?></td>
					<td><?php echo $output['invoiceID'];?></td>
					<td><?php echo $output['product_name'];?></td>
					<td><?php echo $output['product_price'];?></td>
					<td><?php echo $output['product_qty'];?></td>
					<td><?php echo $output['date_of_invoice'];?></td>
					
			
				</tr>
				<?php $count++;  }
   ?>
			</table>
</div>
	
	

	
</body>
</html>