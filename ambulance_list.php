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
			
			<div class="all_ambulance">
				

				 <?php 
					require_once('dbcon.php');
						
					$sel="SELECT * FROM ambulance_service  order BY id DESC limit 8 ";
					$run = mysqli_query($db,$sel);
	$count = 1;
	while($row = mysqli_fetch_assoc($run)){
?>
					
						
				<div class="ambulance_iteam">
					<form action="medicine.php?details_id=<?php echo $row['id'] ?>" method="post">
					<img src="admin/ambulance_service/<?php echo $row['picture']; ?>" alt="">

					<div class="ambulance_info">
						
						<h2><?php echo $row['hospital_name']; ?></h2>
							
						<a href="ambulance_list_view.php?viewID=<?php echo $row['id'] ?>" class="ambulance_btn" name="cart">View Now</a> 

						<!-- <input type="submit" value="Order Now" class="ambulance_btn" name="cart"> -->

					</div>
</form>
					
				</div>
				
				 <?php } ?>

		</div>
	</div>
</section>

<?php require_once('inc_file/footer.php'); ?>

