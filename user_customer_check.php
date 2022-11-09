<?php 


session_start();
require_once('dbcon.php');	
$user_email = $_REQUEST['cus_email'];
$user_pass = $_REQUEST['cus_pass'];
//$createAuth = md5(sha1($user_email.$user_pass));


$check_user = "select * from customer WHERE cus_email='$user_email' and  cus_password='$user_pass'
 and account_status='1'";
$login_user = mysqli_query($db,$check_user);
$checkresult = mysqli_num_rows($login_user);

if($checkresult===1){

		//setcookie("curentUser",$createAuth,time()+(86400*7));

		$user_info = mysqli_fetch_array($login_user);
		$_SESSION['user_email']=$user_email;
		$_SESSION['user_id']=$user_info['id'];
		$_SESSION['cus_name']=$user_info['cus_name'];
		
		
		
		header("location: home.php");
	}
	else{
		//$_SESSION['username'] = $user_name;
		header("location: user_login.php?wrong_info");
	}

 ?>