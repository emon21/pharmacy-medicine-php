<?php 

require_once('conn.php');
require_once('add_register_process.php');

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Home :: Page</title>
	<link rel="stylesheet" href="css/admin.css" />
	<style>
	
	#register_form {
  width: 37%;
  margin: 100px auto;
  padding-bottom: 30px;
  border: 1px solid #918274;
  border-radius: 5px;
  background: white;
}
.error {
	color: #fd0202;
	font-size: 18px;
	/* margin: 0 auto; */
	/* margin-left: 363px; */
	/* height: 16px; */
	/* padding-bottom: 25px; */
	width: 324px;
	/* text-transform: uppercase; */
	/* float: left; */
	text-align: left;
}

.pass_label {
	color: #0f86f5;
	font-size: 18px;
	/* margin: 0 auto; */
	margin-left: 363px;
	height: 21px;
	/* padding-bottom: 25px; */
	width: 360px;
	/* text-transform: uppercase; */
	/* background: aliceblue; */
	float: left;
	margin-bottom: 10px;
	text-align: left;
	font-weight: bold;
}

.form_error input {
  border: 10px solid #fff;
}

	</style>
</head>
<body>
<?php require_once('inc_file/sidebar.php');?>
<div class="content">


</div>

<div class="wrapper">
<form action="" method="POST">
<fieldset>
<legend> Register Information: </legend>
<div>
  <label>Full Name</label>
  <input type="text" name="user_name" class="input_box2" placeholder="Your Name...!!" value="<?php echo $user_name; ?>">
  	<span class="error">
		<?php echo $error['user_name']; ?>
	</span>
</div>
<div>
  <label>Mobile Number</label>
  <input type="text" name="mob_no" class="input_box2" placeholder="Your Mobile Number...!!">
  	<span class="error">
		<?php echo $error['mob_no']; ?>
	</span>
</div>
<div>
  <label>E-mail</label>
  <input type="text" name="user_email" class="input_box2" placeholder="Your E-mail Address...!!">
  	<span class="error">
		<?php echo $error['user_email']; ?>
	</span>
</div>
<div>
  <label>Password</label>
  <input type="text" name="user_pass" class="input_box2" placeholder="Your Password...!!">
  	<span class="error">
		<?php echo $error['user_pass']; ?>
	</span>
</div>
  
  <label for="sel1">Select User Type:</label>
   <select name="user_type" class="formtext form-control" style="width:318px; height:35px;">
                                <option selected="selected"><center>>> Choose User Type << </center></option>
                                   
                                <option value="dr">DR</option>
                                <option value="pharmaest">Pharmaest</option>
                                <span class="error">
		<?php echo $error['user_type']; ?>
	</span>
  
                          </select>
        
</br></br>
  <input type="submit" value="Add Register" class="btn_insert" name="add_user" />
  </fieldset>
</form>
</div>


</body>
</html>