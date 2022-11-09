<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/login.css" />
</head>
<body>
<div class="content">
			
<div class="login_box">
<h2>Login Member</h2>
<form action="check_user.php" method="post">
<input type="text" name="email" placeholder="Enter Your E-mail.." class="input_box"><br/><br/>
<input type="password" name="pass" placeholder="Enter Your Password.." class="input_box"><br/><br/>
<input type="submit" value="Login" id="submitbtn">

</form>
<?php
if(isset($_REQUEST['wrong_info'])){
	echo '<b style="color:red;text-align:center;padding-left:30px;">Username & Password Wrong...</b>';
}
?>

</div>
			</div>
</body>
</html>