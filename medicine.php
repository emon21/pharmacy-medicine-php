<?php require_once('inc_file/header.php'); ?>

<?php 
$sid = session_id();
//echo $sid;
if (isset($_GET['details_id'])) {
  
  $id = $_GET['details_id'];
  
    if (isset($_POST['cart'])) {
         
       
        //$pro_id = $_POST['id'];
        $quentity = 1;
        //$quentity = $_POST['quentity'];

      $sel = "SELECT * FROM all_medicine WHERE id='$id'";
      $result = mysqli_query($db,$sel);
      $row = mysqli_fetch_assoc($result);

      $pro_name =  $row['medicine_name'];
      $pro_img  =  $row['img'];
     // $pro_name =  $row[''];

      $total_price = $quentity * $row['price'];

      $check_qry = "SELECT * FROM cart WHERE  pro_id='$id' AND session_id='$sid'";

      $qrye = mysqli_query($db,$check_qry);
	  $totalrow= mysqli_num_rows($qrye);
	if($totalrow > 0)
      {
      	 echo "<script>
     
    window.alert('Data Alreday Insert !!');
    window.location.href='cart.php';
    </script>";
      }

      else{


	  $ins_qry ="INSERT INTO cart(session_id,pro_id,pro_name ,pro_qty,pro_price,pro_img) VALUES ('$sid','$id','$pro_name','$quentity','$total_price','$pro_img')";

	  $run_qry = mysqli_query($db,$ins_qry);
		  if ($run_qry) {
		    header("location: cart.php");
		  }
		  else
		  {
		  	echo "Something Wrong...!!";
		  }
		}

 	}

}
 ?>
	<section id="medicine">
		<div class="wrapper">
			<h2>All Medicine</h2>


		
            

                            <div class="medicine_side_bar">
							
									<ul>
											<li><a href="medicine.php">All Medicine</a></li>
									</ul>
                            	<?php 
                                  require_once('dbcon.php');
                                  

                                  $sel_qry = mysqli_query($db,"select * from medicine_list");
                                  while ($run = mysqli_fetch_assoc($sel_qry)) {
                                    
									$id = $run['id'];
									$result=mysqli_query($db,"SELECT * FROM medicine_list where id='$id'"); 
									$cont=mysqli_num_rows($result);

                             ?>
                            	 <ul>
									
                                <li><a href="medicine.php?id=<?php echo $run['id']?>">
                                  <?php echo $run['medicine_name'];?>
                                </a></li>
                                 
                            </ul>
                               <?php } ?>
                            </div>
                               


			<div class="all_medicine">
				

				 <?php 
					require_once('dbcon.php');
						
						if(isset($_GET['id'])){
							$id = $_GET['id'];
							$show="SELECT * FROM all_medicine where medicine_id='$id'";
						}

						else{
							$show="SELECT * FROM all_medicine"; 
							//$ser="" ; 
						}
						
						$ser_result=mysqli_query($db,$show); 
						$r = mysqli_num_rows($ser_result);
						
						if($r==0)
						{
							echo "<h2 style='color:red;font-size:22px;text-align:center'>Data not found...</h2>";
						}
						
						 while($row=mysqli_fetch_array($ser_result)){

							$id=$row['id'];
						      if($id !='')
						      {
						?>
					
						
				<div class="medicine_iteam">
					<form action="medicine.php?details_id=<?php echo $row['id'] ?>" method="post">
					<img src="admin/medicine_pic/<?php echo $row['img'];?>" alt="">

					<div class="medicine_info">
						<div class="medicine_con">
							<h2>
								<?php echo $row['medicine_name'];?></h2>
							<p>Price :<?php echo $row['price'];?>/-</p>
						</div>
					
						<!-- <a href="medicine.php?details_id=<?php echo $row['id'] ?>" class="btn_view" name="cart">Buy</a> -->

						<input type="submit" value="Buy Now" class="btn_buy" name="cart">

						

						
					</div>
</form>
					
				</div>
				
				 <?php 
						}
						else{
							echo "<h2 style='color:red;font-size:22px;text-align:center'>Data not found...</h2>";
						}						
						
						}
						?>

		</div>
	</div>
</section>

	

	<?php require_once('inc_file/footer.php'); ?>