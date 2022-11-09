<?php require_once('inc_file/header.php');
//require_once('customer_member_process.php');
require_once('customer_process.php');
 ?>
	

<style type="text/css">

	#register_form {
  width: 37%;
  margin: 100px auto;
  padding-bottom: 30px;
  border: 1px solid #918274;
  border-radius: 5px;
  background: white;
}
	.error {
	color: red;
	font-size: 18px;
	/* margin: 0 auto; */
	margin-left: 363px;
	/* height: 16px; */
	/* padding-bottom: 25px; */
	width: 324px;
	text-transform: uppercase;
}

.pass_label {
	color: #0f86f5;
	font-size: 18px;
	/* margin: 0 auto; */
	margin-left: 5px;
	height: 21px;
	/* padding-bottom: 25px; */
	width: 360px;
	/* text-transform: uppercase; */
	/* background: aliceblue; */
	float: left;
	margin-bottom: 10px;
	text-align: left;
	font-weight: bold;
	margin-top: -112px;
}

span {
	color: red;
	font-size: 19px;
	margin: 1px auto;
	margin-left: 8px;
	height: 30px;
	/* padding-bottom: 55px; */
	width: 660px;
	/* text-transform: uppercase; */
	/* margin-bottom: 43px; */
	margin-top: -63px;
	float: left;
	text-align: left;
}
.form_error input {
  border: 1px solid #D83D5A;
}

.error_info {
	color: #fb2701;
	line-height: 121px;
	font-weight: bold;
	float: left;
	text-align: left;
	margin-left: 9px;
	/* margin-top: -55px; */
	font-size: 18px;
	width: 370px;
	height: 0px;
}

#user_type {
	width: 200px;
	height: 40px;
	text-align: center;
	margin-top: -67px;
	/* padding-top: -27px; */
	float: right;
	margin-right: 220px;
	font-size: 18px;
}

	</style>
	<section id="register">
		
	<div class="wrapper">
		
		<div class="register_box">
		
              
			<div class="box_content">
				<h2>Customer Register From</h2>
				<div class="reg_form">
				
					<form action="" method="post">
					
					<div>
					 
						<span class="user_label">Full Name : </span>
						<input type="text" placeholder="Enter Your Customer Name" class="reg_input_box" name="cus_name" value="<?php echo $cus_name; ?>">
						<span class="error_info">
								<?php echo $error['cus_name']; ?>
									
								</span>
					</div>

					<div>
						<span class="user_label">Address:</span>
						<input type="text" placeholder="Enter Your Address" class="reg_input_box" name="cus_address" value="<?php echo $cus_address; ?>">
						<span class="error_info">
								<?php echo $error['cus_address']; ?>
									
								</span>
					</div>

					<div>
						<span class="user_label">City:</span>
						<input type="text" placeholder="Enter Your City" class="reg_input_box" name="cus_city" value="<?php echo $cus_city; ?>">
						<span class="error_info">
								<?php echo $error['cus_city']; ?>
									
								</span>
					</div>

					<div>
						<span class="user_label">Phone Number:</span>
						<input type="text" placeholder="Enter Mobile Number" class="reg_input_box" name="cus_phone" value="<?php echo $cus_phone; ?>">
						<span class="error_info">
								<?php echo $error['cus_phone']; ?>
									
								</span>
					</div>

					<div>
						<span class="user_label"> E-mail Address :</span>
						<input type="text" placeholder="Enter Your E-mail" class="reg_input_box" name="cus_email" value="<?php echo $cus_email; ?>">
						<span class="error_info">
								<?php echo $error['cus_email']; ?>
									
								</span>
					</div>


					<div>
						<span class="user_label">Password :</span>
						<input type="password" placeholder="Enter Your Password" class="reg_input_box" name="cus_password" value="<?php echo $cus_password; ?>">
						<span class="error_info">
								<?php echo $error['cus_password']; ?>
									
								</span>
					</div>
					
					

					<!--span class="forget">
						<a href="">Forget Password?</a></span-->
					<input type="submit" class="reg_btn" value="Register" name="customer_reg">

					
				</form>

				</div>
			</div>
		</div>
	</div>
	</section>


	<?php require_once('inc_file/footer.php'); ?>