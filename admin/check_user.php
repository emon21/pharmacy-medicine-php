<?php

session_start();
require_once('conn.php');

//$dbuser = "hasib";
//$dbpass = "12345";


$user_email = $_REQUEST['email'];
$user_pass = $_REQUEST['pass'];
//$createAuth = md5(sha1($user_email.$user_pass));


$check_user = "select * from admin_user WHERE user_name='$user_email' and user_pass='$user_pass'";
$login_user = mysqli_query($conn,$check_user);
$checkresult = mysqli_num_rows($login_user);


	if($checkresult===1){
		//setcookie("curentUser",$createAuth,time()+(86400*7));
		$user_info = mysqli_fetch_array($login_user);
		//$_SESSION['user_email']=$user_email;
		
		$_SESSION['user_id']=$user_info['id'];
		$_SESSION['user_name']=$user_info['user_name'];
	    $_SESSION['mob_no']=$user_info['mob_no'];
	    $_SESSION['user_type']=$user_info['user_type'];

		header("location: admin.php");
	}
	else{
		
		header("location: login.php?wrong_info");
	}
	

// Image upload DB

$img_icon = $_FILES['icon_pic']['name'];
$img_icon_tmp = $_FILES['icon_pic']['tmp_name'];

$location ="img/";
move_uploaded_file($img_icon_tmp,$location."$img_icon");

//if($dbuser===$user_email && $dbpass===$dbpass){
	//setcookie("curentUser",$user_email,time()+(86400*7));
	//header("location: profile.php");
//}
//else{
		
		//header("location: login.php?wrong_info");
	//}
/* Auth_Token*/

//$password = $_REQUEST['pass'];
//$encryptpassword = md5(sha1($password));
//$authToken = md5(sha1($user_email.$user_pass));
/*
$getUser = "select * from myguests WHERE email='$user_email' AND password='$user_pass'";
$match_user = mysqli_query($conn,$getUser);
$count_user = mysqli_num_rows($match_user);
if($count_user===1){
	
if($match_user==true){
	setcookie("curentUser",$user_email,time()+(86400*7));
	header("location: profile.php");
	}
	}
	else{
		
		header("location: login.php?wrong_info");
	}

*/
?>