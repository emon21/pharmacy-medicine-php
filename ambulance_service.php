<?php require_once('inc_file/header.php');

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



.input_box4 {
    margin-top: 47px;
    width: 330px;
    float: left;
    margin-left: -118px;
    border-radius: 0px;
}


.send {
    width: 20%;
    height: 50px;
    background: #15aa61;
    font-size: 24px;
    color: #fbf5f5;
    border: none;
    border-radius: 5px;
    /* padding: 20px; */
    cursor: pointer;
    transition: all .5s;
    float: right;
    margin-top: 8px;
    margin-right: 36px;
    border: 1px solid;
    /* margin-bottom: 20px; */
}

.input_box5 {
    margin-top: -53px;
    width: 330px;
    display: blo;
    float: right;
    margin-left: 175px;
    border-radius: 0px;
}
	</style>
	<section id="prescription">
		
	<h2>Ambulance Service Order Page</h2>

		<div class="all_per">
		
				
					<div class="per_info">
						
					
						
				<form action="" method="post" enctype="multipart/form-data">
						
					
					
					
					<div class="left">


			
						<span class="per_label">Hospital Name :</span>
							<input type="text" name="con_name" placeholder="Enter Your Name..." class="input_box4">
							
		 	 

						</div>
						
					
						
						<div class="left">
						<label class="per_left2">Email :</label>
						<input type="text" name="con_email" placeholder="Enter Your Email..." class="input_box6">
						
						
					<div class="right">
						<label class="per_right">Mobile Number :</label>
							<input type="text" name="mob_no" placeholder="Enter Your Mobile No..." class="input_box5">
							 
						</div>
						
						
					<div class="left">
						<label class="text_label">Address:</label>
					<textarea  rows="5" placeholder="Your Message...!" name="con_massage" calss="txt_area"></textarea>
					
						</div>
						


					<input type="submit" name="message_send" id="" value="Send" class="send">
					</form>
					</div>
	
		</div>
		

	</section>

	<?php 
	require_once('dbcon.php');
	 if(isset($_POST['message_send'])){
		 
		 
		 
		 
		 
	 }
	?>
	
	<?php 

require_once('dbcon.php');

	
if (isset($_POST['message_send'])) {



	//$dept_id = $_POST['dept_id'];
	$con_name = $_POST['con_name'];
	$mob_no = $_POST['mob_no'];
	$con_email = $_POST['con_email'];
	$con_massage = $_POST['con_massage'];
	



	
		$ins_qry = "INSERT INTO ambulance_order(hospital_name,email,mobile_no,address)
		VALUES ('$con_name','$mob_no','$con_email','$con_massage')";
		$qry_run = mysqli_query($db,$ins_qry);
		if ($qry_run) {
			
			echo "<script>
					alert('Our Prescription Upload Successfully.....!!');
					window.location.href='prescription.php';
					</script>";	
			}

		}


 ?>

	<?php require_once('inc_file/footer.php'); ?>