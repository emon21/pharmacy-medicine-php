<?php 
		require_once('dbcon.php');

		// $cus_name = $cus_address = $cus_city = $cus_country = $cus_zip_code = $cus_phone = $cus_email = $cus_password = "";
		$cus_name		    = "";
 		$cus_address		= "";
 		$cus_city 			= "";
 		$cus_phone		    = "";
 		$cus_email	    	= "";
 		$cus_password	    = "";

 		$error = array('cus_name'=>'','cus_address'=>'','cus_city'=>'','cus_phone'=>'','cus_email'=>'','cus_password'=>'');

	if (isset($_POST['customer_reg'])) {
		
		$cus_name		    = $_POST['cus_name'];
 		$cus_address		= $_POST['cus_address'];
 		$cus_city 			= $_POST['cus_city'];
 		$cus_phone		    = $_POST['cus_phone'];
 		$cus_email	    	= $_POST['cus_email'];
 		$cus_password	    = $_POST['cus_password'];
		
		$otp = rand(100000,999999);
		
 		$sel_e = "SELECT * FROM customer WHERE cus_email='$cus_email'";
 		$res_e = mysqli_query($db,$sel_e);
		
		$sel_n = "SELECT * FROM customer WHERE cus_phone='$cus_phone'";
 		$res_n = mysqli_query($db,$sel_n);

 		 if (empty($_POST['cus_name'])) {
   			 $error['cus_name'] = "User Name is Required";
		  }
		  else{
		    $cus_name = $_POST['cus_name'];
		    if (!preg_match('/^[a-zA-Z\s]*$/',$cus_name)) {
		     $error['cus_name'] = "User Name must be letter allowed";
		    }
		   // echo htmlspecialchars($_POST['user_name']);
		  }

		 $cus_phone = $_POST['cus_phone'];
 	  if (empty($cus_phone)) {
 		   $error['cus_phone'] = "Mobile Number is Required";
		  }

	  else{

	   if(!is_numeric($cus_phone))
	    {
	   $error['cus_phone'] = "Only Number";
	    //echo "<script>alert('$message')</script>";
	    }
	     
	    else if(strlen($cus_phone) !=11) {
	        $error['cus_phone'] = " Only 11 digit Number";
	    } 
		
		
		 else if(mysqli_num_rows($res_n) > 0) {

 		$error['cus_phone'] = "Sorry !! Your Mobile Number IS Alreday Taken";
 		// echo "<script>
         
      //  window.alert('Sorry !! Your E-mail IS Alreday Taken')
       // </script>";
	
	
 		 }
	   // echo htmlspecialchars($_POST['mob_no']);
	  }


	if (empty($_POST['cus_email'])) {
     $error['cus_email'] = "User E-mail is Required";
 		 }
 		 
 	 else{
    $cus_email = $_POST['cus_email'];
    if (!filter_var($cus_email,FILTER_VALIDATE_EMAIL)) {
      $error['cus_email'] = "email must be a >> this format abc@mail.com";
     // $error['user_email'] = "email must be a valid email";
    }

    else if(mysqli_num_rows($res_e) > 0) {

 		$error['cus_email'] = "Sorry !! Your E-mail IS Alreday Taken";
 		// echo "<script>
         
      //  window.alert('Sorry !! Your E-mail IS Alreday Taken')
       // </script>";
	
	
 		 }
    //echo htmlspecialchars($_POST['user_email']);
  }

   if (empty($_POST['cus_password'])) {
     $error['cus_password'] = "User Password is Required";
  }

 	 if (array_filter($error)) {
    
     // echo "error in from";
     // echo "<script>// window.location.href='user_customer.php';
     echo "<script>
    window.alert('Data Not  Insert !! Please Fill up the From');
   
    </script>";

  }	 

 	else{

		$up_qry =  "INSERT INTO customer(cus_name,cus_address,cus_city,cus_phone,otp,cus_email,cus_password)
		VALUES ('$cus_name','$cus_address','$cus_city','$cus_phone','$otp','$cus_email','$cus_password')";
		$update = mysqli_query($db,$up_qry);

	      if ($update) {

	          echo "<script>
	         
	        window.alert('Data Inserted Successfully ...!!');
	        window.location.href='user_login.php';
	        </script>";
	       
		}
		
		
$to = $cus_phone;
$token = "618da701acc2048b9522cc3ebb2617fd";
$otp = $otp;
//$message = "Hi.$user_name. ";

$message= "Hi ".$cus_name." "."This Your OTP :".$otp;
//$otp_sms= "Your OTP IS :".$otp;
//$message = "Hi  Alvi, How are you? This is my first message using PHP...!!";

$url = "http://api.greenweb.com.bd/api.php";


$data= array(
'to'=>"$to",
'otp'=>"$otp",
'message'=>"$message",
//'otp_sms'=>"$otp_sms",
'token'=>"$token"
); // Add parameters in key value
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
echo $smsresult;
if ($smsresult) {
	echo "<script>
    window.alert('Your OTP Has Been Send Your Phone...!!');
   
    </script>";
	header('location:verify.php');
	
}

//Error Display
echo curl_error($ch);
	}
}

 ?>