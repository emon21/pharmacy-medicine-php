<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="col-sm-3"></div>

  <div class="col-sm-6">
  	<h2>Information</h2>
  <form action="" method="post">
    <div class="form-group">
      <label>Full Name:</label>
      <input type="text" class="form-control"  placeholder="Enter Your Name" name="user_name">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control"  placeholder="Enter Your Name" name="pass">
    </div>
    <div class="form-group">
      <label>Phone no:</label>
      <input type="text" class="form-control" placeholder="Enter Your Phone" name="phone_no">
    </div>
    
    <button type="submit" class="btn btn-success" name="send_otp">Send OTP</button>
  </form>
</div>
  <div class="col-sm-3"></div>
</div>
<?php 

$db =mysqli_connect("localhost","root","","sms");
if (isset($_POST['send_otp'])) {
	
$user_name 	= $_POST['user_name'];
$pass 	= $_POST['pass'];
$phone_no 	= $_POST['phone_no'];
$otp = rand(100000,999999);
 $ins ="INSERT INTO user_list(name,password,phone_no,otp) VALUES ('$user_name','$pass','$phone_no','$otp')";
 $run_qry =mysqli_query($db,$ins);
 if ($run_qry) {
 	echo "Your OTP is Send...!!";
 }

$to = $phone_no;
$token = "618da701acc2048b9522cc3ebb2617fd";
$otp = $otp;
//$message = "Hi.$user_name. ";

$message= "Hi ".$user_name." "."This Your OTP :".$otp;
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
 ?>
</body>
</html>
