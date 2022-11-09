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
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

   <?php require_once('inc_file/side_bar.php'); ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

           <!--  <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
             <img class="user_profile" src="images/img_avatar3.png"> 
            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <?php  echo $_SESSION['name'];  ?>
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
        <h1 class="mt-4">Wel Come To DashBoard</h1><br/>
      

        <div class="card-columns">
 
  <div class="card bg-warning">
    <div class="card-body text-center">
      <p class="card-text">Your Upload File Here</p>
       <div class="float-sm-right">
         <i class="fa fa-cloud"></i>
<span class="rounded-left">If You Upload Click here</span>
           <!--  <button type="button" class="btn btn-outline-dark">Upload</button> -->
<a href="" class="btn btn-outline-dark"> Upload </a>
      </div><br/>
    </div>
  </div>

  <div class="card bg-info">
    <div class="card-body text-center">
      <p class="card-text">If your Document Save File</p>

       <div class="float-sm-right">
         <i class="fa fa-cloud"></i>
<span class="rounded-left">If You Download Click here </span>
           <!--  <button type="button" class="btn btn-outline-dark">Upload</button> -->
<a href="" class="btn btn-outline-dark"> Down load </a>
      </div><br/>

    </div>
  </div>

  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text">See All File</p>

       <div class="float-sm-right">
         <i class="fa fa-cloud"></i>
<span class="rounded-left">See You All File Click here </span>
           <!--  <button type="button" class="btn btn-outline-dark">Upload</button> -->
<a href="" class="btn btn-outline-dark">Sll All </a>
      </div><br/>

    </div>
  </div>
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
