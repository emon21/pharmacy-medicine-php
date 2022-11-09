<?php require_once('inc_file/header.php');
require_once('prescription_process.php'); 

 ?>
	<style>


.pass_label {
	color: #0f86f5;
	font-size: 18px;
	/* margin: 0 auto; */
	margin-left: 363px;
	height: 21px;
	/* padding-bottom: 25px; */
	width: 360px;
	/* text-transform: uppercase; */
	/* background: aliceblue; */
	float: left;
	margin-bottom: 10px;
	text-align: left;
	font-weight: bold;
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

.error2 {
	margin-top: -20px;
	float: left;
	margin-left: 379px;
	text-align: left;
	color: red;
	font-size: 18px;
	height: 26px;
	line-height: 41px;
}

.email {
	margin-top: 68px;
	float: left;
	margin-left: -371px;
	text-align: left;
	color: red;
	font-size: 21px;
	height: 26px;
	line-height: 41px;
}

.massage {
	margin-top: -3px;
	float: left;
	margin-left: 18px;
	text-align: left;
	color: red;
	font-size: 21px;
	height: 26px;
	line-height: 41px;
}



	</style>
	<section id="prescription">
		
	<h2>Perscription US</h2>

		<div class="all_per">
		
				
					<div class="per_info">
						
						<h2>Prescription Upload</h2>
						
				<form action="" method="post" enctype="multipart/form-data">
						
					
					
					
					<div class="left">


			
						<span class="per_label">Name :</span>
							<input type="text" name="con_name" placeholder="Enter Your Name..." class="input_box4" value="<?php echo $con_name;?>">
							
		 	 <span class="error"><?php echo $error['con_name']; ?></span>

						</div>
						
					<div class="right">
						<label class="per_right">Mobile Number :</label>
							<input type="text" name="mob_no" placeholder="Enter Your Mobile No..." class="input_box5" value="<?php echo $mob_no;?>">
							 <span class="error2"><?php echo $error['mob_no']; ?></span>
						</div>
						
						<div class="left">
						<label class="per_left2">Email :</label>
						<input type="text" name="con_email" placeholder="Enter Your Email..." class="input_box6" value="<?php echo $con_email;?>">
						 <span class="email"><?php echo $error['con_email']; ?></span>
						</div>
						
					<div class="right">
						<label class="per_right2">Doctor Prescription :</label>
						<input type="file" name="pres" class="input_box7" value="<?php echo $pres;?>">
						<span class="error2"><?php echo $error['pres']; ?></span>
						</div>
						
						
					<div class="left">
						<label class="text_label">If Any Query :</label>
					<textarea  rows="5" placeholder="Your Message...!" name="con_massage" calss="txt_area" value="<?php echo $con_massage;?>"></textarea>
					 <span class="massage"><?php echo $error['con_massage']; ?></span>
						</div>
						


					<input type="submit" name="message_send" id="" value="Send" class="send">
					</form>
					</div>
	
		</div>
		

	</section>

	

	<?php require_once('inc_file/footer.php'); ?>