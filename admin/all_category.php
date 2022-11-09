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
		margin-top: -630px;
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

<?php require_once('inc_file/sidebar.php');?>
<div class="content">

	<table id="customers" class=" table table-striped table-bordered table-hover table-responsive" style="width:100%">
		
		<thead>
            <tr>
				<th width="2%">Sl</th>
				<th>Category Name</th>
				
				<th width="25%" text-align="center">Action</th>
            </tr>
        </thead>
		<?php
  
	$sql = "select * from medicine_list";
	$result = mysqli_query($conn,$sql);
	$count = 1;
	foreach($result as $output){
  //print_r ($output['name']);
  //echo "<br>";
  //echo $count."&nbsp;";
 
  ?>
		<tr>
		
			<td><?php echo $count;?></td>
			<td><?php echo $output['medicine_name'];?></td>
			<td>
				
				<!-- <a href="user_edit.php?edit_id=<?php echo $output['id'];?>">Edit</a> | -->
				<a href="medicine_category_delete.php?delete_id=<?php echo $output['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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