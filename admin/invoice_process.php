<?php 
    
    require_once('conn.php');

    
        
        //Select Data
    if (isset($_GET['invoiceID'])) {

        $cusID = $_GET['invoiceID'];
       
    if (isset($_POST['create'])) {

        


        $sql ="SELECT * FROM tbl_order WHERE customer_id=$cusID";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        echo $product_name   = $row['product_name'];
         $price             = $row['price'];
        $quentity       = $row['quentity'];

       //$total_price = $quentity * $row['price'];

      
      


        //Bill Address
        //$cusID = $_POST['cusID'];

        $bill_name = $_POST['bill_name'];
        $bill_address = $_POST['bill_address'];
        $bill_email = $_POST['bill_email'];
        $bill_phone = $_POST['bill_phone'];

        //Invoice Address
        $in_name = $_POST['in_name'];
        $in_address = $_POST['in_address'];
        $in_phone = $_POST['in_phone'];
       // $invoiceID = rand(0,999999);

        //date_default_timezone_set("Asia/Dhaka");
       // $date = date("d-m-Y h:i:s A");
        

        
        $ins_qry = "INSERT INTO invoice(invoiceID,invoice_name,invoice_address,invoice_email,invoice_phone,address,email,phone_no,product_name,product_price,product_qty,date_of_invoice) 
        VALUES
         ('$invoiceID','$bill_name','$bill_address','$bill_email','$bill_phone','$in_name','$in_address','$in_phone','$product_name','$price','$quentity','$date')";
        $run_qry = mysqli_query($conn,$ins_qry);
        if ($run_qry) {
            //echo "Data Insert..!!";
            echo "<script>
                 window.alert('Data Insert !!');
                 window.location.href='order_list.php';
                 </script>";
        }
    }
    
}
 ?>