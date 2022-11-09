<?php 

session_start();
$userid = $_SESSION['user_id'];

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

td {
  padding: 10px;
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
        <h1 class="mt-4">Wel Come To User Profile Page</h1><br/>
      

      <!--  <div class="card-body">
                
                <h4 class="card-title">Name : <?php echo $_SESSION['name'];?></h4>
                <p class="card-text">Mobile No : <?php echo $_SESSION['mob_no'];?></p>
                <p class="card-text">Fac ID :<?php echo $_SESSION['fac_id'];?></p>
                <p class="card-text">DOB :<?php echo $_SESSION['dob'];?></p>

                <a href="update_profile.php?profile_id=<?php echo $_SESSION['fac_id'];?>" class="btn btn-primary">Update Profile</a>

              </div> -->

             <?php 
            // SELECT * FROM `tec_bio` WHERE user_id=3 
              $sel_qry = "SELECT * FROM reg_user WHERE id=$userid";


             
              $run_qry = mysqli_query($db,$sel_qry);
             // $rowcount = mysqli_num_rows($run_qry);
              while ($row = mysqli_fetch_array($run_qry)) {
             
             
              ?>

              <table border="1" width="100%">
                <tr>
                  <td>User Name</td>
                  <td>:</td>
                  <td><?php echo  $row['user_name']; ?></td>

                </tr>

                <tr>
                  <td>Your Mobile Number </td>
                  <td>:</td>
                  <td><?php echo  $row['mob_no']; ?></td>

                </tr>

                <tr>
                  <td>Your Email Address</td>
                  <td>:</td>
                  <td><?php echo  $row['email']; ?></td>

                </tr>

                
              </table>
  <?php
   
    }
     ?> 


<br/>

 <a href="update_profile.php?profile_id=<?php echo $userid;?>" class="btn btn-primary">Update Profile</a>

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
