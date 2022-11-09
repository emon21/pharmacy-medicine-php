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
    margin-top: 35px;
	margin-bottom:20px;
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

#ser_date{
	margin-left: 238px;
    margin-top: -630px;
	width:90%;
	
}

	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php require_once('inc_file/sidebar.php');?>
<div class="content">

<form  id="ser_date" action="" method="post">
Start Date: <input type="text" name="start_date">
End Date: <input type="text" name="end_date">
Medicine Name: <input type="text" name="me_name">

<input type="submit" name="btn_ser" value="GO">

</form>

<table id="customers">
  <tr>
    <th>SL</th>
    <th>Medicine Name</th>
    <th>Quentity</th>
    <th>Price</th>
    <th>Total Price</th>
    <th>Date</th>
  
  </tr>
 <?php 
		require_once('conn.php');
	
	 if(isset($_POST['btn_ser'])){
	
	//$me_name = $_REQUEST['me_name'];
	$start_date = $_REQUEST['start_date'];
	$end_date = $_REQUEST['end_date'];
	$medice_name = $_REQUEST['me_name'];
	
	//$sql ="SELECT product_name,quentity,price,date FROM tbl_order where product_name='$medice_name' AND '$start_date' AND '$end_date'";
	 
	 
	$sql ="SELECT product_name,quentity,price,date FROM tbl_order WHERE date BETWEEN '$start_date' AND '$end_date' AND product_name='$medice_name'";
	 }
	 
	 else{
		 
		 
		$sql ="SELECT * FROM tbl_order";
		 
	 }
		 
	 
	 
	 
		$ser_result = mysqli_query($conn,$sql);
		
		$i = 1;
		while($row = mysqli_fetch_assoc($ser_result)){
					
				  ?>

  <tr>
    <td><?php echo $i;$i++;?></td>
    <td><?php echo $row['product_name'];?></td>
    <td><?php echo $row['quentity'];?></td>
    <td><?php echo $row['price'];?></td>
    <td><?php
			
				$tl = $row['quentity'] * $row['price'];

				echo $tl." /-tk";
	
	
	?></td>
    <td>
    <?php echo $row['date'];?>
    </td>
    
  </tr>
	<?php } ?>	

</table>
				  
	 		  
				 
	
</div>

</body>
</html>