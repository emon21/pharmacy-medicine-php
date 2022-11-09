



<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}

input {
    width: 380px;
    height: 40px;
    margin-bottom: 5px;
    padding: 10px;
    font-size: 18px;
    margin-top: 10px;
}

textarea {
    width: 380px;
    height: 120px;
    margin-top: 5px;
    margin-bottom: 5px;
    font-size: 20px;
    padding: 10px;
}
</style>

<!--Author      : @arboshiki-->

<form action="" method="post">
<div id="invoice">

    <!-- <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
        </div>
        <hr>
    </div> -->
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <?php 

                            date_default_timezone_set("Asia/Dhaka");
                           $date = date("Y-m-d h:i:s A");

                            $invoiceID = rand(0,999999);
                        echo "invoice"."No".": " .$invoiceID; ?>
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            Arboshiki
                            </a>
                        </h2>
                        <div>455 Foggy Heights, AZ 85004, US</div>
                        <div>(123) 456-789</div>
                        <div>company@example.com</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">Bill TO:</div>
                        <h2 class="to"><input type="text" placeholder="Enter Name..." name="bill_name"></h2>
                        <div class="address">
                            <textarea  id="" cols="30" rows="10" name="bill_address"></textarea>
                        </div>
                        <div class="email"><input type="text" placeholder="Enter Email..." name="bill_email"></div>
                        <div class="phone"><input type="text" placeholder="Enter Phone No..." name="bill_phone"></div>
                    </div>
                    <div class="col invoice-details">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h1 class="invoice-id"><input type="text" placeholder="Enter Name..." name="in_name"></h1>
                        <div class="date"><textarea  id="" cols="30" rows="10" placeholder="Address" name="in_address"></textarea></div>
                        <div class="date"><input type="text" placeholder="Enter Phone..." name="in_phone"></div>
                        <div class="date">Date of Invoice: <?php echo $date; ?></div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>Item NO</th>
                            <th class="text-left">Product Name</th>
                            <th class="text-right">PRICE</th>
                            <th class="text-right">Quentity</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>

              <?php

              require_once('conn.php');

        if (isset($_GET['invoiceID'])) {
             $cusID = $_GET['invoiceID'];
        
        $sql ="SELECT * FROM tbl_order WHERE customer_id=$cusID";
        $result = mysqli_query($conn,$sql);
        $count = 1;
        foreach($result as $output){ ?>

                    <tbody>
                        <tr>
                            <td class="no"><?php echo $count;?></td>
                            <td class="text-left">
                                <?php echo $output['product_name'];?>
                            </td>
                            <td class="unit"><?php echo $output['price'];?></td>
                            <td class="qty"><?php echo $output['quentity'];?></td>
                            <td class="total"><?php echo $output['price'];?></td>
                        </tr>
                        
                    </tbody>
                     <?php $count++; } } ?>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX 25%</td>
                            <td>$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td>$6,500.00</td>
                        </tr>
                    </tfoot>
                    
                </table>
                <div class="thanks">Thank you!</div>
                <div class="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
            <div class="toolbar hidden-print">
        <div class="text-center">
            <!-- <button id="printInvoice" class="btn btn-info"><i class="fa fa-print" name="create"></i> Create Invoice</button> -->

           <!--  <input type="submit" class="btn btn-info" value="Create Invoice" name="create"> -->

         <!--   <a href="inv.php?invoiceID=<?php echo $output['customer_id'];?>">Invoice</a> -->

           <!-- <a href="invoice_process.php?invoiceID=<?php echo $output['customer_id'];?>" class="btn btn-info" value="Create Invoice" name="create" >Invoice</a> -->

           <input type="submit" value="Create Invoice" class="btn btn-success" name="create">
           
        </div>
        <hr>
    </div>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
    
</div>
</form>

<script>
    function printleyar(Layer){

        var 
    }
     $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>
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