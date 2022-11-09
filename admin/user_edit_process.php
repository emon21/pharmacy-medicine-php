  <?php 

require_once('conn.php');
     if(isset($_REQUEST['editId'])) {

		$edid_ID = $_REQUEST['editId'];


	//$edit_id = $_POST['customer_ID'];
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	$user_type = $_POST['user_type'];


	  $up_qry =  "UPDATE admin_user SET user_name='$user_name',user_pass='$user_pass',user_type='$user_type' WHERE id='$edid_ID'";
	              //UPDATE cart SET pro_qty='10' WHERE cart_id='46' 
	  $update = mysqli_query($conn,$up_qry);

	      if ($update) {

	          echo "<script>
	         
	        window.alert('Data Update Successfully ...!!');
	        window.location.href='all_user_list.php';
	        </script>";
	        
	      }
 } 
 ?>