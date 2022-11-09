<?php require_once('inc_file/header.php'); ?>
	
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100% !important;
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

	<section id="ambulance">
		<div class="wrapper">
			<h2>Ambulance List</h2>
                       


			<div class="all_ambulance">
				

				 <?php 
					require_once('dbcon.php');
					
						if(isset($_GET['viewID'])){
							
							$viewID = $_GET['viewID'];
							$sel="SELECT * FROM ambulance_service  WHERE id='$viewID'";
							$run = mysqli_query($db,$sel);
							
							
						
					
	$count = 1;
	while($row = mysqli_fetch_assoc($run)){
?>
					
						
				<div class="ambulance_iteam">
					<form action="medicine.php?details_id=<?php echo $row['id'] ?>" method="post">
					<img src="admin/ambulance_service/<?php echo $row['picture']; ?>" alt="">

					<div class="ambulance_info">
						
							<h2><?php echo $row['hospital_name']; ?></h2>
							<p>Rent : <?php echo $row['price']; ?>/-</p>
							<p>Address : <?php echo $row['address']; ?></p>
							<p>Mobile No : <?php echo $row['phone_number']; ?>6</p>
						<?php 
					if (isset($_SESSION['user_id'])) { ?>
						
						<a href="ambulance_order.php?orderID=<?php echo $row['id'] ?>" class="ambulance_btn" name="cart">Order Now</a> 

						
						

					<?php } else{ ?>

					<a href="user_login.php" class="ambulance_btn">login</a>
						
					<?php } ?>
						
						
						<!-- <input type="submit" value="Order Now" class="ambulance_btn" name="cart"> -->

					</div>
</form>
					
				</div>
				
				 <?php } } ?>

		</div>
	</div>
</section>

<?php require_once('inc_file/footer.php'); ?>

