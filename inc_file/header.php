<?php require_once('./dbcon.php');

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home :: Page</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">

	<!-- Owl carousel CSS -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/design.css">
	
</head>
<body>
	<header id="top_header">
		<div class="top_bar">
			<div class="wrapper">
				<div class="left">
					<i class="fa fa-phone"></i>&nbsp; 01755173762 &nbsp;|&nbsp; 
					<i class="fa fa-envelope-open"></i>&nbsp; E-mail: info@BDpharmacy.com
				</div>
				<div class="topmenu">
				<ul>
					<?php 
					if (isset($_SESSION['user_id'])) { ?>
						Hi! <?php echo $_SESSION['cus_name'];?>
						<li><a href="logout.php">Logout</a></li>

					<?php } else{ ?>

						<li><a href="customer.php">Register</a></li>
						<li><a href="user_login.php">Login</a></li>
					<?php } ?>
					
				</ul>
			</div>
			</div>
		</div>

		<div class="main_area">
			<div class="wrapper">
				<div class="logo">
					<img src="images/parmacy_logo.png" alt="">
					<h2>Pharmacy BD</h2>
				</div>
				<div class="search">
					<form action="search.php" method="post">
					<!-- 	<input type="text" placeholder="Searching Your Madicen...!!"><input type="submit" class="search_btn"><i class="fa fa-search"></i> -->
					
            <input type="text" placeholder="Searching Your Medicine...!!" name="search">
          
				<button type="submit" name="btn_ser" class="search_btn">
			
			<i class="fa fa-search"></i></button>
        
					</form>
					
					
	

				</div>


				<div class="boking"><?php
		
		$res = "select count(*) AS total from cart";
		$info =mysqli_query($db,$res);
		$count=mysqli_fetch_assoc($info);
		$res=$count['total'];
		
		?>

		<i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart ( <?php echo $res;?> )


				</div>
			</div>
		</div>
		
		<div class="wrapper">
			<div class="main_menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="medicine.php">Medicine</a></li>
					<li><a href="ambulance_list.php">Ambulance list</a></li>
					<li><a href="contact_us.php">Contact US</a></li>
					<!--li><a href="prescription.php">Prescription Upload</a></li-->

					<?php 
						require_once('./dbcon.php');
						$sid = session_id();

						$showtab = "SELECT * FROM cart WHERE session_id='$sid'";
						   $tab = mysqli_query($db,$showtab);
						    $totalrow= mysqli_num_rows($tab);
						    if($totalrow)
						      {

						     ?>
					

						<li><a href="cart.php">Cart</a></li>
							
						<?php } ?>

						<?php 
						require_once('./dbcon.php');
						$sid = session_id();

						$showtab = "SELECT * FROM cart WHERE session_id='$sid'";
						   $tab = mysqli_query($db,$showtab);
						    $totalrow= mysqli_num_rows($tab);
						    if($totalrow)
						      {

						     ?>
					

						<li><a href="payment.php">Payment</a></li>
							
						<?php } ?>


						<?php 
					if (isset($_SESSION['user_id'])) { ?>
						
						<li><a href="order.php">Order</a></li>
						<li><a href="customer_profile.php">Profile</a></li>

					<?php }?>

						

					
					<!-- <?php 
						if (isset($_SESSION['user_email'])) {?>

							<li><a href="customer_logout.php">logout</a></li>
							<?php
						 }

						 else {
						  	
						  ?>
						<li><a href="user_customer.php">login</a></li>
							
						
						<?php } ?> -->
				</ul>
			</div>
		</div>
	</header>