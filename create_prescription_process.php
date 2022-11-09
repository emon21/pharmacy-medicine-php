<?php 


require_once('dbcon.php');

	$name = "";
	$age = "";
	$sex = "";
	$problem = "";
	$weight = "";
	$medicine_id = "";
	$medicine_name = "";
	$medicine_mg = "";
	$dose = "";
	$day = "";
	$test = "";
	$test_decription = "";
	$advice = "";

	$error = array('name'=>'','age'=>'','sex'=>'');

if (isset($_REQUEST['btn_pre'])) {
 	
	$name = $_REQUEST['name'];
	$age = $_REQUEST['age'];
	$sex = $_REQUEST['sex'];

	$problem = $_REQUEST['problem'];
	$weight = $_REQUEST['weight'];

	$medicine_id = $_REQUEST['medicine_id'];
	$medicine_name = $_REQUEST['medicine_name'];
	$medicine_mg = $_REQUEST['medicine_mg'];


	$dose = $_REQUEST['dose'];
	$day = $_REQUEST['day'];

	$test = $_REQUEST['test'];
	$test_decription = $_REQUEST['test_decription'];

	$advice = $_REQUEST['advice'];

	 if (empty($_POST['name'])) {
   			 $error['name'] = "User Name is Required";
		  }
		  else{
		    $name = $_POST['name'];
		    if (!preg_match('/^[a-zA-Z\s]*$/',$name)) {
		     $error['name'] = "User Name must be letter allowed";
		    }
		   // echo htmlspecialchars($_POST['user_name']);
		  }

		   $age = $_POST['age'];
 	  if (empty($age)) {
 		   $error['age'] = "age is Required";
		  }

		  else{
		  	if (!is_numeric($age)) {
		  		$error['age'] = "Only Number";
		  	}
		  }


	   if (empty($_POST['sex'])) {
   		  $error['sex'] = "Gender is Required";
 		 }


         if (array_filter($error)) {
    
     // echo "error in from";
     // echo "<script>// window.location.href='user_customer.php';
     echo "<script>
    window.alert('Data Not  Insert !! Please Fill up the From');
   
    </script>";

  }	

  else{




 	$ins_qry = "INSERT INTO create_prescription(name,age,sex,problem,weight,medicine_id,medicine_name,medicine_mg,dose,day,test,test_decription,advice)
 	 VALUES ('$name','$age','$sex','$problem','$weight','$medicine_id','$medicine_name','$medicine_mg','$dose','$day','$test','$test_decription','$advice')";
 	$run_qry = mysqli_query($db,$ins_qry);
 	if ($run_qry) {

 		//

 		//echo "Your Department Is Inseted...!!";
    	//echo "<a href='create_prescription.php'>Back</a>";
    	echo "<script>
    window.alert('Data Insert Successfully...!!');
   
    </script>";

 		//header("location: create_prescription.php");
 	}

  }

 }

  ?>