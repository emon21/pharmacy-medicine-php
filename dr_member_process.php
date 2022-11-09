<?php
	require_once('dbcon.php');

	
	
	$user_name = "";
	$mob_no = "";
	$user_email  = "";
	$user_pass = "";
	

	$error = array('user_name'=>'','mob_no'=>'','user_email'=>'','user_pass'=>'');
	
	if(isset($_POST['add_user'])){
		
	$user_name = $_POST['user_name'];
	$mob_no = $_POST['mob_no'];
	$user_email  = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];
	$user_type = "dr";
	
	//$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
		
		//$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i'; 
		//$user_email = (preg_match($regex, $user_email))?
	
		
		$sel_e = "SELECT * FROM reg_user WHERE email='$user_email'";
 		$res_e = mysqli_query($db,$sel_e);
		
	

	 if (empty($_POST['user_name'])) {
   			 $error['user_name'] = "User Name is Required";
		  }
		  else{
		    $user_name = $_POST['user_name'];
		    if (!preg_match('/^[a-zA-Z\s]*$/',$user_name)) {
		     $error['user_name'] = "User Name must be letter allowed";
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
   

	if (empty($_POST['user_email'])) {
     $error['user_email'] = "User E-mail is Required";
 		 }

 	 else{
		    $user_email = $_POST['user_email'];
		    if (!filter_var($user_email,FILTER_VALIDATE_EMAIL)) {
		      $error['user_email'] = "email must be a >> this format abc@mail.com";
		     // $error['user_email'] = "email must be a valid email";
		    }

    else if(mysqli_num_rows($res_e) > 0) {

 		$error['user_email'] = "Sorry !! Your E-mail IS Alreday Taken";
 		// echo "<script>
         
      //  window.alert('Sorry !! Your E-mail IS Alreday Taken')
       // </script>";
	
	
 		 }
    //echo htmlspecialchars($_POST['user_email']);
  }

    if (empty($_POST['user_pass'])) {
     $error['user_pass'] = "user Password is Required";
  }


     if (array_filter($error)) {
    
     // echo "error in from";
     // echo "<script>// window.location.href='user_customer.php';
     echo "<script>
    window.alert('Data Not  Insert !! Please Fill up the From');
   
    </script>";

  }	

	else{

			$insert_user = "insert into reg_user(user_name,mob_no ,email,password,user_type) VALUES ('$user_name','$mob_no','$user_email','$user_pass','$user_type')";
			$run_user = mysqli_query($db,$insert_user);
			
		if($run_user)
				{
					//$success_message = "User Has Been Inserted...";
					//echo '<script>alert($success_message)</script>';
					//header('location:register.php');

					echo "<script>
					alert('Our User Insertd Successfully.....!!');
					window.location.href='dr_from.php';
					</script>";		
				}

		// 		$update = mysqli_query($db,$up_qry);

	 //      if ($update) {

	 //          echo "<script>
	         
	 //        window.alert('Data Inserted Successfully ...!!');
	 //        window.location.href='user_customer.php';
	 //        </script>";
	       
		// }
				
			// exit();
	}
	
}

?>