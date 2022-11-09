<?php 

	require_once('inc_file/header.php');
	require_once('dbcon.php');
	
	$_SESSION['user_email'] = "";
	//$_SESSION['user_id'] = "";
	$usermail = $_SESSION['user_email'];

	if($usermail==true) {
		header("locatin:order.php");
	}

require_once('user_customer_process.php');

?>

<style>

.text-danger-user {
	margin-top: 35px;
	float: left;
	margin-left: -418px;
	text-align: left;
	color: red;
	font-size: 18px;
	height: 26px;
	line-height: 42px;
}


.text-danger-phone {
	margin-top: 35px;
	float: left;
	margin-left: -418px;
	text-align: left;
	color: red;
	font-size: 18px;
	height: 26px;
	line-height: 42px;
}

.text-danger-email {
	margin-top: 35px;
	float: left;
	margin-left: -418px;
	text-align: left;
	color: red;
	font-size: 18px;
	height: 26px;
	line-height: 42px;
}

.text-danger-pass {
	margin-top: 35px;
	float: left;
	margin-left: -418px;
	text-align: left;
	color: red;
	font-size: 18px;
	height: 26px;
	line-height: 42px;
}

.form_error input {
  border: 1px solid #D83D5A;
}

.error {
	margin-top: 78px;
	float: left;
	margin-left: -369px;
	text-align: left;
	color: red;
	font-size: 18px;
	height: 26px;
	line-height: 41px;
}

.form_error span {
	color: red;
	font-size: 16px;
	/* margin: 0 auto; */
	margin-left: 363px;
	height: 19px;
	/* padding-bottom: 25px; */
	width: 660px;
	text-transform: uppercase;
	margin-bottom: 10px;
}

label {
	text-align: left;
	float: left;
	width: 120px;
	height: 35px;
	margin-bottom: 11px;
	margin-top: -55px;
	padding-left: 10px;
	font-size: 24px;
	color: red;
}

.cus_reg_in {
	background: aliceblue;
	width: 398px;
	height: 15px;
	/* float: left; */
	/* margin-top: -5px; */
	/* display: inline-table; */
	border-radius: 0;
	border: 1px solid;
	margin: 5px auto;
	margin-left: 5px;
	/* margin-bottom: 9px; */
	margin-top: 25px;
}
</style>


	
	<section id="medicine">
		<div class="wrapper">
			
			<div class="customer_page">
				<!-- <div class="customer_login">
					<h2>Existing Customers</h2>
					<p>Sign IN With the From Below </p>
					<form action="user_customer_check.php" method="post">
						<input type="text" placeholder="Enter User Name" name="cus_email" class="cus_login_in">

						<input type="password" placeholder="Enter Password" name="cus_pass" class="cus_login_in">
						<p>Sign IN With the From Below </p>
						<input type="submit" value="Sign IN" name="customer_login" class="cus_login_btn">
					</form>
					
				</div> -->
				<div class="customer_reg">
					<h2>Register New Customers</h2>
				
					<div class="customer_reg_form">


						
						<form action="" method="post">
							<label for="">Address:</label>
						<input type="text" placeholder="Enter Name" name="cus_name" class="cus_reg_in" value="<?php echo $cus_name; ?>">
							<!-- <span class="text-danger-user">
							<?php echo $error['cus_name']; ?>
							</span> -->
							<span class="text-danger-user">
								<?php echo $error['cus_name']; ?>
									
								</span>
						<label for="">Address:</label>
						<input type="text" placeholder="Enter Address" name="cus_address" class="cus_reg_in" value="<?php echo $cus_address; ?>">
						<label for="">Address:</label>
						<input type="text" placeholder="Enter City" name="cus_city" class="cus_reg_in" value="<?php echo $cus_city; ?>">

						<!-- <input type="text" placeholder="Enter Country" name="cus_country" class="cus_reg_in" value="<?php echo $cus_country; ?>"> -->

						<!-- <input type="text" placeholder="Enter zip code" name="cus_zip_code" class="cus_reg_in" value="<?php echo $cus_zip_code; ?>"> -->
						<label for="">Address:</label>
						<input type="text" placeholder="Enter Phone" name="cus_phone" class="cus_reg_in" value="<?php echo $cus_phone; ?>">

							<span class="text-danger-phone">
								<?php echo $error['cus_phone']; ?>
							</span>
						<label for="">Address:</label>
						<input type="text" placeholder="Enter E-mail" name="cus_email" class="cus_reg_in" value="<?php echo $cus_email; ?>">
							<span class="text-danger-email">
								<?php echo $error['cus_email']; ?>
							</span>
						<label for="">Address:</label>
						<input type="password" placeholder="Enter Password" name="cus_password" class="cus_reg_in" value="<?php echo $cus_password; ?>">

							<span class="text-danger-pass">
								<?php echo $error['cus_password']; ?>
							</span>
						
						<input type="submit" value="Create Account" name="customer_reg" class="cus_reg_btn">
					</form>
					</div>
				</div>
			</div>


	</div>
</section>

	

	<?php require_once('inc_file/footer.php'); ?>