<?php 

require_once('dbcon.php');



	$name 		= "";
	$email 		= "";
	$subject 	= "";
	$massage 	= "";

	$error = array('name'=>'','email'=>'','con_Subject'=>'','massage'=>'');

if(isset($_POST['message_send'])){
	
//$dept_id = $_POST['dept_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['con_Subject'];
	$massage = $_POST['massage'];

	 if (empty($_POST['name'])) {
   			 $error['name'] = "Name is Required";
		  }
		  else{
		    $name = $_POST['name'];
		    if (!preg_match('/^[a-zA-Z\s]*$/',$name)) {
		     $error['name'] = "Name must be letter allowed";
		    }
		   // echo htmlspecialchars($_POST['user_name']);
		  }

	if (empty($_POST['email'])) {
     $error['email'] = "User E-mail is Required";
 		 }
 		 
 	 else{
    $email = $_POST['email'];
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

    	 echo "<script>
    window.alert('email must be a >> this format abc@mail.com');
   
    </script>";
      //$error['email'] = "email must be a >> this format abc@mail.com";
     // $error['user_email'] = "email must be a valid email";
    }
}

    if (empty($_POST['con_Subject'])) {
     $error['con_Subject'] = "User Password is Required";
  	}


    if (empty($_POST['massage'])) {
     $error['massage'] = "User Password is Required";
  	}


 	 if (array_filter($error)) {
    
     // echo "error in from";
     // echo "<script>// window.location.href='user_customer.php';
     echo "<script>
    window.alert('Data Not  Insert !! Please Fill up the From');
   
    </script>";

  }	
	
	else{

	$ins_qry = "INSERT INTO contact_us(name,email,subject,massage) VALUES ('$name','$email','$subject','$massage')";
	$qry_run = mysqli_query($db,$ins_qry);
		if ($qry_run) {
			
			echo "<script>
   				 window.alert('Your Massage Has Been Send...!!');
   				 window.location.href='contact_us.php';
			</script>";
			
		}

	}
}	
	


?>