<?php 

	require_once('inc_file/header.php');
	require_once('dbcon.php');
	
	$_SESSION['user_email'] = "";
	//$_SESSION['user_id'] = "";
	$usermail = $_SESSION['user_email'];

	if($usermail==true) {
		header("locatin:home.php");
	}


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
</style>


	
	<section id="medicine">
		<div class="wrapper">
			
			<div class="user_page">
				<div class="customer_login">
					<h2>Existing Customers</h2>
					<p>Sign IN With the From Below </p>
					<form action="user_customer_check.php" method="post">
						<input type="text" placeholder="Enter User Name" name="cus_email" class="cus_login_in">

						<input type="password" placeholder="Enter Password" name="cus_pass" class="cus_login_in">
						<p>Sign IN With the From Below </p>
						<input type="submit" value="Log in" name="customer_login" class="cus_login_btn">
					</form>
					
				</div>
				<div class="border"></div>
				<div class="customer_login">
					<h2>Existing Staff</h2>
					<p>Sign IN With the From Below </p>
					<form action="check_user.php" method="post">
						<input type="text" placeholder="Enter User Name" name="facultyemail" class="cus_login_in">

						<input type="password" placeholder="Enter Password" name="password" class="cus_login_in">
						<p>Sign IN With the From Below </p>
						<input type="submit" value="Log in" name="customer_login" class="cus_login_btn">
					</form>
					
				</div>
			</div>


	</div>
</section>

	

	<?php require_once('inc_file/footer.php'); ?>