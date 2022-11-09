<?php require_once('inc_file/header.php');
require_once('reg_member_process.php');
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
	/* font-size: 16px; */
	margin: 1px auto;
	margin-left: -790px;
	height: 30px;
	/* padding-bottom: 55px; */
	width: 660px;
	/* text-transform: uppercase; */
	/* margin-bottom: 43px; */
	margin-top: -40px;
	float: left;
}

.form_error input {
  border: 1px solid #D83D5A;
}

.error_info {
	color: #fb2701;
	line-height: 115px;
	font-weight: bold;
	/* float: left; */
	text-align: left;
	margin-left: 9px;
	margin-top: -140px;
	font-size: 18px;
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
				<h2 >Register Page</h2>
				<div class="reg_form">
				
					
					<div class="reg_info">
						<p>DR Register</p>
					<a href="dr_from.php" class="btn_cust">Link</a>
					</div>

					<div class="reg_info">
						<p>Pharmest Register</p>
					<a href="phapharmaest.php" class="btn_cust">Link</a>
					</div>

					<div class="reg_info">
						<p>Customer Register</p>
					<a href="user_customer.php" class="btn_cust">Link</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	</section>


	<?php require_once('inc_file/footer.php'); ?>