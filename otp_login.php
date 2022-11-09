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
      <label>User Name:</label>
      <input type="text" class="form-control" placeholder="Enter Your User Name" name="name">
    </div> 
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" placeholder="Enter Your Password" name="pass">
    </div>
    
    <button type="submit" class="btn btn-success" name="send_otp">Login</button>
  </form>
</div>
  <div class="col-sm-3"></div>
</div>
<?php

$db=mysqli_connect('localhost','root','','sms');
if (isset($_POST['send_otp'])) {

$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];

$check_user = "select * from user_list WHERE name='$name' and  password='$pass' and account_status='1'";

$login_user = mysqli_query($db,$check_user);
$checkresult = mysqli_num_rows($login_user);

if($checkresult===1){
  


    //setcookie("curentUser",$createAuth,time()+(86400*7));

    $user_info = mysqli_fetch_array($login_user);
    $_SESSION['user_email']=$user_email;
    $_SESSION['user_id']=$user_info['id'];
    $_SESSION['name']=$user_info['user_name'];
    $_SESSION['mob_no']=$user_info['mob_no'];
    $_SESSION['user_type']=$user_info['user_type'];
    
    header("location: profile.php");
  }
  else{
    //$_SESSION['username'] = $user_name;
    header("location: verify.php?wrong_info");
  }


}
?>
</body>
</html>
