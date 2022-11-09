<?php 

require_once('conn.php');

?>
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
	
	</style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php require_once('inc_file/sidebar.php');?>
<div class="content">
<div class="all_info">

	<div class="box_info">
	<?php
		
		$res = "select count(*) AS total from prescription_upload";
		$info =mysqli_query($conn,$res);
		$count=mysqli_fetch_assoc($info);
		$res=$count['total'];
		
		?>
		<h2>All prescription &nbsp;&nbsp;( <?php echo $res;?> )</h2>
	<span>View >></span><a href="prescription_list.php" class="btn_box">More</a>
	</div>

	<div class="box_info">
		<?php
		
		$res = "select count(*) AS total from reg_user";
		$info =mysqli_query($conn,$res);
		$count=mysqli_fetch_assoc($info);
		$res=$count['total'];
		
		?> 
		<h2>All User &nbsp;&nbsp;( <?php echo $res;?> )</h2>
	<span>View >></span><a href="all_user_list.php" class="btn_box">More</a>
	</div>
	
	<div class="box_info">
	<?php
		//$res = "select * from area_list";
		//$res = "select count(*) AS total from area_list where sex='male'";
		$res = "select count(*) AS total from medicine_list";
		$info =mysqli_query($conn,$res);
		//$result=mysqli_query($conn,"SELECT * FROM book_list"); 
		$count=mysqli_fetch_assoc($info);
		//$num_rows=($count);
		$res=$count['total'];
		//$in=$num_rows
		//echo $res;
		?>
		<h2>All Medicine &nbsp;&nbsp;( <?php echo $res;?> )</h2> 
		
	<span>View >></span><a href="medicine_list.php" class="btn_box">More</a>
	</div>
	
	<div class="box_info">
		<!-- <?php
		
		$res = "select count(*) AS total from ambulance_service";
		$info =mysqli_query($conn,$res);
		$count=mysqli_fetch_assoc($info);
		$res=$count['total'];
		
		?> -->
		<h2>All Ambulance Service &nbsp;&nbsp;( <?php echo $res;?> )</h2>
	<span>View >></span><a href="ambulance_service_list.php" class="btn_box">More</a>
	</div>

</div>
	
	<center><h2>WelCome To Admin DashBoard</h2></center>
	
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