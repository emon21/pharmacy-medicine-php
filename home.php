<?php require_once('inc_file/header.php');



// $userid = $_SESSION['fac_id'];
//$login = $_SESSION['fac_id'];



$userid = $_SESSION['user_id'];

 if($userid==false) {
  header("locatin:user_customer.php");
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
</style>
</head>
<body>

    <div class="wrapper">
    <h2>WelCome To PharmaceBD</h2>


    </div>




</body>
</html>
