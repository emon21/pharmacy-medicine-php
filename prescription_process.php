<?php 

require_once('dbcon.php');

	$con_name = "";
	$mob_no = "";
	$con_email = "";
	$con_massage = "";
	$icon_image = "";

	$error = array('con_name'=>'','mob_no'=>'','con_email'=>'','con_massage'=>'','pres'=>'');

if (isset($_POST['message_send'])) {



	//$dept_id = $_POST['dept_id'];
	$con_name = $_POST['con_name'];
	$mob_no = $_POST['mob_no'];
	$con_email = $_POST['con_email'];
	$con_massage = $_POST['con_massage'];
	


	//image insert into db
			
			 
	$icon_image = $_FILES['pres']['name'];
	$icon_image_tmp = $_FILES['pres']['tmp_name'];
	
	
	//$cur_date = date('Y-m-d');
	
	//move_uploaded_file($image_tmp,"./images/$post_image");

	move_uploaded_file($icon_image_tmp,"upload_file/$icon_image");
	
	
	$sel_qry = "SELECT * FROM prescription_upload WHERE email='$con_email'";
	$qry = mysqli_query($db,$sel_qry);

	
	 if (empty($_POST['con_name'])) {
   			 $error['con_name'] = "Name is Required";
		  }
		  else{
		    $con_name = $_POST['con_name'];
		    if (!preg_match('/^[a-zA-Z\s]*$/',$con_name)) {
		     $error['con_name'] = "Name must be letter allowed";
		    }
		   // echo htmlspecialchars($_POST['user_name']);
		  }

        
        $mob_no = $_POST['mob_no'];
 	  if (empty($mob_no)) {
 		   $error['mob_no'] = "Mobile Number is Required";
		  }

	  else{

	   if(!is_numeric($mob_no))
	    {
	   $error['mob_no'] = "Only Number";
	    //echo "<script>alert('$message')</script>";
	    }
	     
	    else if(strlen($mob_no) !=11) {
	        $error['mob_no'] = " Only 11 digit Number";
	    } 
	   // echo htmlspecialchars($_POST['mob_no']);
	  }
   

	if (empty($_POST['con_email'])) {
     $error['con_email'] = "E-mail is Required";
 		 }

 	 else{
		    $con_email = $_POST['con_email'];
		    if (!filter_var($con_email,FILTER_VALIDATE_EMAIL)) {
		      $error['con_email'] = "E-mail Must be a >> this Format abc@mail.com";
		     // $error['user_email'] = "email must be a valid email";
		    }

    else if(mysqli_num_rows($qry) > 0) {

 		$error['con_email'] = "Sorry !! Your E-mail IS Alreday Taken";
 		// echo "<script>
         
      //  window.alert('Sorry !! Your E-mail IS Alreday Taken')
       // </script>";
	
	
 		 }
    //echo htmlspecialchars($_POST['user_email']);
  }

  if (empty($icon_image)) {
 		   $error['pres'] = "File is Required";
		  }

    if (empty($_POST['con_massage'])) {
     $error['con_massage'] = "Massage is Required";
  }


   if (array_filter($error)) {
    
     // echo "error in from";
     // echo "<script>// window.location.href='user_customer.php';
     echo "<script>
    window.alert('Data Not  Insert !! Please Fill up the From');
   
    </script>";

  }	

       

	else{
		$ins_qry = "INSERT INTO prescription_upload(name,mob_no,email,query,file) VALUES ('$con_name','$mob_no','$con_email','$con_massage','$icon_image')";
		$qry_run = mysqli_query($db,$ins_qry);
		if ($qry_run) {
			
			echo "<script>
					alert('Our Prescription Upload Successfully.....!!');
					window.location.href='prescription.php';
					</script>";	
			}

		}
}

 ?>