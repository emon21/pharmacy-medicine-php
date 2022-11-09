<?php require_once('inc_file/header.php');?>
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
<div class="shoping">
  <div class="shopleft">
    <a href="ambulance_order_list.php" class="shop_btn">Ambulance Order</a>
  </div>
  <div class="shopright">
      <a href="orderdetails.php" class="shop_btn">Medicine Order</a>
  </div>
</div>
    </div>




</body>
</html>
