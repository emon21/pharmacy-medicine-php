<?php

require_once('conn.php');

	if(isset($_POST['add_user'])){
	
	$bkash_no 		= $_POST['bkash_no'];
	$txt_id 		= $_POST['txt_id'];
	$amount  		= $_POST['amount'];
	
	$ins_qry ="INSERT INTO bkash(bikash_no,transition_no,Total_price) VALUES ('$bkash_no','$txt_id','$amount')";
	
	$run_user = mysqli_query($conn,$ins_qry);
	
	if($run_user)
				{
					echo "<script>
					alert('Our bikash NO Insertd Successfully.....!!');
					window.location.href='biash_pay.php';
					</script>";		
				}
	
	}
?>