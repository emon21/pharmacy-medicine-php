<!DOCTYPE html>
<html lang="en">
<head>
  <title>Verify Page</title>
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
  	<h2>Verify Information :</h2>
  <form action="" method="post">
    
    <div class="form-group">
      <label>Phone No:</label>
      <input type="number" class="form-control" placeholder="Enter Your OTP" name="phone">
    </div>
	
	<div class="form-group">
      <label>Your OTP:</label>
      <input type="number" class="form-control" placeholder="Enter Your OTP" name="otp">
    </div>
    
    <button type="submit" class="btn btn-success" name="send_otp">Verify OTP</button>
  </form>
</div>
  <div class="col-sm-3"></div>
</div>
<?php

require_once('dbcon.php');
session_start();

date_default_timezone_set('asia/Dhaka');

if (isset($_POST['send_otp'])) {
	
//$phone_no=$_SESSION['cus_phone'];

$user_otp=$_POST['otp'];
$phone = $_POST['phone'];
//$current_id = mysql_insert_id($db);
//$email=$_SESSION['EMAIL'];
$res=mysqli_query($db,"select * from customer where cus_phone='$phone'");
$row =mysqli_fetch_assoc($res);
$id = $row['id'];
//$phone = $row['cus_phone'];
//echo $phone;
$verify_otp=$row['otp'];

//$count=mysqli_num_rows($res);
if($verify_otp == $user_otp){
  mysqli_query($db,"UPDATE customer SET account_status='1',user_otp='$user_otp' where id='$id'");
  //$_SESSION['IS_LOGIN']=$email;
 // echo "yes";
  
    echo "<script>
          alert('Your OTP IS Verify...!!');
          window.location.href='user_login.php';
          </script>"; 
  
}else{

  echo "<script>
          alert('Wrong OTP');
          window.location.href='Verify.php';
          </script>"; 
}

 
}
?>
</body>
</html>
