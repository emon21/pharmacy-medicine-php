<?php 

 require_once('dbcon.php');
 
if(isset($_GET['sms_id'])){
	
	$pay_id = $_GET['sms_id'];
	
	$show ="SELECT * FROM tbl_order WHERE id='$pay_id'";
	
	 $ser_result=mysqli_query($db,$show); 
       
       
        while($row=mysqli_fetch_array($ser_result)){
			
		$bikash_number = $row['bikash_number'];
		$bikash_txt_id = $row['bikash_txt_id'];
	
}



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
textarea {
    margin-right: 109px;
    margin-top: -41px;
    float: right;
	height: 120px;
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
	
		Phone Number : <input type="text" name="phone_no" style="margin-left: 10px;
    padding: 3px;margin-top: 5px;margin-bottom: 5px;
" placeholder="Enter Your Product Name...!!"><br/>

	<p style="text-align: left;padding-left: 100px;">Message : </p>
	<textarea  name="sms"></textarea><br/>
		
		<input type="submit" value="Send Message" name="add_now" style="text-align: center;
    margin-left: 159px;padding: 3px;margin-top: 5px;margin-bottom: 5px; background: orange;
    color: #fff;font-size: 18px;border: none padding: 5px;cursor: pointer;"><br/>
	
	</form>
</div>


		</div>


    </div>


<?php } ?>


<?php 


if(isset($_POST['add_now'])){

$phone_no 			= $_POST['phone_no'];
$sms 				= $_POST['sms'];
//$bikash_number 		= $_POST['bikash_number'];
//$bikash_txt_id 		= $_POST['bikash_txt_id'];

$to 			= $phone_no;
//$bikash_number 	= $bikash_number;
//$bikash_txt_id 	= $bikash_txt_id;
$token 			= "618da701acc2048b9522cc3ebb2617fd";
$message 		= $sms;

$url = "http://api.greenweb.com.bd/api.php";


$data= array(
'to'=>"$to",
//'bikash_number'=>"$bikash_number",
//'bikash_txt_id'=>"$bikash_txt_id",
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
//echo $smsresult;
if($smsresult){
	//echo "sms send..!!";

echo "<script>
     
    window.alert('sms send Your Phone...!!');
    window.location.href='orderdetails.php';
    </script>";
	
	}
//Error Display
echo curl_error($ch);


	
	
} ?>
</body>
</html>


