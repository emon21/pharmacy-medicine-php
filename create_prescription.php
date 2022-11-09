<?php 

session_start();
require_once('dbcon.php');
require_once('create_prescription_process.php');
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
             <?php  echo $_SESSION['name'];?>
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
    
<table class="table" width="100%">
  <form action="" method="post">
       <tr>
          <td>Patient Name</td>
          <td>:</td>
          <td>

            <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
             <span class="text-danger">
                <?php echo $error['name']; ?>
                  
                </span>
          </td>

       </tr>

      <tr>
         <td>Age</td>
         <td>:</td>
         <td>
          <input type="text" class="form-control" name="age" value="<?php echo $age; ?>">
          <span class="text-danger">
                <?php echo $error['age']; ?>
                  
                </span>
         </td>
       </tr>
      <tr>
         <td>Sex</td>
         <td>:</td>
          <td>
            <input type="text" class="form-control" name="sex" value="<?php echo $sex; ?>">
             <span class="text-danger">
                <?php echo $error['sex']; ?>
                  
                </span>
          </td>
      </tr>
      <tr>
 
     <td> <h2>Patient Problem</h2></td>
     
      </tr>

  <tr>
        <td>Problem</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="problem"></td>
      </tr>

      <tr>
        <td>Weight</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="weight"></td>
      </tr>
       
        <tr>
 
  <td> <h2>Medicine</h2></td>
 
 </tr>

 <tr>
        <td>Medicine Type</td>
        <td>:</td>
        <td>
          <textarea class="form-control" rows="5" name="medicine_id"  placeholder="Your Medicine Type...!!"></textarea>

          </td>
      </tr>
       <tr>
        <td>Medicine Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="medicine_name"></td>
      </tr>

      <tr>
        <td>Medicine MG/ML</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="medicine_mg"></td>
      </tr>
       <tr>
        <td>Does</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="dose"></td>
      </tr>
       <tr>
        <td>Day</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="day"></td>
      </tr>
      
      <tr>
 
  <td> <h2>Test</h2></td>
 
 </tr>

 <tr>
        <td>Test Name</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="test"></td>
      </tr>
       <tr>
        <td>Test Description</td>
        <td>:</td>
        <td><textarea class="form-control" rows="5" name="test_decription"  placeholder="Your Test Description...!!"></textarea></td>
      </tr> 
 <tr>
  <td> <h2>Advice</h2></td>
 
 </tr>
<tr>
        <td>Advice</td>
        <td>:</td>
        <td><textarea class="form-control" rows="5" id="comment" name="advice"></textarea></td>
      </tr>
       <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn btn-primary" name="btn_pre" value="Request Process...">
 
  
</td>
      </tr>

  </form>

</table>

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
