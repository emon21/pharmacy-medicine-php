<?php
	require_once('conn.php');

	
	
	$user_name = "";
	$mob_no = "";
	$user_email  = "";
	$user_pass = "";
	$user_type = "";
	

	$error = array('user_name'=>'','mob_no'=>'','user_email'=>'','user_pass'=>'','user_type'=>'');
	
	if(isset($_POST['add_user'])){
		
	$user_name = $_POST['user_name'];
	$mob_no = $_POST['mob_no'];
	$user_email  = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];
	$user_type = $_POST['user_type'];
	//$user_type = "dr";
	
	//$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
		
		//$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i'; 
		//$user_email = (preg_match($regex, $user_email))?
	
		
		$sel_e = "SELECT * FROM reg_user WHERE email='$user_email'";
 		$res_e = mysqli_query($conn,$sel_e);
		
	

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
     $error['user_pass'] = "User Password is Required";
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
			$run_user = mysqli_query($conn,$insert_user);
			
		if($run_user)
				{
					

					echo "<script>
					alert('Our User Insertd Successfully.....!!');
					window.location.href='add_register.php';
					</script>";		
				}

		}
	
}

?>