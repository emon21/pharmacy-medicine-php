<?php

session_start();
require_once('dbcon.php');


$user_email = $_REQUEST['facultyemail'];
$user_pass = $_REQUEST['password'];

//$user_type  = $_POST['user_type'];
//$user_type = $_REQUEST['user_type'];
//$createAuth = md5(sha1($user_email.$user_pass));


$check_user = "select * from reg_user WHERE email='$user_email' and  password='$user_pass'";

//$check_user = "select * from reg_user WHERE email='$user_email' and  password='$user_pass' and user_type='$user_type'";
$login_user = mysqli_query($db,$check_user);
$checkresult = mysqli_num_rows($login_user);
/*while($row = mysqli_fetch_array($login_user)){
if($row['user_type']=='dr'){
			header("location: dr.php");
		}
		else if($row['user_type']=='farmest'){
			header("location: farmest.php");
		}
		//else if($row['user_type']=='Employee'){
		else if($row['user_type']=='user'){
			header("location: employee.php");
		}
	} 
	exit()*/
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
		header("location: user_login.php?wrong_info");
	}

	
?>
