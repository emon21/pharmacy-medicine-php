<?php require_once('inc_file/header.php');


 ?>

	
	<section id="medicine">
		<div class="wrapper">
			<h2>Medicine Page</h2>
	<?php require_once('dbcon.php');

			if(isset($_GET['details_id'])){
				$id = $_GET['details_id'];
				$show="SELECT * FROM all_medicine where id='$id'";

				$ser_result=mysqli_query($db,$show); 

				while($row=mysqli_fetch_array($ser_result)){
	

		 ?>

	<div class="medicinedetails">
		
		<div class="medicine_img">
			<img src="admin/medicine_pic/<?php echo $row['img'];?>" alt="">
		</div>

		<div class="medicine_details_info">
			
			<?php echo $row['medicine_name'];?>
			<p>Price :<?php echo $row['price'];?>/-</p>
			<form action="details.php?details_id=<?php echo $row['id'] ?>" method="post">
				
				<input type="number" name="quentity" class="form_input">
				<input type="submit" value="Buy Now" class="buy_now" name="cart">
			</form>
		</div>

		<div class="medicine_dec">
			<div class="product_details">
				<h2>Product Details</h2>
			</div>
			<p><?php echo $row['medicine_des'];?></p>
		</div>
		
	</div>
	<?php }} ?>
				
	</div>
</section>

	

	<?php require_once('inc_file/footer.php'); ?>