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
<form action="bikash_process.php" method="post">
<fieldset>
<legend> Payment Information: </legend>
<div>
  <label>Bkash NO:</label>
  <input type="text" name="bkash_no" class="input_box2" placeholder="Enter Your Bkash No">
  	
</div>
<div>
  <label>Transition No :</label>
  <input type="text" name="txt_id" class="input_box2" placeholder="Enter Your Transition No">
  	
</div>

<div>
  <label>Total Amount:</label>
  <input type="text" name="amount" class="input_box2" placeholder="Enter Your Amount">
  	
</div>

  
 
</br></br>
  <input type="submit" value="Payment" class="btn_insert" name="add_user" />
  </fieldset>
</form>

</div>


</body>
</html>