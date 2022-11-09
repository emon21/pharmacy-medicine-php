<?php require_once('inc_file/header.php'); ?>

	
	<section id="medicine">
		<div class="wrapper">
			

			<div class="medicine_search">
				 <?php 
					require_once('dbcon.php');
					
					if(isset($_POST['btn_ser'])){
						
	/*
	SELECT * FROM all_medicine where  medicine_name='Napa' BETWEEN 2019-10-01 AND 2019-10-30
	*/
	$search = $_REQUEST['search'];
	$sql = "SELECT * FROM all_medicine where medicine_name LIKE'$search'";
	 
		$ser_result = mysqli_query($db,$sql);
		$count = mysqli_num_rows($ser_result); 
					if($count == 0){
		
    echo "<h2 style='text-align:center;color:red;font-size:20px;padding:22px;'>".'No Data Found'."</h2>";

    }else{
		
					while($row = mysqli_fetch_assoc($ser_result)){
					
				  ?>
				<div class="medicine_iteam">
					<img src="admin/medicine_pic/<?php echo $row['img'];?>" alt="">

					<div class="medicine_info">
						<h2><?php echo $row['medicine_name'];?></h2>
						<h4><?php echo $row['medicine_des'];?></h4>
						<p><?php echo $row['price'];?>/-</p>
					
						<!--button class="btn_buy">Buy Now</button-->

					</div>
					
				</div>

	<?php }}}?>

		</div>
	</div>
</section>

	

	<?php require_once('inc_file/footer.php'); ?>