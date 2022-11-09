<?php 

require_once('conn.php');

?>


<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


.pro_info {
    background: blue;
    width: 500px;
    color: #fff;
    margin:0 auto;
	text-align:center;
}
.bikash_info{
    background: orange;
    width: 500px;
    color: #fff;
    float: right;
	
}
.bikash_info img{
	padding-left:10px;
	height:120px;
}

</style>
</head>
<body>

    <div class="wrapper">
        <h2 style="color:red"></h2>
		<div class="order">
			
		

<div class="pro_info">
	<h2>Product Information</h2>
	<form action="" method="post">
	
	Phone Number: <input type="text"  name="phone_no" style="margin-left: 10px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" name="bikash_txt_id"></br>
	
Message: <textarea  name="sms" rows="4" cols="35" style="margin-left: 10px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" name="bikash_txt_id"></textarea>

		<input type="submit" value="Payment" name="add_now" style="text-align: center;
    margin-left: 159px;padding: 3px;margin-top: 5px;margin-bottom: 5px; background: orange;
    color: #fff;font-size: 18px;border: none padding: 5px;cursor: pointer;"><br/>
	
	</form>
</div>


		</div>


    </div>





<?php 


if(isset($_POST['add_now'])){

$phone_no 	= $_POST['phone_no'];
$sms 		= $_POST['sms'];

$to = $phone_no;
$token = "618da701acc2048b9522cc3ebb2617fd";
$message = $sms;

$url = "http://api.greenweb.com.bd/api.php";


$data= array(
'to'=>"$to",
'message'=>"$message",
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

//Error Display
echo curl_error($ch);


	
	
} ?>
</body>
</html>


