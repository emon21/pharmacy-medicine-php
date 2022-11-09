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
	.dataTables_wrapper {
        width: 90%;
        margin: 0 auto;
    }

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    float: left;
    margin-left: 180px;
    margin-top: -596px;
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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php require_once('inc_file/sidebar.php');?>
<div class="dataTables_wrapper">
	
<table id="customers">
  <tr>
    <th>SL</th>
    <th>User Name</th>
    <th>User Password</th>
    <th>User Type</th>
    <th>Action</th>
  
  </tr>
  <?php 

      //$userid = $_SESSION['user_id'];

     $show = "SELECT * FROM admin_user";

    // $show = "SELECT * FROM tbl_order WHERE customer_id='$userid' ORDER BY product_id DESC";
        
        $ser_result=mysqli_query($conn,$show); 
        $i = 1;
       
        while($row=mysqli_fetch_array($ser_result)){
         

     ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $row['user_name'];?></td>
    
     <td><?php echo $row['user_pass'];?></td>
    <td>
    <?php echo $row['user_type'];?>
    </td>
    
      
    <td>
    	<a href="user_list_edit.php?edit_id=<?php echo $row['id']?>" class="btn btn-danger">Edit</a> 
    	<a href="delete_user.php?del_id=<?php echo $row['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure Delete');">Delete</a>

    	
   </td>
    
    
    
  </tr>

<?php $i++;} ?>
</table>

</div>	


</body>
</html>