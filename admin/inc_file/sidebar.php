<?php require_once('conn.php');;

 session_start();

?>

<div class="navber">
<a href="admin.php">Home</a>
<?php 
       if($_SESSION['user_type']=="admin"){ ?>
		<a href="add_user.php">Add User</a>
		<a href="all_user_list.php">All User</a>


       <?php } ?>




<a href="contact_list.php">Contact List</a>
<a href="customer_list.php">Customer List</a>
<a href="add_register.php">Add Register</a>
<a href="add_register_list.php">All Register List</a>
<a href="medicine_category.php">Add Medicine Catagory</a>
<a href="all_category.php">Medicine Cate List</a>
<a href="medicine_info.php">Add Medicine</a>
<a href="medicine_list.php">Medicine List</a>
<!--a href="add_header.php">Add Header</a>
<a href="add_footer.php">Footer</a-->
<a href="ambulance_service.php">Ambulance Service</a>
<a href="ambulance_service_list.php">Ambulance List</a>
<a href="ambulance_order_list.php">Ambulance Order List</a>
<a href="biash_pay.php">Bkash Payment</a>
<!-- <a href="our_team.php">Our Team</a> -->
<a href="order_list.php">Order List</a>
<a href="pay_list.php">Payment List</a>
<a href="report.php">Report</a>
<!-- <a href="invoice_list.php">Invoice List</a>
<a href="invoice_details.php">Invoice Search</a> >
<a href="prescription_list.php">Prescription list</a-->

<a href="login.php">Log Out</a>



</div>