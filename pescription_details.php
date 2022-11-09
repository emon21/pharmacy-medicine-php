<?php 

session_start();
require_once('dbcon.php');
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

  <style>
      
      .navbar-nav .dropdown-menu {
    position: static;
    float: none;
    margin-top: 11px;
    border-color: #292d2d;
}

.rounded-circle {
    border-radius: 50% !important;
    padding: 35px;
    /* width: 200px; */
    /* height: 200px; */
    text-align: center;
}

.user_profile {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  float: left;
}
 
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

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
       <?php require_once('inc_file/side_bar.php'); ?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
  

    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

         
             <img class="user_profile" src="images/img_avatar3.png"> 
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php  echo $_SESSION['name']; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Log Out</a>

              </div>
            </li>

          </ul>
        </div>

      </nav>

      <div class="container-fluid">
        
        <div class="container">
  <h2>View Data</h2>
  <p>Prescription Details Data Only Patient.</p>            
 
            
  <table class="table table-striped table-bordered">
    <?php require_once('dbcon.php');

      if(isset($_GET['view_id'])){
        $id = $_GET['view_id'];
        $show="SELECT * FROM create_prescription where id='$id'";

        $ser_result=mysqli_query($db,$show); 

        while($row=mysqli_fetch_array($ser_result)){
    

     ?>

    


     
    <tbody>
      <tr>
        <th>Name</th>
        <th> <?php echo $row['name'];?></th>
       
      </tr>
<tr>
        <th>Age</th>
        <th> <?php echo $row['age'];?></th>
       
      </tr>
<tr>
        <th>Gander</th>
        <th> <?php echo $row['sex'];?></th>
       
      </tr>
<tr>
        <th>Problem</th>
        <th> <?php echo $row['problem'];?></th>
       
      </tr>

      <tr>
        <th>Weight </th>
        <th> <?php echo $row['weight'];?></th>
       
      </tr>


      <tr>
        <th>Medicine_id </th>
        <th> <?php echo $row['medicine_id'];?></th>
       
      </tr>

      <tr>
        <th>Medicine_name</th>
        <th> <?php echo $row['medicine_name'];?></th>
       
      </tr>

      <tr>
        <th>Medicine_mg </th>
        <th> <?php echo $row['medicine_mg'];?></th>
       
      </tr>

      <tr>
        <th>Dose </th>
        <th> <?php echo $row['dose'];?></th>
       
      </tr>

      <tr>
        <th>Day</th>
        <th> <?php echo $row['day'];?></th>
       
      </tr>
      <tr>
        <th>Test</th>
        <th> <?php echo $row['test'];?></th>
       
      </tr>

      <tr>
        <th>Test Decription</th>
        <th> <?php echo $row['test_decription'];?></th>
       
      </tr>

       <tr>
        <th>Advice</th>
        <th> <?php echo $row['advice'];?></th>
       
      </tr>

     
    </tbody>
     <?php }} ?>
    
  </table>



 
</div>

      </div>

    </div>
    <!-- /#page-content-wrapper -->



  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
